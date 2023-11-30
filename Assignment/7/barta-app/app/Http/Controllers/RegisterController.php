<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function showRegisterPage(): View {
        return view('register');
    }

    public function storeRegisterData(RegisterRequest $request) : RedirectResponse
    {
        $user_details = $request->validated();
        $user_details['password'] = Hash::make($user_details['password']);
        DB::table('users')->insert($user_details);

        return redirect()->route('login');
    }
}
