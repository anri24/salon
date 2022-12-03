<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentServicePlace;
use App\Models\StudentService;
use App\Models\StudentOrder;
use Illuminate\Support\Facades\Auth;




class AdminStudentServiceController extends Controller{
    function adminStudentService(){
        $studentServicePlace = StudentServicePlace::with('studentService','studentOrder')->get();
        $studentService = StudentService::with('studentServicePlace')->get();
        $studentOrder = StudentOrder::with('studentServicePlaceForOrders')->get();
        if(Auth::check()){
            return view('admin.students_services', compact('studentService','studentServicePlace','studentOrder'));
        }
        return redirect('login');
    }
}