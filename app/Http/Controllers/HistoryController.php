<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $histori = Pengaduan::with('balasans')->where('user_id', auth()->user()->id)->get();
        return view('user.history', compact('histori'));
    }
}
