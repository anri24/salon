<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentServicePlaceRequest;
use App\Http\Requests\StudentServiceRequest;
use App\Models\StudentOrder;
use App\Models\StudentService;
use App\Models\StudentServicePlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentServiceController extends Controller
{
    function index()
    {
        $studentServicePlace = StudentServicePlace::all();
        return view('admin.students_services', compact('studentServicePlace'));
    }

    function add(StudentServicePlace $place)
    {
        return view('admin.students_add_service', compact('place'));
    }

    function store(StudentServiceRequest $request,StudentServicePlace $place)
    {
        $validate = $request->validated();
        $validate['student_service_place_id'] = $place->id;
        StudentService::create($validate);

        return redirect()->route('student.services');
    }

    function edit(StudentService $service)
    {
        return view('admin.students_service_edit', compact('service'));
    }


    function update(StudentServiceRequest $request, StudentService $service)
    {
        $service->update($request->validated());
        return redirect()->route('student.services');
    }

    public function destroy(StudentService $service)
    {
        $service->delete();
        return redirect()->route('student.services');
    }


    public function addServicePlace()
    {
        return view('admin.students_add_main_service');
    }


    public function storeServicePlace(StudentServicePlaceRequest $request)
    {

        StudentServicePlace::create($request->validated());
        return redirect()->route('student.services');
    }
}
