<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PetugasController extends Controller
{

    public function ubahFoto()
    {
        return view('petugas.ubah_foto_profile');
    }
    public function edit()
    {
        $user = auth()->user(); // Mengambil data user yang sedang login
        return view('petugas.profile.edit', compact('user'));
    }

    public function updateProfilePhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        // Hapus foto profil lama jika ada
        if ($user->profile_photo_path) {
            Storage::disk('public')->delete($user->profile_photo_path);
        }

        // Simpan foto profil baru
        $profile_photo_path = $request->file('profile_photo')->store('profile-photos', 'public');

        // Update path foto profil pada user
        $user->profile_photo_path = $profile_photo_path;
        $user->save();

        return redirect()->route('petugas.ubah_foto_profile_form')->with('success', 'Profile photo updated successfully.');
    }

}
