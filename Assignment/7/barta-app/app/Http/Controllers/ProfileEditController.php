<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileEditRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ProfileEditController extends Controller
{
    function getProfileEdit(Request $request) : View {
        $user = $request->session()->get('username');
        $info = DB::table('users')
            ->select('first_name', 'last_name', 'email')
            ->where('email', $user)
            ->first();

        return view('edit-profile', ['first_name'=>$info->first_name, 'last_name'=>$info->last_name, 'email'=>$info->email]);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    function saveProfileEdit(ProfileEditRequest $request) : RedirectResponse {
        $username = session()->get('username');
        $updateData = $request->validated();

        if ($updateData['password'] != null) {
            DB::table('users')
                ->where('email', $username)
                ->update(['first_name'=>$updateData['first-name'], 'last_name'=>$updateData['last-name'], 'password'=>Hash::make($updateData['password'])]);
        }
        else {
            DB::table('users')
                ->where('email', $username)
                ->update(['first_name'=>$updateData['first-name'], 'last_name'=>$updateData['last-name']]);
        }

        return redirect()->route('login');
    }
}
