<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    //
    public function showUserRegisterForm()
    {
        return view('auth.user_register');
    }

    // Menangani register user
    public function userRegister(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:users,nik',
            'asal_sekolah' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'nik' => $request->nik,
            'asal_sekolah' => $request->asal_sekolah,
            'password' => Hash::make($request->password),
        ]);
        Log::info('User registered successfully');

        return redirect()->route('user.login')->with('success', 'User registered successfully!');
    }

    // Menampilkan halaman login untuk user
    public function showUserLoginForm()
    {
        return view('auth.user_login');
    }

    // Menangani login untuk user
    public function userLogin(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('web')->attempt(['nik' => $request->nik, 'password' => $request->password])) {
            return redirect()->route('user.dashboard');
        }

        return back()->withErrors(['nik' => 'Invalid NIK or password']);
    }

    // Menampilkan halaman login untuk admin
    public function showAdminLoginForm()
    {
        return view('auth.admin_login');
    }

    // Menangani login untuk admin
    public function adminLogin(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt(['nik' => $request->nik, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['nik' => 'Invalid NIK or password']);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login');
    }
}
