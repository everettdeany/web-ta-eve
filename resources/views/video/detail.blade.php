@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Detail Video Data')

@section('container')

    <style>
        .wrapper-detail {
            padding: 1.5% 2.5%;
        }

        .wrapper-detail .card {
            padding: 2.5%;
        }

        .wrapper-detail iframe {
            width: 100%;
            height: 450px;
        }
    </style>
@include('message')
    <div class="wrapper-detail">
        <div class="row card">
            <div class="col-12 detail">
                <?php // var_dump($DataPengajar); ?>
                @foreach($DataVideo as $data)
                    <div class="row">
                        <div class="col-12">
                            <h1>{{ $data->judul }}</h1>
                        </div>
                        <!-- <div class="col-12"> -->
                            <!-- <iframe src="" frameborder="1"></iframe> -->
                        <!-- </div> -->

                        <div class="col-12 pengajar-data">
                            <div class="row wrapper-pengajar">
                                @foreach($DataPengajar as $pengajar)
                                    <div class="col-12 name">
                                        <label for="name">Nama Pengajar</label>
                                        <p>{{ $pengajar->nama }}</p>
                                    </div>
                                    <div class="col-12 nip">
                                        <label for="nip">NIP Pengajar</label>
                                        <p>{{ $pengajar->nip }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-12 tanggal">
                            <label for="tanggal">Video Link</label>
                            <p>{{ $data->link }}</p>
                        </div>

                        <div class="col-12 tanggal">
                            <label for="tanggal">Tanggal Dibuat :</label>
                            <p>{{ $data->tgl_buat }}</p>
                        </div>

                        <div class="col-12 durasi">
                            <label for="durasi">Durasi : </label>
                            <p>{{ $data->durasi_jam }}</p>
                        </div>

                        <div class="col-12 keterangan">
                            <label for="keterangan">Keterangan</label>
                            <p>{{ $data->keterangan }}</p>
                        </div>

                        <div class="col-12 button">
                            <a href="/admin/video-data/edit/{{ $data->id }}" class="btn btn-success">Edit</a>
                            <a href="/admin/video-data/delete/{{ $data->id }}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- <?php // var_dump($DataVideo); ?> -->

@endsection