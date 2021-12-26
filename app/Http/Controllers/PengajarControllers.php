<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\VideoModels;
use App\Models\PengajarModels;
use App\Models\KategoriModels;

class PengajarControllers extends Controller
{
    public function index(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( ( $UserData[0]->roles !== 'admin' ) && ( $UserData[0]->roles !== 'petinggi' ) ) {
                return redirect('/');
            } else {
                return view('pengajar/index', [
                    'PengajarData' => PengajarModels::paginate(10),
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
                return view('pengajar/form');
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
                $foto = null;
                $cv = null;
                if ( $request->hasFile('foto') ) {
                    // Storage::disk('public')->put('Content', $request->file('foto'));
                    $foto = $request->file('foto')->hashName();
                }
                else{
                    $foto = "default.png";
                    }
                if ( $request->hasFile('cv') ) {
                    $cv = $request->file('cv')->hashName();
                }
                
                $models = new PengajarModels;
                $models->nip = $_POST['nip'];
                $models->nama = $_POST['nama'];
                $models->kategori = $_POST['kategori'];
                $models->gender = $_POST['gender'];
                $models->tmpLahir = $_POST['tempat_lahiir'];
                $models->tglLahir = $_POST['tanggal_lahir'];
                $models->alamat = $_POST['alamat'];
                $models->email = $_POST['email'];
                $models->hp = $_POST['hp'];
                $models->foto = $foto;
                $models->cv = $cv;
                
                if ($foto != "default.jpg") {
                    if ( $models->save() ) {
                        Storage::disk('public')->put('Foto', $request->file('foto'));
                        Storage::disk('public')->put('Files', $request->file('cv'));
                        return redirect('/admin/pengajar-data');
                    } else {
                        return redirect()->back();
                    }
                } else {
                    if ( $models->save() ) {
                        return redirect('/admin/pengajar-data');
                    } else {
                        return redirect()->back();
                    }
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
                $PengajarData = PengajarModels::where('id', $id)->get();
                return view('pengajar/edit', ['PengajarData' => $PengajarData]);
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
                $models = PengajarModels::find($_POST['id-data']);
                $foto = null;
                $cv = null;
                if ( $request->hasFile('foto') ) {
                    $foto = $request->file('foto')->hashName();
                    Storage::disk('public')->delete('Foto/' . $models->foto);
                    Storage::disk('public')->put('Foto', $request->file('foto'));
                } else {
                    $foto = $models->foto;
                }

                if ( $request->hasFile('cv') ) {
                    $cv = $request->file('cv')->hashName();
                    Storage::disk('public')->delete('Files/' . $models->cv);
                    Storage::disk('public')->put('Files', $request->file('cv'));
                } else {
                    $cv = $models->cv;
                }

                $models->nip = $_POST['nip'];
                $models->nama = $_POST['nama'];
                $models->kategori = $_POST['kategori'];
                $models->gender = $_POST['gender'];
                $models->tmpLahir = $_POST['tempat_lahiir'];
                $models->tglLahir = $_POST['tanggal_lahir'];
                $models->alamat = $_POST['alamat'];
                $models->email = $_POST['email'];
                $models->hp = $_POST['hp'];
                $models->foto = $foto;
                $models->cv = $cv;

                if ( $models->save() ) {
                    return redirect('/admin/pengajar-data');
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
                $models = PengajarModels::find($id);
                Storage::disk('public')->delete('Foto/' . $models->foto);
                Storage::disk('public')->delete('Files/' . $models->cv);

                if ( $models->delete() ) {
                    return redirect('/admin/pengajar-data');
                } else {
                    return redirect()->back();
                }
            }
        }
    }
    public function Detail(Request $request, $id) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles !== 'admin' && $UserData[0]->roles !== 'petinggi' ) {
                return redirect('/');
            } else {
                $DataPengajar = PengajarModels::where('id', $id)->get();
                return view('pengajar/detail', [
                    'DataPengajar' => $DataPengajar,
                ]);
            }
        }
    }
}
