<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentServicePlaceRequest;
use App\Http\Requests\StudentServiceRequest;
use App\Models\StudentService;
use App\Models\StudentServicePlace;
use App\Services\StudentService as ServiceOfStudent;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class StudentServiceController extends Controller
{
    function index(): Factory|View|Application
    {
        $studentServicePlace = StudentServicePlace::all();
        return view('admin.students_services', compact('studentServicePlace'));
    }

    function add(StudentServicePlace $place): Factory|View|Application
    {
        return view('admin.students_add_service', compact('place'));
    }

    function store(StudentServiceRequest $request,StudentServicePlace $place,ServiceOfStudent $service): RedirectResponse
    {
        return $service->storeStudentService($request,$place);
    }

    function edit(StudentService $service): Factory|View|Application
    {
        return view('admin.students_service_edit', compact('service'));
    }

    function update(StudentServiceRequest $request, StudentService $service): RedirectResponse
    {
        $service->update($request->validated());
        return redirect()->route('student.services');
    }

    public function destroy(StudentService $service): RedirectResponse
    {
        $service->delete();
        return redirect()->route('student.services');
    }

    public function addServicePlace(): Factory|View|Application
    {
        return view('admin.students_add_main_service');
    }

    public function storeServicePlace(StudentServicePlaceRequest $request)
    {
        StudentServicePlace::create($request->validated());
        return redirect()->route('student.services');
    }
}
