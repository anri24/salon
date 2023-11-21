<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerOrder;

class CustomerOrderController extends Controller
{
    function index()
    {
        $customerOrder = CustomerOrder::with('customerService')->get();
        return view('admin.index', compact('customerOrder'));
    }

    public function destroy(CustomerOrder $order)
    {
        $order->delete();
        return redirect()->route('customer.orders');
    }
}
