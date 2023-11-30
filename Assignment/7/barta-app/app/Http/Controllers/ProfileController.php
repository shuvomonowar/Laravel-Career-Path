<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProfileController extends Controller
{
    function showProfile(Request $request) : View {
        $user = $request->session()->get('username');
        $info = DB::table('users')
            ->select('first_name', 'last_name')
            ->where('email', $user)
            ->first();
        $full_name = $info->first_name . " " . $info->last_name;
        $usr_name = '@' . $info->first_name . $info->last_name;

        return view('profile', ['full_name'=>$full_name, 'usr_name'=>$usr_name]);
    }
}
