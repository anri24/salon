<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentServicePlace;
use App\Models\StudentService;
use App\Models\StudentOrder;
use App\Models\Comment;



class StudentController extends Controller{
    function forStudentsShow(){
        $studentServicePlace = StudentServicePlace::with('studentService','studentOrder')->get();
        $studentService = StudentService::with('studentServicePlace')->get();
        $studentOrder = StudentOrder::with('studentServicePlaceForOrders')->get();
        $comment = Comment::all();


        return view('main.forstudent', compact('studentService','studentServicePlace','studentOrder','comment'));
    }

    function studentOrederInsert(Request $request){
        $StudentOrder = new StudentOrder();
        $StudentOrder->student_service_place = $request->input('student_services_place');
        $StudentOrder->date = $request->input('student_date');
        $StudentOrder->firstname = $request->input('firstname');
        $StudentOrder->lastname = $request->input('lastname');
        $StudentOrder->number = $request->input('number');
        $StudentOrder->sms = $request->input('sms');
        $StudentOrder->save();
        return redirect('success');
       

        
    }
}