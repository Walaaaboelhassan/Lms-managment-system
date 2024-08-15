<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Maanuser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class SignController extends Controller
{
    /**
     * Display of the SignUp information .
     *
     */
    public function maansignup()
    {
        return view('frontend.pages.signup');
    }
    /**
     * Store of the requested data .
     *
     */
    public function maansignupstore(Request $request)
    {
        // validation posted data
        $validator = Validator::make($request->all(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'mobile'=>'required|unique:maanusers',
            'email'=>'required|email|unique:maanusers',
            'password'=>'required|min:6',
            'password_confirmation'=>'required|same:password',

        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $maanusers                      = new Maanuser();
            // first name
            $maanusers->first_name          = $request->first_name;
            // last name
            $maanusers->last_name           = $request->last_name;
            // user mobile
            $maanusers->mobile              = $request->mobile;
            //email
            $maanusers->email               = $request->email;
            $maanusers->password            = bcrypt($request->password);
            //store data
            $maanusers->save();
            //success message
            $this->setSuccess('Data Inserted Successfully');
            return redirect()->route('signin');

        }catch (Exception $exception){
            $this->SetError($exception->getMessage());
            return redirect()->back() ;
        }
    }
    /**
     * Display of the SignIn information .
     *
     */
    public function maansignin()
    {
        return view('frontend.pages.signin');
    }
    public function maansignin_login(Request $request)
    {

        if(Auth::guard('maanuser')->attempt(['email' => $request->email, 'password' => $request->password])){
            //return Auth::guard('maanuser')->user();
            Session::flash('message', 'Success message !');
            //return 'Success';
            return redirect()->route('maanuser.index');
        }else{
            //If is invalid email or password,will be redirect to back
            $this->setError('Invalid Email or Password !');
            return 'sorry!! error';
            //return redirect()->back();
        }


    }
    public function maansignout()
    {
        \auth()->logout() ;
        $this->setSuccess('User logout Successfully !');
        return redirect()->route('home');
    }

}
