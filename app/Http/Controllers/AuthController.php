<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function funLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            if (Auth::user()->name == 'admin') {
                return redirect()->intended('dashboard')->withSuccess('Welcome to Admin Dashboard');
            } else {
                return redirect()->intended('/')->withSuccess('Signed in');
            }
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.register');
    }

    public function funRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->withSuccess('success', 'Data sudah tersimpan , silahkan login !');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function signOut()
    {
        session();

        if (Auth::user()->name == 'admin') {

            Auth::logout();

        } else {

            Auth::logout();
        }

        return redirect('login');
    }
}
