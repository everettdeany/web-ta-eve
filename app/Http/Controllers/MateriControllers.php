<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\VideoModels;
use App\Models\PengajarModels;
use App\Models\KategoriModels;

class MateriControllers extends Controller
{
    public function index(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( ( $UserData[0]->roles !== 'admin' ) && ( $UserData[0]->roles !== 'petinggi' ) ) {
                return redirect('/');
            } else {
                return view('materi/index', [
                    'MateriData' => Materi::paginate(10),
                ]);
            }
        }
    }

    public function create(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles!== 'admin' ) {
                return redirect('/');
            } else {
                return view('materi/form', [
                    'KategoriData' => KategoriModels::all(),
                ]);
            }
        }
    }

    public function createpost(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles !== 'admin' ) {
                return redirect('/');
            } else {
                $Materi = new Materi;
                $Materi->kode = $_POST["kode"];
                $Materi->nama = $_POST["nama"];
                $Materi->idKategori = $_POST["idkategori"];
                $Materi->durasi = (float)$_POST["durasi"];
                $Materi->deskripsi = $_POST["deskripsi"];
                $Materi->note = $_POST["note"];
                
                if ( $Materi->save() ) {
                    return redirect('/admin/materi-data');
                } else {
                    return redirect()->back();
                }
            }
        }
    }

    public function edit(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles !== 'admin' ) {
                return redirect('/');
            } else {
                return view('materi/edit', [
                    'MateriData' => Materi::where('id', $request->id)->get(),
                    'KategoriData' => KategoriModels::all(),
                ]);
            }
        }
    }

    public function editpost(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles !== 'admin' ) {
                return redirect('/');
            } else {
                $Materi = Materi::find($_POST['id-data']);
                $Materi->kode = $_POST["kode"];
                $Materi->nama = $_POST["nama"];
                $Materi->idKategori = $_POST["idkategori"];
                $Materi->durasi = (float)$_POST["durasi"];
                $Materi->deskripsi = $_POST["deskripsi"];
                $Materi->note = $_POST["note"];

                if ( $Materi->save() ) {
                    return redirect('/admin/materi-data');
                } else {
                    return redirect()->back();
                }
            }
        }
    }

    public function delete(Request $request, $id) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles !== 'admin' ) {
                return redirect('/');
            } else {
                $materi = Materi::find($id);
                if ( $materi->delete() ) {
                    return redirect('/admin/materi-data');
                } else {
                    return redirect()->back();
                }
            }
        }
    }
}
