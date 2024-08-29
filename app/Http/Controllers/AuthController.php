<?php

namespace App\Http\Controllers;

use App\Models\Department;
use DB;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            "username" => "required",
            "password" => "required",
        ]);

        $admin = DB::table('admin')->where('username', $request->username)->first();

        if ($admin && $admin->password === md5($request->password)) {
            session(['admin' => $admin->username]);
            return redirect()->route('dashboard');
        } else {
            return back()->withErrors(['Invalid credentials']);
        }

    }

    public function logout()
    {
        session()->forget('admin');
        return redirect()->route('login-page');
    }

    public function register(Request $request)
    {
        $request->validate([
            "username" => "required",
            "password" => "required|confirmed",
            "password_confirmation" => "required",
        ]);

        DB::table('admin')->insert([
            'username' => $request->username,
            'password' => md5($request->password),
        ]);

        return redirect()->route('dashboard')->with('success', 'Account created and logged in successfully.');
    }

    public function dashboard(Request $request)
    {
        if (!session()->has('admin')) {
            return redirect()->route('login-page')->withErrors(['You must be logged in.']);
        }

        $admin = session('admin');
        return view('Auth.dashboard', compact('admin'));
    }

    public function create()
    {
        return view("Auth.student.create");

    }
}
