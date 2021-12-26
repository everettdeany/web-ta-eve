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

        svg {
            width: 15px; 
        }

        .paging nav div:nth-child(1) {
            display: none;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="wrapper-video-data">
        <h1>Video Data</h1>
        @include('message')
        @if ( session()->get('roles')=='admin') 
        <a href="/admin/add-video-data" class="btn btn-primary">Add Data</a>
        @endif 
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>No</td>
                    <td>Judul</td>
                    <td>Durasi</td>
                    <td>Link</td>
                    <td>Tanggal Dibuat</td>
                    <td>Action</td>
                </tr>
                @for($i = 0; $i < count($VideoData); $i++)
                    <tr>
                        <td>{{ ($i + 1) }}</td>
                        <td>{{ $VideoData[$i]->judul }}</td>
                        <td>{{ $VideoData[$i]->durasi_jam }}</td>
                        <td>{{ $VideoData[$i]->link }}</td>
                        <td>{{ $VideoData[$i]->tgl_buat }}</td>
                        <td class="link">
                            <a href="/admin/video-data/detail/{{ $VideoData[$i]->id }}" class="link-success">View</a>
                            @if ( session()->get('roles')=='admin')
                            <span> | </span>
                            
                            <a href="/admin/video-data/edit/{{ $VideoData[$i]->id }}" class="link-success">Edit</a>
                            <span> | </span>
                            <a href="/admin/video-data/delete/{{ $VideoData[$i]->id }}" class="link-danger">Delete</a>
                            @endif
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <div class="paging">
            {{ $VideoData->links() }}
        </div>
    </div>
    
@endsection
    