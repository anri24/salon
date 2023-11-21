<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerOrder;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CustomerOrderController extends Controller
{
    function index(): Factory|View|Application
    {
        $customerOrder = CustomerOrder::with('customerService')->get();
        return view('admin.index', compact('customerOrder'));
    }

    public function destroy(CustomerOrder $order): RedirectResponse
    {
        $order->delete();
        return redirect()->route('customer.orders');
    }
}
