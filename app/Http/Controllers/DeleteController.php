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
use App\Models\Photo;

class DeleteController extends Controller
{
    public function removeCustomerService($id){
        $customerService = CustomerService::find($id);
        $customerService->delete();
        return redirect('customers_services');
    }
    public function removeStudentService($id){
        $studentService = StudentService::find($id);
        $studentService->delete();
        return redirect('students_services');
    }
    public function removeCustomerOrder($id){
        $customerOrder = CustomerOrder::find($id);
        $customerOrder->delete();
        return redirect('admin');
    }
    public function removeStudentOrder($id){
        $studentService = StudentOrder::find($id);
        $studentService->delete();
        return redirect('students_orders');
    }
    public function removePhoto($id){
        $photo = Photo::find($id);
        $photo->delete();
        return redirect('photo');
    }
    
}
