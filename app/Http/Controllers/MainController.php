<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VideoModels;
use App\Models\Materi;
use App\Models\PengajarModels;

class MainController extends Controller
{
    public function index(Request $request) {
        if ( $request->session()->get('user-data') != null ) {
            $VideoData = VideoModels::all()->count();
            $MateriData = Materi::all()->count();
            $PengajarData = PengajarModels::all()->count();

            return view('index', [
                'VideoData' => $VideoData,
                'MateriData' => $MateriData,
                'PengajarData' => $PengajarData
            ]);
        } else {
            return redirect('/login');
        }
    }
}
