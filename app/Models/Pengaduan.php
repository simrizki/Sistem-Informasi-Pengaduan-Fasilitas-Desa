<?php

namespace App\Models;

use App\Models\Balasan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';

    protected $fillable = [
        'id',
        'user_id',
        'isi_pengaduan',
        'upload_gambar',
        'status',
    ];

    protected $primaryKey = 'id'; // Tentukan user_id sebagai primary key

    public $incrementing = false; // Nonaktifkan incrementing karena user_id bukan integer

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function balasans()
    {
        return $this->hasMany(Balasan::class, 'pengaduan_id'); // Sesuaikan dengan nama kolom yang benar
    }
}
