<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminControllers extends Controller
{
    public function index(Request $request) {
        $UserData = $request->session()->get('user-data');
        
        // var_dump($UserData);
        return view('admin/index');
    }

    public function RekapData(Request $request) {
        return view('admin/RekapData');
    }

    public function Materi() {
        
    }
}
