@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Add Video Data')

@section('container')

    <div class="" style="padding: 2.5% 7.5%;">
        <h1>Input Data Pengajar</h1>
        <form action="/admin/add-pengajar-data-post" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nip" class="form-label">nip</label>
                <input maxlength="10" type="text" class="form-control" id="nip" placeholder="input nip..." name="nip">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="input nama..." name="nama">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">gender</label>
                <select class="form-control form-select" aria-label="gender" name="gender">
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">kategori</label>
                <select class="form-control form-select" aria-label="kategori" name="kategori">
                    <option value="Internal">Internal</option>
                    <option value="Eksternal">Eksternal</option>
                    <option value="Freelance">Freelance</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tempat_lahiir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahiir" placeholder="input tempat_lahiir..." name="tempat_lahiir">
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" placeholder="input tanggal_lahir..." name="tanggal_lahir">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="input alamat..." name="alamat">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="input email..." name="email">
            </div>
            <div class="mb-3">
                <label for="hp" class="form-label">Hp</label>
                <input type="text" class="form-control" id="hp" placeholder="input hp..." name="hp">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">foto</label>
                <input required type="file" class="form-control" id="foto" placeholder="input foto..." name="foto">
            </div>
            <div class="mb-3">
                <label for="cv" class="form-label">CV</label>
                <input required type="file" class="form-control" id="cv" placeholder="input cv..." name="cv">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
    