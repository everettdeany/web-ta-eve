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
        <h1>Per Pengajar Laporan Data</h1>
        <a href="/admin/add-laporan-data" class="btn btn-primary">Cetak</a>
        <div class="fswtele">
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <td>
                            Pengajar
                            <select class="form-control" name="pengajar">
                                <option>1</option>
                            </select>
                        </td>
                        <td>
                            Tanggal Mulai
                            <input type="date" class="form-control" name="tanggal_mulai">
                        </td>
                        <td>
                            Tanggal Akhir
                            <input type="date" class="form-control" name="tanggal_akhir">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="paging">
            {{ $LaporanData->links() }}
        </div>
    </div>
    
@endsection
    