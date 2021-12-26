<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModels extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'kategori';

    protected $fillable = [
        'nama', 'deskripsi'
    ];
}
