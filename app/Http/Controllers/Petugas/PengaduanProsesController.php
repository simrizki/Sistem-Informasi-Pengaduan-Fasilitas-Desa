<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanProsesController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('petugas.pengaduanproses', compact('pengaduans'));
    }
}
