<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerServicePlace;
use App\Models\CustomerService;
use App\Models\CustomerOrder;
use App\Models\Comment;


class CustomerController extends Controller{
    function mainIndexShow(){
        $customerServicePlace = CustomerServicePlace::with('customerService')->get();
        $customerService = CustomerService::with('customerServicePlace','customerOrder')->get();
        $customerOrder = CustomerOrder::with('custmoerServiceForOrder')->get();
        $comment = Comment::all();

        return view('main.index', compact('customerService','customerServicePlace','customerOrder','comment'));
    }

    function customerOrederInsert(Request $request){
        $customerOrder = new CustomerOrder();
        $customerOrder->services = $request->input('customer_services');
        $customerOrder->date = $request->input('customer_date');
        $customerOrder->time = $request->input('time');
        $customerOrder->firstname = $request->input('firstname');
        $customerOrder->lastname = $request->input('lastname');
        $customerOrder->number = $request->input('number');
        $customerOrder->sms = $request->input('sms');
        $customerOrder->save();
        return redirect('success');
        
    }

}