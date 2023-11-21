<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentOrder;
use App\Models\StudentServicePlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentOrderController extends Controller
{
    function index()
    {
        $studentOrder = StudentOrder::all();
        return view('admin.students_orders', compact('studentOrder'));
    }

    public function destroy(StudentOrder $order)
    {
        $order->delete();
        return redirect()->route('student.orders');
    }
}
