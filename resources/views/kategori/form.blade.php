@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Add Video Data')

@section('container')

    <div class="" style="padding: 2.5% 7.5%;">
        <h1>Input Data Kategori</h1>
        <form action="/admin/add-kategori-data-post" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="input name..." name="nama">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
    