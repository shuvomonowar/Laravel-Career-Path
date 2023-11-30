<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class LoginController extends Controller
{
    function showLogInPage(): View
    {
        return view('login');
    }

    function getUserData(LoginRequest $lg_request) : RedirectResponse
    {
        $user_data = $lg_request->validated();
        $db_data = DB::table('users')
            ->select('email', 'password')
            ->where('email', $user_data['email'])
            ->first();

        if ($db_data != null) {
            if ($db_data->email == $user_data['email']) {
                if (Hash::check($user_data['password'], $db_data->password)) {
                    session(['username'=>$db_data->email]);

                    return redirect()->route('profile');
                }
                else {
                    return redirect()->route('login');
                }
            }
        }
        return redirect()->route('login');
    }
}
