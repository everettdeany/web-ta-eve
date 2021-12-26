<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanModels extends Model
{
    use HasFactory;

    protected $table = "laporan";
    
    public $timestamps = false;

    protected $fillable = 
    [
        'pengajar_id',
        'bulan',
        'tahun',
        'defisit_bln_lalu',
        'jml_durasi',
        'defisit'
    ];

    public function pengajar()
    {
        return $this->belongsTo(PengajarModels::class, 'pengajar_id');
    }
}
