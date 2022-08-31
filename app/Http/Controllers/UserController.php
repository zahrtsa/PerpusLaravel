<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function indexuser(){
        if(Auth()->user()->role == 'admin'){
            $data = User::all();
            return view('user.index', ['data'=>$data]);

        }
    }
    
    public function adduser(){
        if(Auth()->user()->role == 'admin'){
            return view('user.add');
        }
    }

    public function prosescreate(Request $request)
    {
        if(Auth()->user()->role == 'admin'){
            $this->validate($request, [
                'name' => 'required|min: 4',
                'role' => 'required',
                'no_telp' => 'required|max:12',
                'email' => 'required|max:100',
                'password' => 'required',
            ]);
            $data = new UserModel();
            $data->name = $request->name;
            $data->role = $request->role;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->save();
            return redirect(route('indexuser'))->with('success','New user have been created!');
        } else{
            return back()->with('alert', 'Add New User Failed');
        }
    }

    public function edituser(Request $request,User $user){
        if(Auth()->user()->role == 'admin'){
            $id = $request->id;
            $data = User::find($id);
            return view("user.edit", ['data'=>$data]);
        }
    }

    public function prosesupdate(Request $request, User $user)
    {
        if(Auth()->user()->role == 'admin'){
            $id = $request->id;
            $data = User::find($id);
            $validated = Validator::make($request->all(), [
                'name' => 'required|min: 4',
                'role' => 'required',
                'no_telp' => 'required|max:12',
                'email' => 'required|max:100',
                'password' => 'required',
            ]);

            $validated = $request->update()->all;

            return view('user.index')->with('success','User has been updated!');
           
        }
    }

    public function deleteuser(Request $request)
    {
        if(Auth()->user()->role == 'admin'){
           $data = User::find($request->id);
           $data->delete();
           return view('user.index')->with('success','User has been delete, congrast');
        }
    }
}
