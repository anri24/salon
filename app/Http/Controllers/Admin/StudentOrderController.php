<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentOrder;
use App\Models\StudentServicePlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentOrderController extends Controller
{
    function index(){
        $studentServicePlace = StudentServicePlace::with('studentService','studentOrder')->get();
        $studentOrder = StudentOrder::with('studentServicePlaceForOrders')->get();

        return view('admin.students_orders', compact('studentOrder','studentServicePlace'));
    }

    public function destroy($id){
        $studentService = StudentOrder::find($id);
        $studentService->delete();
        return redirect('students_orders');
    }
}
