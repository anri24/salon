<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerServicePlaceRequest;
use App\Http\Requests\CustomerServiceRequest;
use App\Models\CustomerService;
use App\Models\CustomerServicePlace;
use App\Services\CustomerService as ServiceOfCustomer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CustomerServiceController extends Controller
{
    function index(): Factory|View|Application
    {
        $customerServicePlace = CustomerServicePlace::all();
        return view('admin.customers_services', compact('customerServicePlace'));
    }

    function add(CustomerServicePlace $place): Factory|View|Application
    {
        return view('admin.customers_add_service', compact(['place']));
    }

    function store(CustomerServiceRequest $request, CustomerServicePlace $place,ServiceOfCustomer $service): RedirectResponse
    {
        return $service->storeCustomerService($request,$place);
    }

    public function edit(CustomerService $service): Factory|View|Application
    {
        return view('admin.customers_service_edit', compact('service'));
    }

    public function update(CustomerServiceRequest $request, CustomerService $service): RedirectResponse
    {
        $service->update($request->validated());
        return redirect()->route('customer.services');
    }

    public function destroy(CustomerService $service): RedirectResponse
    {
        $service->delete();
        return redirect()->route('customer.services');
    }

    public function addServicePlace(): Factory|View|Application
    {
        return view('admin.customers_add_main_service');
    }

    public function storeServicePlace(CustomerServicePlaceRequest $request): RedirectResponse
    {
        CustomerServicePlace::create($request->validated());
        return redirect()->route('customer.services');
    }
}
