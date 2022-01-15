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
        <h1>All Laporan Data</h1>
        
        <!-- Cetak -->
        <form action="/admin/laporan-data-generate-pdf-all" method="get">         
            <div class="fswtele">
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <td>
                                Tanggal Mulai
                                <input type="date" class="form-control" name="tanggal_mulai">
                            </td>
                            <td>
                                Tanggal Akhir
                                <input type="date" class="form-control" name="tanggal_akhir">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-primary">Cetak</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>

        <div class="paging">
            {{ $LaporanData->links() }}
        </div>
    </div>
    
@endsection
    