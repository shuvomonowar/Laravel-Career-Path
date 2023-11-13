<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserRegisterController extends Controller
{
    public function showRegisterPage(): View {
        return view('register');
    }

    public function getValidateData(Request $request): RedirectResponse
    {
        $user_details = $request->only(
            [
                'first_name',
                'last_name',
                'email',
                'password'
            ]);

        $user_details['password'] = Hash::make($user_details['password']);

        DB::table('users')->insert($user_details);

        return redirect()->route('login');
    }
}
