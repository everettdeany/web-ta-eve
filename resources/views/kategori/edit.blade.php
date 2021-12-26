@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Add Video Data')

@section('container')

    <div class="" style="padding: 2.5% 7.5%;">
        <h1>Edit Data Kategori</h1>
        <form action="/admin/kategori-data/edit" method="post">
            @csrf
            @foreach($KategoriData as $kategori)
            <input style="visibility: hidden" name="id-data" value="{{ $kategori->id }}"/>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="input name..." name="nama" value="{{ $kategori->nama }}">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi">{{ $kategori->deskripsi }}</textarea>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
    