<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\LaporanModels;
use App\Models\PengajarModels;
use App\Models\VideoModels;
use PDF;

class LaporanControllers extends Controller
{
    public function index(Request $request) {
        $UserData = $request->session()->get('user-data');
        if ( $UserData === null ) {
            return redirect('/');
        } else {
            if ( ( $UserData[0]->roles !== 'admin' ) && ( $UserData[0]->roles !== 'petinggi' ) ) {
                return redirect('/');
            } else {
                return view('laporan/index', [
                    'LaporanData' => LaporanModels::paginate(10),
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
                $PengajarData = PengajarModels::all();
                return view('laporan/form', [
                    'PengajarData' => $PengajarData,
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
                $models = new LaporanModels;
                $models->pengajar_id = $_POST['pengajar'];
                $models->bulan = $_POST['bulan'];
                $models->tahun = $_POST['tahun'];
                $models->bulan = $_POST['bulan'];
                $models->defisit_bln_lalu = (float)$_POST['defisit_bln_lalu'];
                $models->jml_durasi = '0';
                $models->defisit = (float)$_POST['defisit'];

                $videos = VideoModels::where('pengajar_id', $models->pengajar_id)->get();
                foreach ($videos as $video){
                    $video_bulan = date('m', strtotime($video->tgl_buat));   
                    $video_tahun = date('Y', strtotime($video->tgl_buat));

                    if (($video_bulan == $models->bulan) && ($video_tahun == $models->tahun)){
                        $durasi = explode(':', $video->durasi_jam);
                        $models->jml_durasi = $models->jml_durasi + ((int)$durasi[0] + ((int)$durasi[1] / 60) + ((int)$durasi[2] / 3600));
                    }                
                }
                
                if ( $models->save() ) {
                    return redirect('/admin/laporan-data');
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
                $PengajarData = PengajarModels::all();
                $models = LaporanModels::where('id', $id)->get();
                return view('laporan/edit', [
                    'PengajarData' => $PengajarData,
                    'LaporanData' => $models
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
                $models = LaporanModels::find($_POST['id-data']);
                $models->pengajar_id = $_POST['pengajar'];
                $models->bulan = $_POST['bulan'];
                $models->tahun = $_POST['tahun'];
                $models->bulan = $_POST['bulan'];
                $models->defisit_bln_lalu = (float)$_POST['defisit_bln_lalu'];
                $models->jml_durasi = (float)$_POST['jml_durasi'];
                $models->defisit = (float)$_POST['defisit'];
                
                if ( $models->save() ) {
                    return redirect('/admin/laporan-data');
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
                $materi = LaporanModels::find($id);
                if ( $materi->delete() ) {
                    return redirect('/admin/laporan-data');
                } else {
                    return redirect()->back();
                }
            }
        }
    }

    public function generatePDF(Request $request, $id)
    {
        $models = LaporanModels::where('id', $id)->first();
        $videos = VideoModels::where('pengajar_id', $models->pengajar_id)->get();
                
        $data = [
            'title' => 'Laporan NF Comp',
            'date' => date('m/d/Y'), 
            'pengajar' => $models->pengajar->nama, 
            'bulan' => $models->bulan, 
            'tahun' => $models->tahun,
            'defisit_bln_lalu' => $models->defisit_bln_lalu,
            'jml_durasi' => $models->jml_durasi,
            'defisit' => $models->defisit,
            'videos' => $videos
        ];

        $pdf = PDF::loadView('laporan/laporanpdf', $data);

        return $pdf->download($models->pengajar->nama.'.pdf');
    }
}
