<!DOCTYPE html>

<html>

<head>

    <title>Hi</title>

</head>

<body>

    <h1>{{ $title }}</h1>

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