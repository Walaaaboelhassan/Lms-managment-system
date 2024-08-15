<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the Gallery.
     *
     */
    public function maangallery()
    {
        $galleries = Gallery::paginate(10);
        return view('admin.pages.galleries.index',compact('galleries')) ;
    }
    /**
     * Store requested data.
     *
     */
    public function maangallerystore(Request $request)
    {
        /*
        * Validation
        *
        * If the data entered in a form field follows all of the rules specified by the above attributes,
        * it is considered valid. If not, it is considered invalid.
        *
        * */
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'image' => 'required'
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $images     =    $request->image;
        foreach ($images as $image){
            if ($image !=''){
                $picture            = 'maangallery'.date('dmY_His').'_'.$image->getClientOriginalName();
                // image path
                $image_url          = 'public/uploads/images/gallery/' . $picture;
                //image base path
                $destinationPath    = base_path() . '/public/uploads/images/gallery/';
                $success            = $image->move($destinationPath, $picture);
                if ($success){
                    $image_urls     = $image_url ;
                }
            }else{
                $image_urls         = '' ;
            }

            $galleries              = new Gallery();
            $galleries->title       = $request->title;
            $galleries->image       = $image_urls;
            $galleries->save();
        }

        return redirect()->route('admin.gallery');
    }
    /**
     * Display a listing of the Gallery edit data.
     *
     */
    public function maangalleryedit(Gallery $gallery)
    {
        return view('admin.pages.galleries.edit',compact('gallery'));
    }
    /**
     * Update a listing of the requested data.
     *
     */
    public function maangalleryupdate(Request $request, Gallery $gallery )
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'image' => 'required'
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        //posted file information
        $files = $request->file('image') ;
        //image check
        if ($request->hasFile('image')){
            if(File::exists($gallery->image)){
                unlink($gallery->image);
            }

            $picture            = 'maangallery'.date('dmY_His').'_'.$request->image->getClientOriginalName();
            // image path
            $image_url          = 'public/uploads/images/gallery/' . $picture;
            //image base path
            $destinationPath    = base_path() . '/public/uploads/images/gallery/';
            $success            = $request->image->move($destinationPath, $picture);
            if ($success){
                $image_urls     = $image_url ;
            }
        }else{
            $image_urls         = $gallery->image ;
        }
        //requested title
        $data['title']              = $request->title;
        //image url
        $data['image']             = $image_urls;
        // data update
        Gallery::where('id',$gallery->id)->update($data);

        //redirect route
        return redirect()->route('admin.gallery');

    }
    /**
     * Destroy a listing of the requested data.
     *
     */
    public function maangallerydestroy(Gallery $gallery)
    {

        //image delete
        if(File::exists($gallery->image)){
            unlink($gallery->image);
        }

        $gallery->delete();
        return redirect()->route('admin.gallery');

    }
}
