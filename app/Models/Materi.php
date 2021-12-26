<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    
    protected $table = "materi";
    
    public $timestamps = false;

    protected $fillable = 
    [
        'kode',
        'nama',
        'idKategori',
        'durasi',
        'deskripsi',
        'note'
    ];
}
