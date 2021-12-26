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
        <h1>Materi Data</h1>
        @if ( session()->get('roles')=='admin')
        <a href="/admin/add-materi-data" class="btn btn-primary">Add Data</a>
        @endif
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>No</td>
                    <td>Kode</td>
                    <td>Nama</td>
                    <td>Durasi</td>
                    <td>Deskripsi</td>
                    <td>Note</td>
                    <td>Action</td>
                </tr>
                @for($i = 0; $i < count($MateriData); $i++)
                    <tr>
                        <td>{{ ($i + 1) }}</td>
                        <td>{{ $MateriData[$i]->kode }}</td>
                        <td>{{ $MateriData[$i]->nama }}</td>
                        <td>{{ $MateriData[$i]->durasi }} Menit</td>
                        <td>{{ $MateriData[$i]->deskripsi }}</td>
                        <td>{{ $MateriData[$i]->note }}</td>
                        <td class="link">
                            <!-- <a href="/admin/materi-data/detail/{{ $MateriData[$i]->id }}" class="link-success">View</a> -->
                            @if ( session()->get('roles')=='admin')
                            <a href="/admin/materi-data/edit/{{ $MateriData[$i]->id }}" class="link-success">Edit</a>
                            <span> | </span>
                            <a href="/admin/materi-data/delete/{{ $MateriData[$i]->id }}" class="link-danger">Delete</a>
                            @endif
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <div class="paging">
            {{ $MateriData->links() }}
        </div>
    </div>
    
@endsection
    