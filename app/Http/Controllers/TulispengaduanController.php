<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class TulispengaduanController extends Controller
{
    public function index()
    {
        return view('user.pengaduan');
    }
}
