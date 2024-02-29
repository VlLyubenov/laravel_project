<?php

namespace App\Http\Controllers;

// use GuzzleHttp\Psr7\Request;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function register (Request $request) {

        $user = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create($user);

        return redirect()->back()->with('register_message', 'Registered');

    }

    public function login (Request $request) {

        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($user)){
            return redirect(route('listings.index'));
        }else{
            return redirect()->back()->with('login_fail', 'Wring email/password');
        }

    }

    public function logout () {

        Auth::logout();
        return redirect('/');

    }

}
