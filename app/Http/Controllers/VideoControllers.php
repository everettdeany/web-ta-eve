<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\VideoModels;
use App\Models\PengajarModels;


class VideoControllers extends Controller
{
    public $timestamps = false;
    
    public function index(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( ( $UserData[0]->roles !== 'admin' ) && ( $UserData[0]->roles !== 'petinggi' ) ) {
                return redirect('/');
            } else {
                return view('video/index', [
                    'VideoData' => VideoModels::paginate(10)
                ]);
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
                $DataVideo = VideoModels::where('id', $id)->get();
                $PengajarData = PengajarModels::where('id', $DataVideo[0]->pengajar_id)->get();
                // var_dump($PengajarData);
                return view('video/detail', [
                    'DataVideo' => $DataVideo,
                    'DataPengajar' => $PengajarData
                ]);
            }
        }
    }

    public function AddVideoData(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles !== 'admin' ) {
                return redirect('/');
            } else {
                $MateriData = Materi::all();
                $PengajarData = PengajarModels::all();
                return view('video/form', [
                    'MateriData' => $MateriData,
                    'PengajarData' => $PengajarData
                ]);
            }
        }
    }

    public function AddVideoDataPost(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles !== 'admin' ) {
                return redirect('/');
            } else {
                $UserData = $request->session()->get('user-data');
                var_dump($_POST);
                // echo date( 'H:i:s', strtotime($_POST['durasi_jam'].':'.$_POST['durasi_menit'].':'.$_POST['durasi_detik']) );
                $Video = new VideoModels;
                $Video->pengajar_id = $_POST['pengajar'];
                $Video->materi_id = $_POST['materi'];
                $Video->tgl_buat = $_POST['tanggal_dibuat'];
                $Video->judul = $_POST['judul'];
                $Video->durasi_jam = date( 'H:i:s', strtotime($_POST['durasi_jam'].':'.$_POST['durasi_menit'].':'.$_POST['durasi_detik']) );
                $Video->keterangan = $_POST['keterangan'];
                $Video->link = $_POST['link-video'];
                
                if ( $Video->save() ) {
                    return redirect('/admin/video-data')->with('message_store', 'Data Baru berhasil ditambah');
                } else {
                    return redirect()->back();
                }
            }
        }
    }

    public function Edit(Request $request, $id) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles !== 'admin' ) {
                return redirect('/');
            } else {
                $DataVideo = VideoModels::where('id', $id)->get();
                $MateriData = Materi::all();
                return view('video/edit', [
                    'DataVideo' => $DataVideo,
                    'MateriData' => $MateriData
                ]);
            }
        }
    }

    public function EditPost(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles !== 'admin' ) {
                return redirect('/');
            } else {    
                // var_dump($_POST);
                $Video = VideoModels::find($_POST['id-data']);
                $Video->pengajar_id = $_POST['pengajar-id'];
                $Video->materi_id = $_POST['materi'];
                $Video->tgl_buat = $_POST['tanggal_dibuat'];
                $Video->judul = $_POST['judul'];
                $Video->durasi_jam = date( 'H:i:s', strtotime($_POST['durasi_jam'].':'.$_POST['durasi_menit'].':'.$_POST['durasi_detik']) );
                $Video->keterangan = $_POST['keterangan'];
                $Video->link = $_POST['link-video'];

                if ( $Video->save() ) {
                    return redirect('/admin/video-data/detail/' . $_POST['id-data'])->with('message_update', 'Update Data berhasil diupdate');
                } else {
                    return redirect()->back();
                }
            }
        }
    }

    public function Delete(Request $request, $id) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( $UserData[0]->roles !== 'admin' ) {
                return redirect('/');
            } else {
                $Video = VideoModels::find($id);
                if ( $Video->delete() ) {
                    return redirect('/admin/video-data')->with('message_destroy', 'Data berhasil dihapus');;
                } else {
                    return redirect()->back();
                }
            }
        }
    }
}
