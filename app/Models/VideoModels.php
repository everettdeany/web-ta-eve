<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoModels extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'video';

    protected $fillable = [
        'pengajar_id',
        'materi_id',
        'tgl_buat',
        'judul',
        'durasi_jam',
        'keterangan',
        'link'
    ];
}
