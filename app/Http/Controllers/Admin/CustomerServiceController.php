<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerServicePlaceRequest;
use App\Http\Requests\CustomerServiceRequest;
use App\Models\CustomerService;
use App\Models\CustomerServicePlace;
use App\Services\CustomerService as ServiceOfCustomer;

class CustomerServiceController extends Controller
{
    function index()
    {
        $customerServicePlace = CustomerServicePlace::all();
        return view('admin.customers_services', compact('customerServicePlace'));
    }

    function add(CustomerServicePlace $place)
    {
        return view('admin.customers_add_service', compact(['place']));
    }

    function store(CustomerServiceRequest $request, CustomerServicePlace $place,ServiceOfCustomer $service)
    {
        return $service->storeCustomerService($request,$place);
    }

    public function edit(CustomerService $service)
    {
        return view('admin.customers_service_edit', compact('service'));
    }

    public function update(CustomerServiceRequest $request, CustomerService $service)
    {
        $service->update($request->validated());
        return redirect()->route('customer.services');
    }

    public function destroy(CustomerService $service)
    {
        $service->delete();
        return redirect()->route('customer.services');
    }

    public function addServicePlace()
    {
        return view('admin.customers_add_main_service');
    }

    public function storeServicePlace(CustomerServicePlaceRequest $request)
    {
        CustomerServicePlace::create($request->validated());
        return redirect()->route('customer.services');
    }
}
