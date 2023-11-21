<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentOrder;

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
