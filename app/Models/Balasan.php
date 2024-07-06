<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balasan extends Model
{
    use HasFactory;

    protected $table = 'balasans';

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'pengaduan_id'); // Sesuaikan dengan nama kolom yang benar
    }

    public function petugas()
    {
        return $this->belongsTo(User::class, 'petugas_id');
    }
}
