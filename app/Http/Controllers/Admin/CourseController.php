<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Coursecategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class CourseController extends Controller
{
    /**
     * Display a listing of the Course .
     *
     */
    public function maancourse()
    {
        //get all course category
        $categories = Coursecategory::all();
        //get all course
        $courses = Course::paginate(10);
        return view('admin.pages.courses.index',compact('courses','categories'));
    }
    /**
     * Store a listing of the requested data.
     *
     */
    public function maancoursestore(Request $request)
    {
        // Validation all input field
        $validator = Validator::make($request->all(),[
            'category_id'=>'required',
            'title'=>'required',
            'description'=>'required',
            'duration'=>'required',
            'price'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png'
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $files = $request->file('image') ;

            if ($files!='') {
                $filename               = $files->getClientOriginalName();
                $picture                = 'maancourse'.date('dmY_His').'_'.$filename;
                $image_url              = 'public/uploads/images/courses/' . $picture;
                $destinationPath        = base_path() . '/public/uploads/images/courses/';
                $success                = $files->move($destinationPath, $picture);
                if ($success){
                    $image_urls         = $image_url ;
                }
            }else{
                $image_urls         = '' ;
            }
            $courses                        = new Course();
            // course category id
            $courses->category_id           = $request->category_id;
            // course title
            $courses->title                 = $request->title;
            // course discription
            $courses->description           = $request->description;
            // course duration
            $courses->duration              = $request->duration;
            // course price
            $courses->price                 = $request->price;
            // course image path
            $courses->image                 = $image_urls;
            $courses->save();

            //redirect
            return redirect()->route('admin.course');

        }catch (Exception $exception){
            $this->setError($exception->getMessage());
            return redirect()->back() ;

        }
    }
    /**
     * Display a listing of the Course edit data.
     *
     */
    public function maancourseedit($id)
    {
        //fiend requested data
        $course = Course::find($id);
        $categories = Coursecategory::all();
        // view file..
        return view('admin.pages.courses.edit',compact('course','categories')) ;
    }
    /**
     * Updated a listing of the  requested data.
     *
     */
    public function maancourseupdate(Request $request, $id)
    {
        // Validation all input field
        $validator = Validator::make($request->all(),[
            'category_id'=>'required',
            'title'=>'required',
            'description'=>'required',
            'duration'=>'required',
            'price'=>'required',

        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //find requested id image that will be update
        $getimage_url = Course::where('id',$id)->value('image');

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
            $picture            = 'maancourse'.date('dmY_His').'_'.$filename;
            // image directory
            $image_url          = 'public/uploads/images/courses/' . $picture;
            // base image directory/path
            $destinationPath    = base_path() . '/public/uploads/images/courses/';
            $success            = $files->move($destinationPath, $picture);
            if ($success){
                $image_urls     = $image_url ;
            }
        }else{
            $image_urls         = $getimage_url ;
        }
        //requested title
        $data['category_id']    = $request->category_id;
         //requested title
        $data['title']          = $request->title;
        //requested description
        $data['description']    = $request->description;
        //requested duration
        $data['duration']       = $request->duration;
        //requested price
        $data['price']          = $request->price;
        //image url
        $data['image']          = $image_urls;
        // data update
        Course::where(['id' => $id])->update($data);

        //redirect route
        return redirect()->route('admin.course');
    }
    /**
     * Destroy  of the  requested data.
     *
     */
    public function maancoursedestroy ($id)
    {
        $course = Course::find($id);// find data that will delete
        //image delete
        if(File::exists($course->image)){
            unlink($course->image);
        }

        //data delete
        $course->delete();

        //redirect route
        return redirect()->route('admin.course');
    }
}
