<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the User .
     * Create a User .
     *
     */
    public function maanuserindex(Request $request)
    {
        if ($request->ajax()){
            $roles = Role::where('id',$request->role_id)->first() ;
            $permissions = $roles->permissions;
            return $permissions;
        }
        $users = User::orderBy('id','asc')->paginate(10);
        $roles = Role::all();
        return view('admin.pages.users.index',compact('users', 'roles'));
    }
    /**
     * Store a listing of the requested data.
     *
     */
    public function maanuserstore(Request $request)
    {
        // validation posted data
        $validator = Validator::make($request->all(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'user_name'=>'required',
            'user_type'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed|min:6',

        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {

            $users                      = new User();
            // first name
            $users->first_name                = $request->first_name;
            // last name
            $users->last_name                = $request->last_name;
            // user name
            $users->user_name                = $request->user_name;
            // user type
            $users->user_type                = $request->user_type;
            //email
            $users->email               = $request->email;
            $users->password            = bcrypt($request->password);
            //store dada
            $users->save();

            if ($request->role != null){
                $users->roles()->attach($request->role);
                $users->save();
            }

            if ($request->permissions != null){
               foreach ($request->permissions as $permission){
                   $users->permissions()->attach($permission);
                   $users->save();
               }
            }

            //success message
            $this->setSuccess('Data Inserted Successfully');
            return redirect()->route('admin.user');

        }catch (Exception $exception){
            $this->setError($exception->getMessage());
            return redirect()->back() ;

        }

    }
    /**
     * Display a listing of the user edit data.
     *
     */
    public function maanuseredit(User $user)
    {
        //get all user data

        $roles =Role::get();
        $userRole = $user->roles->first();
        if ($userRole!=null){
            $rolePermissions = $userRole->permissions;
        }else{
            $rolePermissions = null;
        }
        $userPermissions = $user->permissions;


        return view('admin.pages.users.edit',compact('user','roles','userRole','rolePermissions','userPermissions')) ;
    }
    /**
     * Updated a listing of the  requested data.
     *
     */
    public function maanuserupdate(Request $request, User $user)
    {

        // validation posted data
        $validator = Validator::make($request->all(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'user_name'=>'required',
            'user_type'=>'required',
            'email'=>'required|email',

        ]);
        if ($request->password !=null){
            $validator = Validator::make($request->all(),[
                'password'=>'required|confirmed|min:6',

            ]);
        }
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // first name
        $user->first_name               = $request->first_name;
        // last name
        $user->last_name                = $request->last_name;
        // user name
        $user->user_name                = $request->user_name;
        // user type
        $user->user_type                = $request->user_type;
        //email
        $user->email                    = $request->email;
        if ($request->password !=null){
            $user->password            = bcrypt($request->password);
        }
        //store dada
        $user->save();

        $user->roles()->detach();
        $user->permissions()->detach();

        if ($request->role != null){
            $user->roles()->attach($request->role);
            $user->save();
        }

        if ($request->permissions != null){
            foreach ($request->permissions as $permission){
                $user->permissions()->attach($permission);
                $user->save();
            }
        }

        //redirect route
        return redirect()->route('admin.user');
    }
    /**
     * Destroy  of the  requested data.
     *
     */
    public function maanuserdestroy (User $user)
    {

        //data delete
        $user->roles()->detach();
        $user->permissions()->detach();
        $user->delete();
        //message
        $this->setSuccess('Data deleted Successfully');
        //redirect route
        return redirect()->route('admin.user');
    }
    /**
     * Ajax request.
     *
     */
    public function maanuserajax(Request $request)
    {
        if ($request->ajax()){
            $roles = Role::where('id',$request->role_id)->first() ;
            $permissions = $roles->permissions;
            return $permissions;
        }

    }

}
