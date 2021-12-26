<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\VideoModels;
use App\Models\PengajarModels;
use App\Models\KategoriModels;

class KategorControllers extends Controller
{
    public function index(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( ( $UserData[0]->roles !== 'admin' ) && ( $UserData[0]->roles !== 'petinggi' ) ) {
                return redirect('/');
            } else {
                return view('kategori/index', [
                    'KategoriData' => KategoriModels::paginate(10),
                ]);
            }
        }
    }

    public function create(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles !== 'admin' ) {
                return redirect('/');
            } else {
                return view('kategori/form');
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
                $models = new KategoriModels;
                $models->nama = $_POST['nama'];
                $models->deskripsi = $_POST['deskripsi'];
                if ( $models->save() ) {
                    return redirect('/admin/kategori-data');
                } else {
                    return redirect()->back();
                }
            }
        }
    }

    public function edit(Request $request, $id) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles !== 'admin' ) {
                return redirect('/');
            } else {
                $models = KategoriModels::where('id', $id)->get();
                return view('kategori/edit', ['KategoriData' => $models]);
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
                $models = KategoriModels::find($_POST['id-data']);
                $models->nama = $_POST['nama'];
                $models->deskripsi = $_POST['deskripsi'];
                if ( $models->save() ) {
                    return redirect('/admin/kategori-data');
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
                $models = KategoriModels::find($id);
                if( $models->delete() ) {
                    return redirect('/admin/kategori-data');
                } else {
                    return redirect()->back();
                }
            }
        }
    }
}
