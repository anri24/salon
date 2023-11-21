<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('auth.login');
    }
    public function userLogin(LoginRequest $request,LoginService $service)
    {
        return $service->login($request);
    }
    public function logout(): Redirector|Application|RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

}
