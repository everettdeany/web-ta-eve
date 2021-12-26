@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Materi Data')

@section('container')

    <style>
        .wrapper-Materi-data {
            padding: 2.5% 2.5%;
        }

        a {
            margin-bottom: 10px;
        }

        svg {
            width: 15px; 
        }

        .paging nav div:nth-child(1) {
            display: none;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="wrapper-video-data" style="padding: 2.5% 2.5%;">
        <h1>Laporan Data</h1>
        <a href="/admin/add-laporan-data" class="btn btn-primary">Add Data</a>
        <div class="fswtele">
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <td>No</td>
                        <td>Pengajar</td>
                        <td>Bulan</td>
                        <td>Tahun</td>
                        <td>Saldo / Defisit Bulan Lalu</td>
                        <td>Jumlah Durasi</td>
                        <td>Saldo / Defisit</td>
                        <td>Action</td>
                    </tr>
                    @for($i = 0; $i < count($LaporanData); $i++)
                        <tr>
                            <td>{{ ($i + 1) }}</td>
                            <td>{{ $LaporanData[$i]->pengajar->nama }}</td>
                            <td>{{ $LaporanData[$i]->bulan }}</td>
                            <td>{{ $LaporanData[$i]->tahun }}</td>
                            <td>{{ $LaporanData[$i]->defisit_bln_lalu }}</td>
                            <td>{{ $LaporanData[$i]->jml_durasi }}</td> 
                            <td>{{ $LaporanData[$i]->defisit }}</td>
                            <td class="link">
                                <!-- <a href="/admin/laporan-data/detail/{{ $LaporanData[$i]->id }}" class="link-success">View</a> -->
                                <a href="/admin/laporan-data/edit/{{ $LaporanData[$i]->id }}" class="link-success">Edit</a>
                                <span> | </span>
                                <a href="/admin/laporan-data/delete/{{ $LaporanData[$i]->id }}" class="link-danger">Delete</a>
                                <span> | </span>
                                <a href="/admin/laporan-data-generate-pdf/{{ $LaporanData[$i]->id }}" class="link-danger">Download</a>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <div class="paging">
            {{ $LaporanData->links() }}
        </div>
    </div>
    
@endsection
    