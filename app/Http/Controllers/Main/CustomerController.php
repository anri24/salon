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
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;


class CustomerController extends Controller
{
    public function index(): Factory|View|Application
    {
        $customerServicePlace = CustomerServicePlace::all();
        $customerServices = CustomerService::all();
        $comment = Comment::all();
        return view('main.index', compact(['customerServicePlace', 'comment','customerServices']));
    }

    public function about(): Factory|View|Application
    {
        return view('main.about');
    }

    public function contact(): Factory|View|Application
    {
        return view('main.contact');
    }

    public function portfolio(): Factory|View|Application
    {
        $photo = Gallery::all();
        return view('main.portfolio', compact('photo'));
    }

    public function comment(): Factory|View|Application
    {
        return view('main.comment');
    }

    public function storeCustomerOrder(CustomerOrderRequest $request): Redirector|Application|RedirectResponse
    {
        CustomerOrder::create($request->validated());
        return redirect('success');
    }


    function storeComment(CommentRequest $request): RedirectResponse
    {
        Comment::create($request->validated());
        return redirect()->route('main.index');
    }
}
