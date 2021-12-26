<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajarModels extends Model
{
    use HasFactory;

    protected $table = 'pengajar';

    public $timestamps = false;

    protected $fillable = [
        'nip',
        'nama',
        'kategori',
        'gender',
        'tmp_lahir',
        'tglLahir',
        'alamat',
        'email',
        'hp',
        'foto',
        'cv'
    ];

    public function laporan()
    {
        return $this->hasMany(LaporanModels::class, 'pengajar_id', 'nip');
    }
}
