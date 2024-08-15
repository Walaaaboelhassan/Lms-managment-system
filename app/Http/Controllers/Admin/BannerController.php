<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class BannerController extends Controller
{
    /**
     * Display a listing of the Banner.
     *
     */
    public function maanbanner()
    {
        $banners = Banner::paginate(10);
        return view('admin.pages.banners.index',compact('banners'));
    }
    /**
     * Store requested data.
     *
     */
    public function maanbannerstore(Request $request)
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
                $filename               = $files->getClientOriginalName();
                //make unique image name
                $picture                = 'maanbanner'.date('dmY_His').'_'.$filename;
                // image path
                $image_url              = 'public/uploads/images/banners/' . $picture;
                //image base path
                $destinationPath        = base_path() .'/public/uploads/images/banners/';
                //dd($destinationPath );
                $success                = $files->move($destinationPath, $picture);
                if ($success){
                    $image_urls         = $image_url ;
                }
            }else{
                $image_urls             = '' ;
            }
            //object
            $banners                       = new Banner();
            // requested title
            $banners->title                = $request->title;
            //requested description
            $banners->short_description    = $request->short_description;
            //image path
            $banners->image                = $image_urls;
            $banners->save();


            return redirect()->route('admin.banner');

        }catch (Exception $exception){
            $this->setError($exception->getMessage());
            return redirect()->back() ;

        }

    }
    /**
     * Display a listing of the Banner edit data.
     *
     */
    public function maanbanneredit($id)
    {
        //fiend requested data
        $banner = Banner::find($id);
        // view file..
        return view('admin.pages.banners.edit',compact('banner')) ;
    }
    /**
     * Update a listing of the requested data.
     *
     */
    public function maanbannerupdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'short_description'=>'required|max:255',

        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        //find requested id image that will be update
        $getimage_url = Banner::where('id',$id)->value('image');

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
            $picture            = 'maanbanner'.date('dmY_His').'_'.$filename;
            // image directory
            $image_url          = 'public/uploads/images/banners/' . $picture;
            // base image directory/path
            $destinationPath    = base_path() .'/public/uploads/images/banners/';
            $success            = $files->move($destinationPath, $picture);
            if ($success){
                $image_urls     = $image_url ;
            }
        }else{
            $image_urls         = $getimage_url ;

        }
        //requested title
        $data['title']              = $request->title;
        //requested description
        $data['short_description'] = $request->short_description;
        //image url
        $data['image']             = $image_urls;
        // data update
        Banner::where(['id' => $id])->update($data);

        //redirect route
        return redirect()->route('admin.banner');
    }
    /**
     * Destroy a listing of the requested data.
     *
     */
    public function maanbannerdestroy ($id)
    {
        $banner = Banner::find($id);// find data that will delete
        //image delete
        if(File::exists($banner->image)){
            unlink($banner->image);
        }

        //data delete
        $banner->delete();

        //redirect route
        return redirect()->route('admin.banner');
    }
}
