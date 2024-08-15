<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class BlogController extends Controller
{
    public function maanblog()
    {
        $blogs = Blog::paginate(10);
        return view('admin.pages.blogs.index',compact('blogs'));
    }
    /**
     * Store requested data.
     *
     */
    public function maanblogstore(Request $request)
    {
        /*
         * Validation
         *
         * If the data entered in a form field follows all of the rules specified by the above attributes,
         * it is considered valid. If not, it is considered invalid.
         *          *
         * */
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'short_description'=>'required|max:255',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png'
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {

            // requested file
            $files = $request->file('image') ;

            if ($files!='') {
                //image file name
                $filename           = $files->getClientOriginalName();
                //make unique image name
                $picture            = 'naanblog'.date('dmY_His').'_'.$filename;
                // image path
                $image_url          = 'public/uploads/images/blogs/' . $picture;
                //image base path
                $destinationPath    = base_path() . '/public/uploads/images/blogs/';
                $success            = $files->move($destinationPath, $picture);
                if ($success){
                    $image_urls     = $image_url ;
                }
            }else{
                $image_urls         = '' ;
            }
            //object
            $blogs                       = new Blog();
            // requested title
            $blogs->title                = $request->title;
            //requested description
            $blogs->short_description    = $request->short_description;
            //requested description
            $blogs->description          = $request->description;
            $blogs->user_id              = Auth::user()->id;
            //image path
            $blogs->image                = $image_urls;
            $blogs->save();


            return redirect()->route('admin.blog');

        }catch (Exception $exception){
            $this->setError($exception->getMessage());
            return redirect()->back() ;

        }

    }
    /**
     * Display a listing of the Blog edit data.
     *
     */
    public function maanblogedit($id)
    {
        //fiend requested data
        $blog = Blog::find($id);
        // view file..
        return view('admin.pages.blogs.edit',compact('blog')) ;
    }
    /**
     * Update a listing of the requested data.
     *
     */
    public function maanblogupdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'short_description'=>'required|max:255',
            'description'=>'required',

        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        //find requested id image that will be update
        $getimage_url = Blog::where('id',$id)->value('image');

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
            $picture            = 'naanblog'.date('dmY_His').'_'.$filename;
            // image directory
            $image_url          = 'public/uploads/images/blogs/' . $picture;
            // base image directory/path
            $destinationPath    = base_path() . '/public/uploads/images/blogs/';
            $success            = $files->move($destinationPath, $picture);
            if ($success){
                $image_urls     = $image_url ;
            }
        }else{
            $image_urls         = $getimage_url ;

        }
        //requested title
        $data['title']                  = $request->title;
        //requested short description
        $data['short_description']      = $request->short_description;
        //requested description
        $data['description']            = $request->description;
        //user id
        $data['user_id']                = Auth::user()->id;
        //image url
        $data['image']                  = $image_urls;
        // data update
        Blog::where(['id' => $id])->update($data);

        //redirect route
        return redirect()->route('admin.blog');
    }
    /**
     * Destroy a listing of the requested data.
     *
     */
    public function maanblogdestroy ($id)
    {
        $blog = Blog::find($id);// find data that will delete
        //image delete
        if(File::exists($blog->image)){
            unlink($blog->image);
        }

        //data delete
        $blog->delete();

        //redirect route
        return redirect()->route('admin.blog');
    }
}
