<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\CustomerOrderRequest;
use App\Models\Comment;
use App\Models\CustomerOrder;
use App\Models\CustomerService;
use App\Models\CustomerServicePlace;
use App\Models\Gallery;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function index()
    {
        $customerServicePlace = CustomerServicePlace::all();
        $customerServices = CustomerService::all();
        $comment = Comment::all();
        return view('main.index', compact(['customerServicePlace', 'comment','customerServices']));
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

    public function storeCustomerOrder(CustomerOrderRequest $request)
    {
        CustomerOrder::create($request->validated());
        return redirect('success');
    }


    function storeComment(CommentRequest $request)
    {
        Comment::create($request->validated());
        return redirect()->route('main.index');
    }
}
