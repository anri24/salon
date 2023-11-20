<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\CustomerServicePlace;
use App\Models\CustomerService;
use App\Models\CustomerOrder;
use App\Models\Comment;


class CustomerController extends Controller
{
    public function index()
    {
        $customerServicePlace = CustomerServicePlace::with('customerService')->get();
        $customerService = CustomerService::with('customerServicePlace', 'customerOrder')->get();
        $customerOrder = CustomerOrder::with('custmoerServiceForOrder')->get();
        $comment = Comment::all();

        return view('main.index', compact('customerService', 'customerServicePlace', 'customerOrder', 'comment'));
    }

    public function about()
    {
        return view('main.about');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function portfolio()
    {
        $photo = Gallery::all();
        return view('main.portfolio', compact('photo'));
    }
    
    public function comment()
    {
        return view('main.comment');
    }

    public function storeCustomerOrder(Request $request)
    {
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


    function storeComment(Request $request)
    {
        $comment = new Comment();
        $comment->fullname = $request->input('fullname');
        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect('');
    }
}
