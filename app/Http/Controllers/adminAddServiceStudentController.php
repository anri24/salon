<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentServicePlace;
use App\Models\StudentService;
use App\Models\StudentOrder;
use Illuminate\Support\Facades\Auth;



class AdminAddServiceStudentController extends Controller{
    function adminAddServiceStudentService(){
        $studentServicePlace = StudentServicePlace::with('studentService','studentOrder')->get();
        $studentService = StudentService::with('studentServicePlace')->get();
        $studentOrder = StudentOrder::with('studentServicePlaceForOrders')->get();
        if(Auth::check()){
            return view('admin.students_add_service', compact('studentService','studentServicePlace','studentOrder'));
        }
        return redirect('login');
    }

    function adminCreateStudentService(Request $request){
        $studentService = new StudentService();
        $studentService->student_service_place = $request->input('student_services_place');
        $studentService->service = $request->input('service');
        $studentService->save();
        return redirect('students_services');


    }
}