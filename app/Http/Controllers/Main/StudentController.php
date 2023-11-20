<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\StudentOrder;
use App\Models\StudentService;
use App\Models\StudentServicePlace;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    function index()
    {
        $studentServicePlace = StudentServicePlace::with('studentService', 'studentOrder')->get();
        $studentService = StudentService::with('studentServicePlace')->get();
        $studentOrder = StudentOrder::with('studentServicePlaceForOrders')->get();
        $comment = Comment::all();

        return view('main.forstudent', compact('studentService', 'studentServicePlace', 'studentOrder', 'comment'));
    }

    function storeStudentOrder(Request $request)
    {
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
