<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserLoginController extends Controller
{
    function showLogInPage(): View
    {
        return view('login');
    }

    function getValidateData(Request $request): RedirectResponse {
        $user_data = $request->validate(
            [
                'email' => ['required'],
                'password' => ['required']
            ]
        );

        $db_data = DB::table('users')->where('email', $user_data['email'])->first();

        if ($db_data->email == $user_data['email']) {
            if ($db_data->password == $user_data['password']) {
                return redirect()->route('profile');
            }
        }

        return redirect()->route('login');
    }
}
