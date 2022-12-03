<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\StudentServicePlace;
use App\Models\StudentOrder;
use Illuminate\Support\Facades\Auth;



class AdminStudentOrderController extends Controller{
    function adminStudentOrders(){
        $studentServicePlace = StudentServicePlace::with('studentService','studentOrder')->get();
        $studentOrder = StudentOrder::with('studentServicePlaceForOrders')->get();
        if(Auth::check()){
            return view('admin.students_orders', compact('studentOrder','studentServicePlace'));
        }
        return redirect('login');
    }
}