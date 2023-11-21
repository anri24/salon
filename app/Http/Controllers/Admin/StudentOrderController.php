<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentOrder;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class StudentOrderController extends Controller
{
    function index(): Factory|View|Application
    {
        $studentOrder = StudentOrder::all();
        return view('admin.students_orders', compact('studentOrder'));
    }

    public function destroy(StudentOrder $order): RedirectResponse
    {
        $order->delete();
        return redirect()->route('student.orders');
    }
}
