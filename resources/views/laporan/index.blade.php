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

        <div class="fswtele">
            <table class="table table-striped table-hover">
                <tbody>
                    <tr style="text-align: center;">
                        <td>
                            <a href="/admin/all-laporan-data" class="btn-lg btn-primary">All</a>
                        </td>
                        <td>
                            <a href="/admin/perpengajar-laporan-data" class="btn-lg btn-primary">Per Pengajar</a>
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
    