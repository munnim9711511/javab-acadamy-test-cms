<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function post(Request $request)
    {

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {

            $request->session()->regenerate();

            return redirect()->intended('/post');
        } else {

            return redirect()->intended('login');
        }
    }
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/login');

    }

}
