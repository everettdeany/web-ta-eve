@extends('layout/main')

@section('title', 'Rekap Data NF COMP | Materi Data')

@section('container')

    <style>
        .wrapper-pengajar-data {
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
    <div class="wrapper-pengajar-data">
        <h1>Pengajar Data</h1>
        @if ( session()->get('roles')=='admin')
        <a href="/admin/add-pengajar-data" class="btn btn-primary">Add Data</a>
        @endif
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr class="head">
                        <td>No</td>
                        <td>Nama</td>
                        <td>Kategori</td>
                        <td>Action</td>
                    </tr>
                    @for($i = 0; $i < count($PengajarData); $i++)
                        <tr class="body">
                            <td>{{ ($i + 1) }}</td>
                            <td>{{ $PengajarData[$i]->nama }}</td>
                            <td>{{ $PengajarData[$i]->kategori }}</td>
                            <td class="link">
                                <a href="/admin/pengajar-data/detail/{{ $PengajarData[$i]->id }}" class="link-success">View</a>
                                @if ( session()->get('roles')=='admin')
                                <span> | </span>
                                <a href="/admin/pengajar-data/edit/{{ $PengajarData[$i]->id }}" class="link-success">Edit</a>
                                <span> | </span>
                                <a href="/admin/pengajar-data/delete/{{ $PengajarData[$i]->id }}" class="link-danger">Delete</a>
                                @endif
                            </td>
                        </tr>
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
    
        <div class="paging" style="margin-left:40px">
            {{ $PengajarData->links() }}
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#datapengajar").DataTable()
        });
    </script>

    
@endsection
    