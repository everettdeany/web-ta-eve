<!DOCTYPE html>

<html>
<head>
<style>
    #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
    }
</style>
<title>Laporan Data</title>
</head>
<body>
    <div style="text-align: right;">
        <img src="adminlte/dist/img/nf comp.jpg" width="50px">
    </div>
    <div style="text-align: center;">
        <h1>Laporan</h1>
    </div>
    <p>Tanggal : {{ $tanggal_mulai }} s.d. {{ $tanggal_akhir }}</p>
    <table id="customers">
        <thead>
            <tr>
                <th>No</th>
                <th>Pengajar</th>
                <th>Materi</th>
                <th>Bulan</th>
                <th>Total</th>
                <th>Saldo / Defisit</th>
            </tr>
        </thead>
        <tbody>
            @for($i = 0; $i < count($VideoData); $i++)
                @if (isset($VideoData[$i+1]))
                    @if ($tanggal_mulai <= $VideoData[$i]->tgl_buat && $VideoData[$i]->tgl_buat <= $tanggal_akhir)
                        @if ($VideoData[$i]->pengajar->nama == $VideoData[$i+1]->pengajar->nama)
                            {{ dd("test"); }}
                            <tr>
                                <td>{{ ($i + 1) }}</td>
                                <td>{{ $VideoData[$i]->pengajar->nama }}</td>
                                <td>{{ $VideoData[$i]->materi->nama }}</td>
                                <td>{{ $VideoData[$i]->tgl_buat }}</td>
                                <td>{{ $VideoData[$i]->durasi_jam }}</td>
                                <td>{{ $VideoData[$i]->judul }}</td> 
                            </tr>
                        @endif
                    @endif
                @endif
            @endfor
        </tbody>
    </table>
</body>
</html>