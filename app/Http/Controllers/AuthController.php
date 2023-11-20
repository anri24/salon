<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function userLogin(Request $request){
        $request->validate([
            'number'=>'required',
            'password'=>'required'
        ]);
        $datas = $request->only('number','password');
        if(Auth::attempt($datas)){
            return redirect('admin');
        }

        return redirect('login')->with('fail','მომხმარებელი ან პაროლი არასწორია');
    }


    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function customers_add_main_service(){
        if(Auth::check()){
            return view('admin/customers_add_main_service');
        }

        return redirect('login');
    }
    public function students_add_main_service(){
        if(Auth::check()){
            return view('admin/students_add_main_service');
        }

        return redirect('login');
    }



}
