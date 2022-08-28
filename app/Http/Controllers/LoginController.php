<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class LoginController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','You need to login first');
        } else{
            return redirect('dashboard');
        }
    }

    public function Authentication(Request $request)
    {
        $email    = $request->email;
        $password = $request->password;

        $data = User::where('email', $email)->first();
        if($data){
            if(Hash::check($password, $data->password)){
                $user = User::find($data->id);
                $user->update();
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('login', TRUE);
                $credential = [
                    "email"=>$request->email,
                    "password"=>$request->password,
                ];
                Auth::Attempt($credential);
                return redirect('Dashboard');
            }
            else{
                return back()->with('alert', 'Login Failed');
            }
        }
    }

    public function Dashboard()
    {
        if (!Session::get('login')){
            return redirect('login')->with('alert','You need to login first!');
        } else {
            if (Auth()->user()->role == 'admin') {
                $data = User::all();
                //$information = ListBook::all();
                return view('dashboard.admin', ['data'=>$data]);
            } elseif (Auth()->user()->role == 'librarian') {
                    //$role = Auth()->user()->role;
                    //$data = ListBook::all();
                    return view('dashboard.index');
            } else {
                //$role = Auth()->user()->role;
                //$data = ListBook::where('role', '=', $role)->get();
                return view('dashboard.index');
            }
        }
    }

   

    public function login(){
        return view('login');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login')->with('alert', 'You Have Been Logged Out!');
    }
}
