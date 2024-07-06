<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
//     public function index(){
//         $pengaduan = Pengaduan::all();
//         return view('admin.pengaduanmasuk', compact('pengaduan'));
//     }
//     public function proses()
//     {
//         $pengaduan = Pengaduan::where('status', 'proses')->get();
//         return view('admin.pengaduanproses', compact('pengaduan'));
//     }
//     public function ditolak()
//     {
//         $pengaduan = Pengaduan::where('status', 'ditolak')->get();
//         return view('admin.pengaduanditolak', compact('pengaduan'));
//     }
//     public function selesai()
//     {
//         $pengaduan = Pengaduan::where('status', 'selesai')->get();
//         return view('admin.pengaduanselesai', compact('pengaduan'));
//     }

//     public function ubahFoto()
//     {
//         return view('admin.ubah_foto_profile');
//     }

//     public function ubahPassword()
//     {
//         return view('admin.ubahpassword');
//     }

//     // Method untuk memperbarui password
//     public function updatePassword(Request $request)
//     {
//         // Validasi input
//         $request->validate([
//             'current_password' => 'required',
//             'new_password' => 'required|min:8|confirmed',
//         ]);

//         // Cek apakah password saat ini benar
//         if (!Hash::check($request->current_password, Auth::user()->password)) {
//             return back()->withErrors(['current_password' => 'Password saat ini tidak sesuai.']);
//         }

//         // Update password
//         $user = Auth::user();
//         $user->password = Hash::make($request->new_password);
//         $user->save();

//         return redirect()->route('admin.index')->with('success', 'Password berhasil diubah.');
//     }

//     public function tambahPetugas(Request $request)
//     {
//     // Validasi input form tambah petugas
//     $request->validate([
//         'name' => 'required|string|max:255',
//         'email' => 'required|email|unique:users,email',
//         'password' => 'required|min:8|confirmed',
//     ]);

//     // Simpan data petugas baru ke dalam database
//     $user = new User();
//     $user->name = $request->name;
//     $user->email = $request->email;
//     $user->password = Hash::make($request->password);
//     $user->save();

//     // Redirect ke halaman yang sesuai setelah berhasil menambahkan petugas
//     return redirect()->route('admin.home')->with('success', 'Petugas baru berhasil ditambahkan.');
// }   
    
}
