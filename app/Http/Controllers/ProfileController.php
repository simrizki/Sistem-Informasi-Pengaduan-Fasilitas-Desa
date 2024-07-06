<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('User.profile');
    }

    public function profileuser()
    {
        $user = Auth::user();
        return view('User.profileuser', compact('user'));
    }
    public function edit()
    {
        $user = Auth::user();
        return view('User.editProfile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'nik' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nik = $request->nik;
        $user->phone = $request->phone;

        if ($request->hasFile('profile_photo')) {
            // Hapus foto lama jika ada
            if ($user->profile_photo) {
                Storage::delete('public/profile_photos/' . $user->profile_photo);
            }
        
            // Simpan foto baru
            $photoName = time() . '.' . $request->profile_photo->extension();
            $request->profile_photo->storeAs('public/profile_photos', $photoName);
            $user->profile_photo = $photoName;
        }        

        $user->save();

        return redirect()->route('profileuser')->with('success', 'Profil berhasil diperbarui.');
    }

}
