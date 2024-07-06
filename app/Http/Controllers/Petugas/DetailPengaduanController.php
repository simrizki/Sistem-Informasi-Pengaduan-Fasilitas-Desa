<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class DetailPengaduanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('petugas.detailpengaduanmasuk', compact('pengaduans'));
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('petugas.pengaduandetail', compact('pengaduan'));
    }

    public function balas(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->balasan = $request->balasan;
        $pengaduan->save();

        return redirect()->route('pengaduan.masuk')->with('success', 'Pengaduan berhasil dibalas');
    }
}
