<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Siteimage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class ContactController extends Controller
{
    /**
     * Display a listing of the Contact information .
     *
     */
    public function maancontactus()
    {
        //get contact thamb image
        $contactthamb = Siteimage::latest()->value('content_image');

        return view('frontend.pages.contactus',compact('contactthamb'));
    }
    public function maancontactstore(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:contacts',
            'message'=>'required',


        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $contacts                      = new Contact();
            // first name
            $contacts->first_name          = $request->first_name;
            // last name
            $contacts->last_name           = $request->last_name;
            //email
            $contacts->email               = $request->email;
            //message
            $contacts->message            = $request->message;
            //store data
            $contacts->save();
            //success message
            $this->setSuccess('Data Inserted Successfully');
            return redirect()->route('contactus');

        }catch (Exception $exception){
            $this->SetError($exception->getMessage());
            return redirect()->back() ;
        }
    }
}
