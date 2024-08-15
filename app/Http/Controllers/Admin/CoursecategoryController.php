<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coursecategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class CoursecategoryController extends Controller
{
    /**
     * Display a listing of the Course Category.
     *
     */
    public function maancoursecategory()
    {
        // get all course category..
        $coursecategories = Coursecategory::paginate(10);
        return view('admin.pages.coursecategory.index',compact('coursecategories'));
    }
    /**
     * Store a listing of the requested data.
     *
     */
    public function maancoursecategorystore(Request $request)
    {
     // validation input field
    $validator = Validator::make($request->all(),[
        'name'=>'required',

    ]);
    if ($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }
    try {
        //input file information
        $files = $request->file('image') ;
        $category                       = new Coursecategory();
        //category name
        $category->name                 = $request->name;
        $category->save();

        return redirect()->route('admin.course.category');

    }catch (Exception $exception){
        $this->setError($exception->getMessage());
        return redirect()->back() ;

    }

}
    /**
     * Display a listing of the Course Category edit data.
     *
     */
    public function maancoursecategoryedit($id)
    {
        // get all course category..
        $category = Coursecategory::find($id);
        return view('admin.pages.coursecategory.edit',compact('category')) ;
    }
    /**
     * Updated a listing of the  requested data.
     *
     */
    public function maancoursecategoryupdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',

        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        //requested name
        $data['name'] = $request->name;
        // data update
        Coursecategory::where(['id' => $id])->update($data);

        //redirect route
        return redirect()->route('admin.course.category');
    }
    /**
     * Destroy  of the  requested data.
     *
     */
    public function maancoursecategorydestroy ($id)
    {
        $coursecategory = Coursecategory::find($id);// find data that will delete

        //data delete
        $coursecategory->delete();

        //redirect route
        return redirect()->route('admin.course.category');
    }
}
