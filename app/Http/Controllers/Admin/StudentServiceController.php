<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentOrder;
use App\Models\StudentService;
use App\Models\StudentServicePlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentServiceController extends Controller
{
    function index()
    {
        $studentServicePlace = StudentServicePlace::with('studentService', 'studentOrder')->get();
        $studentService = StudentService::with('studentServicePlace')->get();
        $studentOrder = StudentOrder::with('studentServicePlaceForOrders')->get();
        return view('admin.students_services', compact('studentService', 'studentServicePlace', 'studentOrder'));
    }


    function add()
    {
        $studentServicePlace = StudentServicePlace::with('studentService', 'studentOrder')->get();
        $studentService = StudentService::with('studentServicePlace')->get();
        $studentOrder = StudentOrder::with('studentServicePlaceForOrders')->get();
        return view('admin.students_add_service', compact('studentService', 'studentServicePlace', 'studentOrder'));
    }

    function store(Request $request)
    {
        $studentService = new StudentService();
        $studentService->student_service_place = $request->input('student_services_place');
        $studentService->service = $request->input('service');
        $studentService->save();
        return redirect('students_services');


    }

    function edit($id)
    {
        $studentServicePlace = StudentServicePlace::with('studentService')->get();
        $studentService = StudentService::find($id);
        return view('admin.students_service_edit', compact('studentService', 'studentServicePlace'));
    }


    function update(Request $request, $id)
    {
        $studentService = StudentService::find($id);
        $studentService->student_service_place = $request->input('student_services_place');
        $studentService->service = $request->input('service');
        $studentService->price = $request->input('price');
        $studentService->update();
        return redirect('students_services');


    }

    public function destroy($id)
    {
        $studentService = StudentService::find($id);
        $studentService->delete();
        return redirect('students_services');
    }


    public function addServicePlace()
    {
        return view('admin/students_add_main_service');
    }


    public function storeServicePlace(Request $request)
    {
        $studentServicePlace = new StudentServicePlace();
        $studentServicePlace->name = $request->input('student_service_place');
        $studentServicePlace->price = $request->input('price');
        $studentServicePlace->save();

        return redirect('students_services');

    }
}
