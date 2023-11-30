<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SinglePostController extends Controller
{
    function showSinglePost(Request $request) : View {
        $email = $request->session()->get('username');
        $usr_info = DB::table('users')
            ->select('first_name', 'last_name')
            ->where('email', $email)
            ->first();

        return view('single-post', ['full_name'=>($usr_info->first_name." ".$usr_info->last_name), 'usr_name'=>('@'.$usr_info->first_name.$usr_info->last_name)]);
    }
}
