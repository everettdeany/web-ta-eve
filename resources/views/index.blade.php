@extends('layout/main')

@section('title', 'Rekap Data NF COMP')

@section('container')


    <div class="container">
        <div class="row">
            <div class="col-10">
            <!-- <h1 class="mt-3">Hello, world!</h1> -->
            <div class="wrapper-video-data">
            <h1>Dashboard</h1>
            <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>No</td>
                    <td>Data</td>
                    <td>Total Data</td>
                </tr>
                
                    <tr>
                        <td>1</td>
                        <td>Video Data</td>
                        <td>{{ $VideoData }}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Materi Data</td>
                        <td>{{ $MateriData }}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Pengajar Data</td>
                        <td>{{ $PengajarData }}</td>
                    </tr>
            </tbody>
        </table>
    </div>
            </div>
        </div>
    </div>

    
    
@endsection
    