<?php

namespace App\Http\Controllers\Auth;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    public function loginpage() {
        return view('auth.login');
    }

    public function loginUser(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);   

        $email = $req->get('email');
        $password = $req->get('password');

        $user = User::where('email', $email)->first();
        if ($user && \Hash::check($password, $user->password)) {
            auth()->guard('web')->login($user);
            session(["email" => $email]);
            alert()->success('Login Success');
            return redirect('/admin');
        } else {
            alert()->error('Email atau Password Salah!');
            return redirect('/auth-user');
        }
    }

    public function logout() {
        session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}

