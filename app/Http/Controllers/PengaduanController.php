<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Http\Controllers\Controller;
use App\Models\Balasan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PengaduanController extends Controller
{

    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('petugas.pengaduanmasuk', compact('pengaduans'));
    }


    public function proses()
    {
        // Ambil pengaduan dengan status "Proses"
        $pengaduans = Pengaduan::where('status', 'Proses')->get();

        return view('Petugas.pengaduanproses', compact('pengaduans'));
    }
    public function showDitolak()
    {
        $pengaduans = Pengaduan::where('status', 'tolak')
            ->whereHas('balasans') // Hanya ambil pengaduan dengan balasan
            ->with('balasans')
            ->get();

        return view('petugas.pengaduanditolak', compact('pengaduans'));
    }
    public function balass(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:proses,tolak',
            'balasan' => 'required|string',
        ]);

        $pengaduan = Pengaduan::findOrFail($id);

        // Update status dan tambahkan balasan
        $pengaduan->status = $request->status;
        $pengaduan->balasan = $request->balasan;
        $pengaduan->save();

        // Redirect sesuai dengan status
        if ($request->status == 'tolak') {
            return redirect()->route('pengaduanditolak.view')->with('success', 'Pengaduan berhasil ditolak.');
        } else {
            return redirect()->route('petugas.pengaduanproses')->with('success', 'Balasan pengaduan berhasil dikirim.');
        }
    }

    public function markAsSelesai($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        
        // Update status menjadi 'Selesai'
        $pengaduan->status = 'Selesai';
        $pengaduan->save();

        return redirect()->route('pengaduanselesai.view')->with('success', 'Pengaduan berhasil ditandai sebagai selesai.');
    }
    public function showSelesai()
    {
        $pengaduans = Pengaduan::where('status', 'Selesai')->get();
        return view('Petugas.pengaduanselesai', compact('pengaduans'));
    }
    public function ubahProfile(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update user's name
        $user->name = $request->input('name');

        // Handle profile photo update if provided
        if ($request->hasFile('profile_photo')) {
            // Store the new profile photo
            $imagePath = $request->file('profile_photo')->store('profile-photos', 'public');

            // Delete old profile photo if exists
            if ($user->profile_photo_path) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }

            // Update user's profile photo path
            $user->profile_photo_path = $imagePath;
        }

        // Save the updated user data
        $user->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|max:15',
        ]);

        // Simpan data petugas ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'role' => 'petugas', // Pastikan Anda memiliki kolom role di tabel users
        ]);

        // Redirect ke halaman tambah petugas dengan pesan sukses
        return redirect()->route('admin.tambahpetugas')->with('success', 'Petugas berhasil ditambahkan.');
    }

    // Method untuk menampilkan pengaduan yang ditolak di halaman admin
    public function showDitolakAdmin()
    {
        $pengaduans = Pengaduan::where('status', 'tolak')->get();
        return view('admin.pengaduanditolak', compact('pengaduans'));
    }

    // Method untuk menampilkan pengaduan yang selesai di halaman admin
    public function showSelesaiAdmin()
    {
        $pengaduans = Pengaduan::where('status', 'selesai')->get();
        return view('admin.pengaduanselesai', compact('pengaduans'));
    }

    // Method untuk menampilkan pengaduan masuk di halaman admin
    public function showMasukAdmin()
    {
        $pengaduans = Pengaduan::where('status', 'masuk')->get();
        return view('admin.pengaduanmasuk', compact('pengaduans'));
    }

    // Method untuk menampilkan pengaduan dalam proses di halaman admin
    public function showProsesAdmin()
    {
        $pengaduans = Pengaduan::where('status', 'proses')->get();
        return view('admin.pengaduanproses', compact('pengaduans'));
    }
    public function create(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'isi_pengaduan' => 'required|string|max:255',
            'upload_gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk file gambar
        ]);
    
        $user_id = auth()->id(); // Mendapatkan ID pengguna yang saat ini masuk
    
        if ($request->hasFile('upload_gambar')) {
            $image = $request->file('upload_gambar');
            $originalName = $image->getClientOriginalName();
            $imageName = time() . '_' . $originalName;
            $image->move(public_path('upload_gambar'), $imageName); // Simpan foto ke direktori publik
            $fotoPath = url('upload_gambar/' . $imageName);
        }
    
        // Simpan data transaksi ke database
        $pengaduan = new Pengaduan();
        $pengaduan->user_id = $user_id;
        $pengaduan->isi_pengaduan = $request->isi_pengaduan;
        $pengaduan->upload_gambar = $fotoPath;
        $pengaduan->status = 0; // Default status
        $pengaduan->save();

        
    
        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('home')->with('success', 'Transaksi berhasil disimpan.');
        return redirect()->route('admin.tambahpetugas')->with('success', 'Petugas berhasil ditambahkan.');
    }

    public function tanggapi(Request $request, $id)
    {
        $request->validate([
            'keputusan' => 'required|in:Setuju,Tolak',
            'balasan' => 'nullable|string',
        ]);

        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->status = $request->keputusan == 'Setuju' ? 'Setuju' : 'Tolak';
        $pengaduan->tanggapan = $request->balasan;
        $pengaduan->save();

        return redirect()->route('pengaduan.masuk')->with('success', 'Tanggapan berhasil disampaikan.');
    }

    public function sudah($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        // Lakukan logika untuk menandai pengaduan sebagai selesai, misalnya mengubah status di database
        $pengaduan->status = 1; // Misalnya, ubah status pengaduan menjadi 1 untuk menandakan selesai
        $pengaduan->save();

        return redirect()->route('home')->with('success', 'Pengaduan telah ditandai sebagai selesai.');
    }

    public function edit($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('Petugas.edit', compact('pengaduan'));
    }

    public function update(Request $request, $id)
    {
    $pengaduan = Pengaduan::findOrFail($id);
    $pengaduan->judul_pengaduan = $request->judul_pengaduan;
    $pengaduan->isi_pengaduan = $request->isi_pengaduan;
    $pengaduan->save();

    return redirect()->route('pengaduan.masuk')->with('success', 'Pengaduan berhasil diperbarui.');
    }

    public function delete($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->delete();

        return redirect()->route('pengaduan.masuk')->with('success', 'Pengaduan berhasil dihapus.');
    }
    public function showBalasForm($id)
    {
        $pengaduan = Pengaduan::where('id', $id)->firstOrFail();
        return view('Petugas.balas', compact('pengaduan'));
    }

    public function balas(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:proses,tolak',
            'balasan' => 'required|string',
        ]);

        $pengaduan = Pengaduan::findOrFail($id);
        
        // Update status pengaduan
        $pengaduan->status = $request->status;
        $pengaduan->save();

        // Tambahkan balasan hanya jika status adalah 'tolak' atau 'proses'
        if ($request->status == 'tolak' || $request->status == 'proses') {
            $balasan = new Balasan();
            $balasan->pengaduan_id = $pengaduan->id; // Hubungkan dengan ID pengaduan yang benar
            $balasan->petugas_id = auth()->user()->id; // ID petugas yang sedang masuk
            $balasan->isi_balasan = $request->balasan;
            $balasan->save();
        }
        // Redirect sesuai dengan status
        if ($request->status == 'tolak') {
            return redirect()->route('pengaduanditolak.view')->with('success', 'Pengaduan berhasil ditolak.');
        } else {
            return redirect()->route('petugas.pengaduanproses')->with('success', 'Balasan pengaduan berhasil dikirim.');
        }
    }

    public function showHistori()
    {
        // Ambil pengaduan dengan balasan yang sudah ada
        $histori = Pengaduan::whereNotNull('balasan')->with('balasans')->get();

        return view('user.history', compact('histori'));
    }

    public function show($status)
    {
        // Ambil data pengaduan berdasarkan status
        $pengaduans = Pengaduan::where('status', $status)->get();

        // Tentukan view yang sesuai berdasarkan status
        switch ($status) {
            case 'masuk':
                $view = 'Admin.pengaduanmasuk';
                break;
            case 'proses':
                $view = 'Admin.pengaduanproses';
                break;
            case 'ditolak':
                $view = 'Admin.pengaduanditolak';
                break;
            case 'selesai':
                $view = 'Admin.pengaduanselesai';
                break;
            default:
                abort(404);
        }

        return view($view, compact('pengaduans'));
    }


}