<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerServicePlace;
use App\Models\CustomerService;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\Auth;


class AdminCustomerServiceController extends Controller{
    function adminCustomerServices(){
        $customerServicePlace = CustomerServicePlace::with('customerService')->get();
        $customerService = CustomerService::with('customerServicePlace','customerOrder')->get();
        $customerOrder = CustomerOrder::with('custmoerServiceForOrder')->get();
        if(Auth::check()){
            return view('admin.customers_services', compact('customerService','customerServicePlace','customerOrder'));
        }
        return redirect('login');
    }
}