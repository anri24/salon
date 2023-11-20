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
        $customerService = CustomerService::with('customerServicePlace', 'customerOrder')->get();
        $customerOrder = CustomerOrder::with('custmoerServiceForOrder')->get();

        return view('admin.index', compact('customerOrder', 'customerService'));
    }

    public function destroy($id)
    {
        $customerOrder = CustomerOrder::find($id);
        $customerOrder->delete();
        return redirect('admin');
    }
}
