<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerOrder;
use App\Models\CustomerService;
use App\Models\CustomerServicePlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerServiceController extends Controller
{
    function index()
    {
        $customerServicePlace = CustomerServicePlace::with('customerService')->get();
        $customerService = CustomerService::with('customerServicePlace', 'customerOrder')->get();
        $customerOrder = CustomerOrder::with('custmoerServiceForOrder')->get();
        return view('admin.customers_services', compact('customerService', 'customerServicePlace', 'customerOrder'));
    }

    function add()
    {
        $customerServicePlace = CustomerServicePlace::with('customerService')->get();
        $customerService = CustomerService::with('customerServicePlace', 'customerOrder')->get();
        $customerOrder = CustomerOrder::with('custmoerServiceForOrder')->get();

        return view('admin.customers_add_service', compact('customerService', 'customerServicePlace', 'customerOrder'));
    }

    function store(Request $request)
    {
        $customerService = new CustomerService();
        $customerService->customer_service_place = $request->input('customer_services_place');
        $customerService->service = $request->input('service');
        $customerService->price = $request->input('price');
        $customerService->save();

        return redirect('customers_services');
    }

    public function edit($id)
    {
        $customerServicePlace = CustomerServicePlace::with('customerService')->get();
        $customerService = CustomerService::find($id);

        return view('admin.customers_service_edit', compact('customerService', 'customerServicePlace'));
    }

    public function update(Request $request, $id)
    {
        $customerService = CustomerService::find($id);
        $customerService->customer_service_place = $request->input('customer_services_place');
        $customerService->service = $request->input('service');
        $customerService->price = $request->input('price');
        $customerService->update();

        return redirect('customers_services');
    }

    public function destroy($id)
    {
        $customerService = CustomerService::find($id);
        $customerService->delete();
        return redirect('customers_services');
    }


    public function addServicePlace()
    {
        return view('admin/customers_add_main_service');
    }

    public function storeServicePlace(Request $request)
    {
        $customerServicePlace = new CustomerServicePlace();
        $customerServicePlace->name = $request->input('customers_service_place');
        $customerServicePlace->save();
        return redirect('customers_services');

    }

}
