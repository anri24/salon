<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentOrderRequest;
use App\Models\Comment;
use App\Models\StudentOrder;
use App\Models\StudentService;
use App\Models\StudentServicePlace;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;


class StudentController extends Controller
{
    function index(): Factory|View|Application
    {
        $studentServicePlace = StudentServicePlace::all();
        $studentService = StudentService::all();
        $comment = Comment::all();

        return view('main.forstudent', compact(['studentService', 'studentServicePlace', 'comment']));
    }

    function storeStudentOrder(StudentOrderRequest $request): Redirector|Application|RedirectResponse
    {
        StudentOrder::create($request->validated());
        return redirect('success');
    }
}
