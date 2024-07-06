<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index()
    {
        // Data visi dan misi (contoh)
        $visi = "Menjadi desa yang maju, mandiri, dan sejahtera";
        $misi = [
            "Meningkatkan kualitas infrastruktur desa",
            "Mengembangkan potensi ekonomi masyarakat",
            "Meningkatkan kualitas pelayanan publik",
            "Melestarikan budaya dan lingkungan hidup"
        ];

        return view('user.visimisi', compact('visi', 'misi'));
    }
}
