<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerServicePlace;
use Illuminate\Support\Facades\Auth;


class adminAddMainServiceCustomerController extends Controller
{
    public function create_customer_service_place(Request $request){
    $customerServicePlace = new CustomerServicePlace();
    $customerServicePlace->name = $request->input('customers_service_place');
    $customerServicePlace->save();
    return redirect('customers_services');

    }
}
