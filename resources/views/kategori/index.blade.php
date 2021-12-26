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
        <h1>Kategori Data</h1>
        @if ( session()->get('roles')=='admin')
        <a href="/admin/add-kategori-data" class="btn btn-primary">Add Data</a>
        @endif
        <div class="fswtele">
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Deskripsi</td>
                        <td>Action</td>
                    </tr>
                    @for($i = 0; $i < count($KategoriData); $i++)
                        <tr>
                            <td>{{ ($i + 1) }}</td>
                            <td>{{ $KategoriData[$i]->nama }}</td>
                            <td>{{ $KategoriData[$i]->deskripsi }}</td>
                            <td class="link">
                                <!-- <a href="/admin/kategori-data/detail/{{ $KategoriData[$i]->id }}" class="link-success">View</a> -->
                                @if ( session()->get('roles')=='admin')
                                <a href="/admin/kategori-data/edit/{{ $KategoriData[$i]->id }}" class="link-success">Edit</a>
                                <span> | </span>
                                <a href="/admin/kategori-data/delete/{{ $KategoriData[$i]->id }}" class="link-danger">Delete</a>
                                @endif
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <div class="paging">
            {{ $KategoriData->links() }}
        </div>
    </div>
    
@endsection
    