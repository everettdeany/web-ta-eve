<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PengajarModels;

class TesterControllers extends Controller
{
    public function user_data_update() {
        var_dump(User::all());
        // foreach( PengajarModels::all() as $pengajar ) {
        //     $UserModel = new User;
        //     $UserModel->username = $pengajar->nip;
        //     $UserModel->password = 'password';
        //     $UserModel->pengajar_id = $pengajar->id;
        //     $UserModel->save();
        // }
    }
}
