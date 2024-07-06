<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaduanMasuk extends Model
{
    use HasFactory;

    protected $fillable = ['isi', 'balasan'];
    
}
