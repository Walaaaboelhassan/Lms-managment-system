<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the Course Feedback.
     *
     */
    public function maanfeedback()
    {
        $feedbacks = Feedback::paginate(10);
        return view('admin.pages.feedbacks.index',compact('feedbacks'));
    }
    /**
     * Store a listing of the requested data.
     *
     */
    public function maanfeedbackstore(Request $request)
    {
        // validation posted data
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'institute'=>'required',
            'comment'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,svg'
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            // file information
            $files = $request->file('image') ;

            if ($files!='') {
                //file name
                $filename                   = $files->getClientOriginalName();
                //make unique image name
                $picture                    = 'maanfeedback'.date('dmY_His').'_'.$filename;
                //image path
                $image_url                  = 'public/uploads/images/feedbacks/' . $picture;
                //image base path
                $destinationPath            = base_path() . '/public/uploads/images/feedbacks/';
                $success                    = $files->move($destinationPath, $picture);
                if ($success){
                    $image_urls             = $image_url ;
                }
            }else{
                $image_urls                 = '' ;
            }

            $feedbacks                      = new Feedback();
            // name
            $feedbacks->name                = $request->name;
            //institute
            $feedbacks->institute           = $request->institute;
            //comment
            $feedbacks->comment             = $request->comment;
            //image path
            $feedbacks->image               = $image_urls;
            //store dada
            $feedbacks->save();

            return redirect()->route('admin.feedback');

        }catch (Exception $exception){
            $this->setError($exception->getMessage());
            return redirect()->back() ;

        }


    }
    /**
     * Display a listing of the Feedback edit data.
     *
     */
    public function maanfeedbackedit($id)
    {
        //get all feedback data
        $feedback = Feedback::find($id);
        return view('admin.pages.feedbacks.edit',compact('feedback')) ;
    }
    /**
     * Updated a listing of the  requested data.
     *
     */
    public function maanfeedbackupdate(Request $request, $id)
    {
        // validation posted data
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'institute'=>'required',
            'comment'=>'required',

        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        //find requested id image that will be update
        $getimage_url = Feedback::where('id',$id)->value('image');

        //posted file information
        $files              = $request->file('image') ;
        //image check
        if ($request->hasFile('image')) {
            //image delete
            if(File::exists($getimage_url)){
                unlink($getimage_url);
            }

            //get file name
            $filename               = $files->getClientOriginalName();
            //image unique name
            $picture                = 'maanfeedback'.date('dmY_His').'_'.$filename;
            // image directory
            $image_url              = 'public/uploads/images/feedbacks/' . $picture;
            // base image directory/path
            $destinationPath        = base_path() . '/public/uploads/images/feedbacks/';
            $success                = $files->move($destinationPath, $picture);
            if ($success){
                $image_urls         = $image_url ;
            }
        }else{
            $image_urls             = $getimage_url ;

        }
        //requested name
        $data['name']               = $request->name;
        //requested institute
        $data['institute']          = $request->institute;
        //requested comment
        $data['comment']            = $request->comment;
        //image url
        $data['image']              = $image_urls;
        // data update
        Feedback::where(['id' => $id])->update($data);

        //redirect route
        return redirect()->route('admin.feedback');
    }
    /**
     * Destroy  of the  requested data.
     *
     */
    public function maanfeedbackdestroy ($id)
    {
        $feedback = Feedback::find($id);// find data that will delete
        //image delete
        if(File::exists($feedback->image)){
            unlink($feedback->image);
        }
        //data delete
        $feedback->delete();

        //redirect route
        return redirect()->route('admin.feedback');
    }
}
