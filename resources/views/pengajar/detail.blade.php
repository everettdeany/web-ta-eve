@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Detail Pengajar Data')

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

    <div class="wrapper-detail">
        <div class="row card">
            <div class="col-12 detail">
                @foreach($DataPengajar as $data)
                    <div class="row">
                        <div class="col-12">
                            <h1>{{ $data->nama }}</h1>
                        </div>

                        <div class="col-12 ">
                            <label for="">NIP</label>
                            <p>{{ $data->nip }}</p>
                        </div>
                        <div class="col-12 ">
                            <label for="">Kategori</label>
                            <p>{{ $data->kategori }}</p>
                        </div>
                        <div class="col-12 ">
                            <label for="">Gender</label>
                            <p>{{ $data->gender }}</p>
                        </div>
                        <div class="col-12 ">
                            <label for="">Tempat Lahir</label>
                            <p>{{ $data->tmpLahir }}</p>
                        </div>
                        <div class="col-12 ">
                            <label for="">Tanggal Lahir</label>
                            <p>{{ $data->tglLahir }}</p>
                        </div>
                        <div class="col-12 ">
                            <label for="">Alamat</label>
                            <p>{{ $data->alamat }}</p>
                        </div>
                        <div class="col-12 ">
                            <label for="">Email</label>
                            <p>{{ $data->email }}</p>
                        </div>
                        <div class="col-12 ">
                            <label for="">No HP</label>
                            <p>{{ $data->hp }}</p>
                        </div>
                        <div class="col-12 ">
                            <label for="">Foto</label>
                            @if ($data->foto === NULL || $data->foto === '')
                            <p><img src="{{ Storage::url('Foto/default.png') }}" width="25%"></p>
                            @else
                            <p><img src="{{ Storage::url('Foto/'.$data->foto) }}" width="25%"></p>
                            @endif
                        </div>
                        <div class="col-12 ">
                            <label for="">CV</label>
                            <p><a href="{{ asset('storage/Files/'.$data->cv) }}" target="_blank">{{ $data->cv }}</a></p>
                        </div>
                        <div class="col-12 button">
                            <a href="/admin/pengajar-data/edit/{{ $data->id }}" class="btn btn-success">Edit</a>
                            <a href="/admin/pengajar-data/delete/{{ $data->id }}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- <?php // var_dump($DataVideo); ?> -->

@endsection