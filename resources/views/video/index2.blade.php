@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Video Data')

@section('container')

    <style>
        .wrapper-video-data {
            padding: 2.5% 2.5%;
        }

        a {
            margin-bottom: 10px;
        }
    </style>

    <div class="wrapper-video-data">
        <h1>Video Data</h1>
        <a href="/admin/add-video-data" class="btn btn-primary">Add Data</a>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="datavideo" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Pengajar</th>
                                            <th>Materi</th>
                                            <th>Durasi</th>
                                            <th>Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i = 0; $i < 25; $i++)
                                            @foreach($VideoData as $video)
                                                <tr>
                                                    <td>{{ $video->judul }}</td>
                                                    <td>{{ $video->judul }}</td>
                                                    <td>{{ $video->durasi_jam }}</td>
                                                    <td>{{ $video->link }}</td>
                                                </tr>
                                            @endforeach
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#datavideo").DataTable()
        });
    </script>
@endsection
    
