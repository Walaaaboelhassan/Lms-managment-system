<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Instructor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class InstructorController extends Controller
{
    /**
     * Display a listing of the Course Feedback.
     *
     */
    public function maaninstructor()
    {
        $instructors = Instructor::paginate(10);
        return view('admin.pages.instructors.index',compact('instructors'));
    }
    /**
     * Store a listing of the requested data.
     *
     */
    public function maaninstructorstore(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'designation'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png'
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $files = $request->file('image') ;

            if ($files!='') {
                $filename           = $files->getClientOriginalName();
                $picture            = 'maaninstructor'.date('dmY_His').'_'.$filename;
                $image_url          = 'public/uploads/images/instructors/' . $picture;
                $destinationPath    = base_path() . '/public/uploads/images/instructors/';
                $success            = $files->move($destinationPath, $picture);
                if ($success){
                    $image_urls = $image_url ;
                }
            }else{
                $image_urls  = '' ;
            }
            $instructors                   = new Instructor();
            $instructors->name             = $request->name;
            $instructors->designation      = $request->designation;
            $instructors->description      = $request->description;
            $instructors->image            = $image_urls;
            $instructors->save();

            return redirect()->route('admin.instructor');

        }catch (Exception $exception){
            $this->setError($exception->getMessage());
            return redirect()->back() ;

        }


    }
    /**
     * Display a listing of the Instructor edit data.
     *
     */
    public function maaninstructoredit($id)
    {
        $instructor = Instructor::find($id);
        return view('admin.pages.instructors.edit',compact('instructor')) ;
    }
    /**
     * Updated a listing of the  requested data.
     *
     */
    public function maaninstructorupdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'designation'=>'required',
            'description'=>'required',
            
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        //find requested id image that will be update
        $getimage_url = Instructor::where('id',$id)->value('image');

        //posted file information
        $files = $request->file('image') ;
        //image check
        if ($request->hasFile('image')) {
            //image delete
            if(File::exists($getimage_url)){
                unlink($getimage_url);
            }

            //get file name
            $filename           = $files->getClientOriginalName();
            //image unique name
            $picture            = 'naaninstructor'.date('dmY_His').'_'.$filename;
            // image directory
            $image_url          = 'public/uploads/images/instructors/' . $picture;
            // base image directory/path
            $destinationPath    = base_path() . '/public/uploads/images/instructors/';
            $success            = $files->move($destinationPath, $picture);
            if ($success){
                $image_urls     = $image_url ;
            }
        }else{
            $image_urls         = $getimage_url ;

        }
        //requested name
        $data['name']           = $request->name;
        //requested designation
        $data['designation']    = $request->designation;
        //requested description
        $data['description']    = $request->description;
        //image url
        $data['image']          = $image_urls;
        // data update
        Instructor::where(['id' => $id])->update($data);

        //redirect route
        return redirect()->route('admin.instructor');
    }
    /**
     * Destroy  of the  requested data.
     *
     */
    public function maaninstructordestroy ($id)
    {
        $instructor = Instructor::find($id);// find data that will delete
        //image delete
        if(File::exists($instructor->image)){
            unlink($instructor->image);
        }
        //data delete
        $instructor->delete();

        //redirect route
        return redirect()->route('admin.instructor');
    }
}
