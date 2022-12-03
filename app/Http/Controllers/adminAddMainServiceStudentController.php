<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentServicePlace;
use Illuminate\Support\Facades\Auth;


class adminAddMainServiceStudentController extends Controller
{
    public function createStudentServicePlace(Request $request){
    $studentServicePlace = new StudentServicePlace();
    $studentServicePlace->name = $request->input('student_service_place');
    $studentServicePlace->price = $request->input('price');

    $studentServicePlace->save();
    return redirect('students_services');

    }
}
