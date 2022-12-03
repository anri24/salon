<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerServicePlace;
use App\Models\CustomerService;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\Auth;
use App\Models\StudentServicePlace;
use App\Models\StudentService;
use App\Models\StudentOrder;


class EditController extends Controller
{
   public function CustomerServiceEdit($id){
    $customerServicePlace = CustomerServicePlace::with('customerService')->get();
    $customerService = CustomerService::find($id);
    if(Auth::check()){
        return view('admin.customers_service_edit', compact('customerService','customerServicePlace'));
    }
    return redirect('login');
   }
   public function CustomerServiceUpdate(Request $request,$id){
    $customerService = CustomerService::find($id);
    $customerService->customer_service_place = $request->input('customer_services_place');
    $customerService->service = $request->input('service');
    $customerService->price = $request->input('price');
    $customerService->update();
    return redirect('customers_services');
    

   }

   function adminUpdateServiceStudent($id){
    $studentServicePlace = StudentServicePlace::with('studentService')->get();
    $studentService = StudentService::find($id);
    if(Auth::check()){
        return view('admin.students_service_edit', compact('studentService','studentServicePlace'));
    }
    return redirect('login');
}
function adminUpdateStudentService(Request $request,$id){
    $studentService = StudentService::find($id);
    $studentService->student_service_place = $request->input('student_services_place');
    $studentService->service = $request->input('service');
    $studentService->price = $request->input('price');
    $studentService->update();
    return redirect('students_services');


}

}
