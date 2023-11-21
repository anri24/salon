<?php

namespace App\Services;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    public function login(LoginRequest $request)
    {
        $datas = $request->only('number', 'password');
        if (Auth::attempt($datas)) {
            return redirect('admin');
        }
        return redirect('login')->with('fail', 'მომხმარებელი ან პაროლი არასწორია');
    }
}
