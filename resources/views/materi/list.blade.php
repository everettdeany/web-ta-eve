<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table-bordered table">
        <tr>
            <td>Kode</td>
            <td>Nama</td>
            <td>idKategori</td>
            <td>Durasi</td>
            <td>Deskripsi</td>
            <td>Note</td>
            <td>Action</td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{ $value->kode }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->idKategori }}</td>
            <td>{{ $value->durasi }}</td>
            <td>{{ $value->deskripsi }}</td>
            <td>{{ $value->note }}</td>
            <td>
                <a href="/materi/update/<?=$value->id?>">Update</a>
                <a href="/materi/delete/<?=$value->id?>">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>