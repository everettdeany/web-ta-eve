@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Add Video Data')

@section('container')

    <div class="" style="padding: 2.5% 7.5%;">
        <h1>Edit Data Pengajar</h1>
        <form action="/admin/pengajar-data/edit" method="post" enctype="multipart/form-data">
            @csrf
            @foreach($PengajarData as $pengajar)
                <input name="id-data" style="visibility: hidden;" value="{{ $pengajar->id }}" />
                <div class="mb-3">
                    <label for="nip" class="form-label">nip</label>
                    <input maxlength="10" type="text" class="form-control" id="nip" placeholder="input nip..." name="nip" value="{{ $pengajar->nip }}">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="input nama..." name="nama" value="{{ $pengajar->nama }}">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">gender</label>
                    <select class="form-control form-select" aria-label="gender" name="gender">
                        @if($pengajar->gender === 'L')
                            <option value="L">Laki Laki</option>
                            <option value="P">Perempuan</option>
                        @else
                            <option value="P">Perempuan</option>
                            <option value="L">Laki Laki</option>
                        @endif
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">kategori</label>
                    <select class="form-control form-select" aria-label="kategori" name="kategori">
                        @if($pengajar->kategori === 'Internal')
                            <option value="Internal">Internal</option>
                            <option value="Eksternal">Eksternal</option>
                            <option value="Freelance">Freelance</option>
                        @elseif($pengajar->kategori === 'Eksternal')
                            <option value="Eksternal">Eksternal</option>
                            <option value="Internal">Internal</option>
                            <option value="Freelance">Freelance</option>
                        @else
                            <option value="Freelance">Freelance</option>
                            <option value="Eksternal">Eksternal</option>
                            <option value="Internal">Internal</option>
                        @endif
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tempat_lahiir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahiir" placeholder="input tempat_lahiir..." name="tempat_lahiir" value="{{ $pengajar->tmpLahir }}">
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" placeholder="input tanggal_lahir..." name="tanggal_lahir" value="{{ $pengajar->tglLahir }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="input alamat..." name="alamat" value="{{ $pengajar->alamat }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="input email..." name="email" value="{{ $pengajar->email }}">
                </div>
                <div class="mb-3">
                    <label for="hp" class="form-label">Hp</label>
                    <input type="text" class="form-control" id="hp" placeholder="input hp..." name="hp" value="{{ $pengajar->hp }}">
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">foto</label>
                    <input type="file" class="form-control" id="foto" placeholder="input foto..." name="foto" value="{{ $pengajar->foto }}">
                </div>
                <div class="mb-3">
                    <label for="cv" class="form-label">CV</label>
                    <input type="file" class="form-control" id="cv" placeholder="input cv..." name="cv" value="{{ $pengajar->cv }}">
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
    