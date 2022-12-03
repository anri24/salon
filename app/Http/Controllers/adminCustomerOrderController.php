<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerService;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\Auth;


class AdminCustomerOrderController extends Controller{
    function adminCustomerOrders(){
        
        $customerService = CustomerService::with('customerServicePlace','customerOrder')->get();
        $customerOrder = CustomerOrder::with('custmoerServiceForOrder')->get();

        if(Auth::check()){
            return view('admin.index', compact('customerOrder','customerService'));
        }
        return redirect('login');
    }
    
}