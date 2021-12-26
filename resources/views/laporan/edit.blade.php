@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Add Video Data')

@section('container')

    <div class="" style="padding: 2.5% 7.5%;">
        <h1>Edit Data Laporan</h1>
        <form action="/admin/laporan-data/edit" method="post">
            @csrf
            @foreach($LaporanData as $laporan)
                <input name="id-data" value="{{ $laporan->id }}" style="visibility: hidden;" />
                <div class="mb-3">
                    <label for="pengajar" class="form-label">Pengajar</label>
                    <select class="form-control form-select" aria-label="pengajar" name="pengajar" value="{{ $laporan->pengajar_id }}">
                        @foreach($PengajarData as $pengajar)
                            <option value="{{ $pengajar->id }}">{{ $pengajar->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bulan" class="form-label">bulan</label>
                    <select class="form-control form-select" aria-label="bulan" name="bulan" value="{{ $laporan->bulan }}">
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">tahun</label>
                    <select class="form-control form-select" aria-label="tahun" name="tahun" id="tahun" value="{{ $laporan->tahun }}">
                    </select>
                    <script type="text/javascript">
                        let tahun = document.querySelector('#tahun')
                        let date = new Date();
                        let max_years = 10;
                        for( let i = 0; i <= max_years; i++ ) {
                            if ( i != 0 ) {
                                tahun.innerHTML += `
                                    <option value="${ ( Number(date.getFullYear()) - 1 ) + i }">${ ( Number(date.getFullYear()) - 1 ) + i }</option>
                                `
                            } else {
                                tahun.innerHTML += `
                                    <option value="${ Number(date.getFullYear()) - 1 }">${ Number(date.getFullYear()) - 1 }</option>
                                `
                            }
                        }
                    </script>
                </div>
                <div class="mb-3">
                    <label for="defisit_bln_lalu" class="form-label">Saldo / Defisit Bulan Lalu</label>
                    <input type="number" class="form-control" id="defisit_bln_lalu" name="defisit_bln_lalu" value="{{ $laporan->defisit_bln_lalu }}">
                </div>
                <div class="mb-3">
                    <label for="jml_durasi" class="form-label">Jumlah Durasi</label>
                    <input type="number" class="form-control" id="jml_durasi" name="jml_durasi" value="{{ $laporan->jml_durasi }}">
                </div>
                <div class="mb-3">
                    <label for="defisit" class="form-label">Saldo / Defisit</label>
                    <input type="number" class="form-control" id="defisit" name="defisit" value="{{ $laporan->defisit }}">
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
    