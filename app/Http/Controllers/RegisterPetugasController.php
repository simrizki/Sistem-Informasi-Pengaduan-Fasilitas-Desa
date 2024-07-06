<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterPetugasController extends Controller
{
    public function create()
    {
        return view('admin.tambahpetugas');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'nik' => 'required|string|max:16',
            'phone' => 'required|string|max:15',
            // 'type' => 'required|in:manager',
        ]);

        $passwords = Hash::make($request->password);
        // User::create([
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $passwords;
            $user->nik = $request->nik;
            $user->phone = $request->phone;
            $user->type = 2;
            $user->save();

            // 'name' => $request->name,
            // 'email' => $request->email,
            // 'password' => Hash::make($request->password),
            // 'nik' => $request->nik,
            // 'phone' => $request->phone,
            // 'type' => $request->type === 2// 1 untuk admin, 2 untuk manager
        // ]);

        return redirect()->route('admin.tambahpetugas')->with('success', 'Petugas berhasil ditambahkan');
    }
}
