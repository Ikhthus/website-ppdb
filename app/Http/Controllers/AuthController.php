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
        $maxRegistrants = env("MAX_REGISTRANTS");
        if (User::count() >= $maxRegistrants) {
            return redirect()->back()->withErrors(['registration_closed' => 'Pendaftaran telah ditutup karena kuota sudah penuh.']);
        }
        $request->validate([
            'nik' => 'required|unique:users,nik',
            'asal_sekolah' => 'max:255',
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


    // lupa password
    public function showForgotPasswordForm()
    {
        return view('auth.lupa_password');
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'nik' => 'required|exists:users,nik',  // Validasi agar NIK yang dimasukkan ada di database
            'password' => 'required|string|min:6|confirmed',  // Validasi password baru
        ]);

        // Cari user berdasarkan NIK
        $user = User::where('nik', $request->nik)->first();

        // Jika user ditemukan, reset password
        if ($user) {
            $user->password = Hash::make($request->password);  // Enkripsi password baru
            $user->save();  // Simpan perubahan password

            return redirect()->route('user.login')->with('success', 'Password berhasil diubah!');
        }

        // Jika NIK tidak ditemukan
        return back()->withErrors(['nik' => 'NIK tidak ditemukan']);
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
