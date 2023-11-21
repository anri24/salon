<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentOrderRequest;
use App\Models\Comment;
use App\Models\StudentOrder;
use App\Models\StudentService;
use App\Models\StudentServicePlace;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    function index()
    {
        $studentServicePlace = StudentServicePlace::all();
        $studentService = StudentService::all();
        $comment = Comment::all();

        return view('main.forstudent', compact(['studentService', 'studentServicePlace', 'comment']));
    }

    function storeStudentOrder(StudentOrderRequest $request)
    {
        StudentOrder::create($request->validated());
        return redirect('success');
    }
}
