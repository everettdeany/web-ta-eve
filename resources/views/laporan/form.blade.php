@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Add Video Data')

@section('container')

    <div class="" style="padding: 2.5% 7.5%;">
        <h1>Input Data Laporan</h1>
        <form action="/admin/add-laporan-data-post" method="post">
            @csrf
            <div class="mb-3">
                <label for="pengajar" class="form-label">Pengajar</label>
                <select class="form-control form-select" aria-label="pengajar" name="pengajar">
                    @foreach($PengajarData as $pengajar)
                        <option value="{{ $pengajar->id }}">{{ $pengajar->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="bulan" class="form-label">bulan</label>
                <select class="form-control form-select" aria-label="bulan" name="bulan">
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">tahun</label>
                <select class="form-control form-select" aria-label="tahun" name="tahun" id="tahun">
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
                <input type="number" class="form-control" id="defisit_bln_lalu" name="defisit_bln_lalu">
            </div>
            <!-- <div class="mb-3">
                <label for="jml_durasi" class="form-label">Jumlah Durasi</label>
                <input type="number" class="form-control" id="jml_durasi" name="jml_durasi">
            </div> -->
            <div class="mb-3">
                <label for="defisit" class="form-label">Saldo / Defisit</label>
                <input type="number" class="form-control" id="defisit" name="defisit">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
    