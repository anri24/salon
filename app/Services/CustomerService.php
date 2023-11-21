<?php

namespace App\Services;

use App\Http\Requests\CustomerServiceRequest;
use App\Models\CustomerServicePlace;

class CustomerService
{
    public function storeCustomerService(CustomerServiceRequest $request, CustomerServicePlace $place)
    {
        $validate = $request->validated();
        $validate['customer_service_place_id'] = $place->id;
        \App\Models\CustomerService::create($validate);

        return redirect()->route('customer.services');
    }
}
