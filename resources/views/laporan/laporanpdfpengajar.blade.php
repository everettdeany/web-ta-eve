<!DOCTYPE html>

<html>
<head>
    <title>Hi</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    <table>
        <tbody>
            <tr>
                <td>No</td>
                <td>Pengajar</td>
                <td>Bulan</td>
                <td>Tahun</td>
                <td>Saldo / Defisit Bulan Lalu</td>
                <td>Jumlah Durasi</td>
                <td>Saldo / Defisit</td>
            </tr>
            @for($i = 0; $i < count($LaporanData); $i++)
                <tr>
                    <td>{{ ($i + 1) }}</td>
                    <td>{{ $LaporanData[$i]->pengajar->nama }}</td>
                    <td>{{ $LaporanData[$i]->bulan }}</td>
                    <td>{{ $LaporanData[$i]->tahun }}</td>
                    <td>{{ $LaporanData[$i]->defisit_bln_lalu }}</td>
                    <td>{{ $LaporanData[$i]->jml_durasi }}</td> 
                    <td>{{ $LaporanData[$i]->defisit }}</td>
                </tr>
            @endfor
        </tbody>
    </table>

    <p>Tanggal :{{ $date }}</p>
    <p>Nama Pengajar :{{ $pengajar }}</p>
    <p>Bulan :{{ $bulan }}</p>
    <p>Tahun :{{ $tahun }}</p>
    <p>Defisit Bulan Lalu{{ $defisit_bln_lalu }}</p>
    <p>Jumlah Durasi{{ $jml_durasi }}</p>
    <p>Defisit :{{ $defisit }}</p>
    
    <p>Video
    <?php
    foreach ($videos as $video){
        $video_bulan = date('m', strtotime($video->tgl_buat));
        $video_tahun = date('Y', strtotime($video->tgl_buat));

        if (($video_bulan == $bulan) && ($video_tahun == $tahun)){
            echo '<p> ID :'.$video->id.'</p>';
            echo '<p> Judul :'.$video->judul.'</p>';
        }
    }
    ?>
</body>

</html>