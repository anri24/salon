<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerServicePlace;
use App\Models\CustomerService;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\Auth;


class AdminAddServiceCustomerController extends Controller{
    function adminAddServiceCustomerServices(){
        $customerServicePlace = CustomerServicePlace::with('customerService')->get();
        $customerService = CustomerService::with('customerServicePlace','customerOrder')->get();
        $customerOrder = CustomerOrder::with('custmoerServiceForOrder')->get();
        if(Auth::check()){
            return view('admin.customers_add_service', compact('customerService','customerServicePlace','customerOrder'));
        }
        return redirect('login');
    }

    function adminCreateCustomerService(Request $request){
        $customerService = new CustomerService();
        $customerService->customer_service_place = $request->input('customer_services_place');
        $customerService->service = $request->input('service');
        $customerService->price = $request->input('price');
        $customerService->save();
        return redirect('customers_services');


    }

}