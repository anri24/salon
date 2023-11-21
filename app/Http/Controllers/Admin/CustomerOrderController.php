<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerOrder;
use App\Models\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
