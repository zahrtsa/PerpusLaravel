<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
            $validated = Validator::make($request->all(), [
                'name' => 'required|min: 4',
                'role' => 'required',
                'no_telp' => 'required|max:12',
                'email' => 'required|max:100',
                'password' => 'required',
            ]);

            $validated = $request->safe()->all;

            return view('user.index')->with('success','New user have been created!');
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

            return view('user.index')->with('success','User has been updsted!');
           
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
