@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Add Video Data')

@section('container')

    <div class="" style="padding: 2.5% 7.5%;">
        <h1>Input Data Materi</h1>
        <form action="/admin/add-materi-data-post" method="post">
            @csrf
            <div class="mb-3">
                <label for="kode" class="form-label">Kode</label>
                <input maxlength="10" type="text" class="form-control" id="kode" placeholder="input kode..." name="kode">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="input link video..." name="nama">
            </div>
            <div class="mb-3">
                <label for="idkategori" class="form-label">id kategori</label>
                <select class="form-control form-select" aria-label="idkategori" name="idkategori">
                    @foreach($KategoriData as $Kategori)
                        <option value="{{ $Kategori->id }}">{{ $Kategori->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi Video</label>
                <!-- <input id="duration-input" type="text" required pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}:[0-9]{2}" value="00:00:00:00" title="Write a duration in the format hh:mm:ss:ms">
                <p id="output"></p> -->
                <div class="row">
                    <div class="col-2" style="display: flex; align-items: center;">
                        <input type="number" min="0" class="form-control" id="durasi" placeholder="input..." name="durasi">
                        <span style="margin-left: 10px;">Menit</span>
                    </div>
                </div>
                <!-- <span style="font-size: 10px;">Contoh pengisian durasi : 1 jam 3 menit 45 detik</span> -->
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">Note</label>
                <textarea class="form-control" id="note" rows="3" name="note"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
    