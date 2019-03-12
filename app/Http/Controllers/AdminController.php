<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function createUser(Request $request)
    {
        if($request->ajax()){
            $validator = \Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
            ]);
            
            if ($validator->fails())
            {
                return response()->json(['errors'=>$validator->errors()->all()]);
            }

            $user_role = Role::find($request->role_id);
            $user = new User;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->company_name = $request->company_name;
            $user->active = 1;
            $user->save();
            $user->role()->attach($user_role,['created_at'=>now(),'updated_at'=>now()]);
            if($user){
                 return response()->json(['success'=> true,'user'=>$user,'role'=>$user_role]);
            }
            
            return response()->json(['success'=> false]);
        }
    }

    public function deleteUser(Request $request)
    {
        if($request->ajax()){

            $id = $request->id;

            $user = User::find($id);
            $user->role()->detach();
            $user->delete();

            if($user){
                 return response()->json(['success'=> true]);
            }
            
            return response()->json(['success'=> false]);
        }
    }

    public function viewProfile($id,Request $request)
    {
        $user = User::find($id);
        return view('admin.pages.profileView',compact('user'));
    }
}
