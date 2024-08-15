<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siteimage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class SiteimageController extends Controller
{
    /**
     * Display a listing of the Site Images .
     *
     */
    public function maansiteimage()
    {
        $siteimages = Siteimage::paginate(10);
        return view('admin.pages.siteimages.index',compact('siteimages'));
    }
    /**
     * Store a listing of the requested data.
     *
     */
    public function maansiteimagestore(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'content_image'=>'required|mimes:jpeg,jpg,png,svg'
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {

            //content image
            $content_files = $request->file('content_image') ;
            if ($content_files!='') {
                $content_filename           = $content_files->getClientOriginalName();
                $content_picture            = 'maansiteimage'.date('dmY_His').'_'.$content_filename;
                $content_image_url          = 'public/uploads/images/siteimages/' . $content_picture;
                $content_destinationPath    = base_path() . '/public/uploads/images/siteimages/';
                $content_success            = $content_files->move($content_destinationPath, $content_picture);
                if ($content_success){
                    $content_image_urls = $content_image_url ;
                }
            }else{
                $content_image_urls  = '' ;
            }
            $siteimages                         = new Siteimage();
            $siteimages->content_image          = $content_image_urls;
            $siteimages->save();

            return redirect()->route('admin.siteimage');

        }catch (Exception $exception){
            $this->setError($exception->getMessage());
            return redirect()->back() ;

        }


    }
    /**
     * Display a listing of the Site Images edit data.
     *
     */
    public function maansiteimageedit($id)
    {
        $siteimage = Siteimage::find($id);
        return view('admin.pages.siteimages.edit',compact('siteimage')) ;
    }
    /**
     * Updated a listing of the  requested data.
     *
     */
    public function maansiteimageupdate(Request $request, $id)
    {
        //find requested id image that will be update
        $getimage_url = Siteimage::find($id);
        //posted file information
        //image check


        $content_files = $request->file('content_image') ;
        if ($request->hasFile('content_image')) {
            //image delete
            if(File::exists($getimage_url->content_image)){
                unlink($getimage_url->content_image);
            }
            //get file name
            $content_filename           = $content_files->getClientOriginalName();
            $content_picture            = 'maansiteimage'.date('dmY_His').'_'.$content_filename;
            $content_image_url          = 'public/uploads/images/siteimages/' . $content_picture;
            $content_destinationPath    = base_path() . '/public/uploads/images/siteimages/';
            $content_success            = $content_files->move($content_destinationPath, $content_picture);
            if ($content_success){
                $content_image_urls     = $content_image_url ;
            }
        }else{
            $content_image_urls  = $getimage_url->content_image ;
        }

        //requested content image
        $data['content_image']  = $content_image_urls;
        // data update
        Siteimage::where(['id' => $id])->update($data);

        //redirect route
        return redirect()->route('admin.siteimage');
    }
    /**
     * Destroy  of the  requested data.
     *
     */
    public function maansiteimagedestroy ($id)
    {
        $siteimage = Siteimage::find($id);// find data that will delete
        //image delete
        if(File::exists($siteimage->content_image)){
            unlink($siteimage->content_image);
        }

        //data delete
        $siteimage->delete();

        //redirect route
        return redirect()->route('admin.siteimage');
    }
}
