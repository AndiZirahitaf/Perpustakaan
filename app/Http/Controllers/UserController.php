<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function showLogin(){
        return view('pengunjung.login');
    }

    public function login(Request $request)
    {
        // 1. Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Coba login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'Login berhasil');

        }

        // 3. Jika gagal
        return response()->json([
            'message' => 'Email atau password salah'
        ], 401);
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json([
            'message' => 'Logout berhasil'
        ]);
    }

    public function showRegister(){
        return view('pengunjung.register');
    }

    public function register(Request $request){
    
    $data = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|unique:anggota,email',
        'password' => 'required|min:8|confirmed',
        'phone' => 'required',
        'gender' => 'required|in:L,P',
        'birth_date' => 'required|date',
        'address' => 'required',
        'terms' => 'accepted'
    ]);

    // 2. Simpan user
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'phone' => $data['phone'],
        'gender' => $data['gender'],
        'birth_date' => $data['birth_date'],
        'address' => $data['address'],
        'status_keanggotaan' => 'aktif',
        'tanggal_daftar' => now(),
    ]);

    return redirect()
        ->route('login.show')
        ->with('success', 'Registrasi berhasil, silakan login.');

}

}