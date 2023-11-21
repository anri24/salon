<?php

namespace App\Services;

use App\Http\Requests\StudentServiceRequest;
use App\Models\StudentServicePlace;

class StudentService
{
    public function storeStudentService(StudentServiceRequest $request,StudentServicePlace $place)
    {
        $validate = $request->validated();
        $validate['student_service_place_id'] = $place->id;
        \App\Models\StudentService::create($validate);

        return redirect()->route('student.services');
    }
}
