<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanMasukController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('petugas.pengaduanmasuk', compact('pengaduans'));
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('pengaduan-detail', compact('pengaduan'));
    }
}
