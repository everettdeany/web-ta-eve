<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;

class MateriController extends Controller
{
    public $timestamps = false;
    public function index(){
        $data = Materi::all();
        // var_dump($data);
        //cara passing dari controller ke view
        return view('materi/list', ['data'=>$data]);

    }

    public function create(){
       return view('materi/_form');
    }
    public function create_post(){
        var_dump($_POST);
        $materi = new Materi;
        // $materi->kode = $_POST['kode'];
        $materi->nama = $_POST['nama'];
        $materi->durasi = $_POST['durasi'];
        $materi->deskripsi = $_POST['deskripsi'];
        $materi->note = $_POST['note'];
        if($materi->save()){
            return redirect('/materi');
        }

    }
    public function update($id){
        $data = Materi::where('id',$id)->get();
        if($data == NULL){
            return redirect('/materi');
        }else{
            return view('materi/update', ['data'=>$data]);
        }
        
    }

    public function delete($id){
        if(Materi::findOrFail($id)->delete()){
            return redirect('/materi');
        } else{
            return redirect('/materi');
        }

    }


}

    