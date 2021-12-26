<?php
 var_dump($data);
?>
<form action="/materi/create_post" method="POST">
@csrf
@foreach($data as $value)

  <label for="lname">Nama:</label><br>
  <input type="text" id="nama" name="nama" value="{{ $value->nama }}"><br>

  <label for="lname">Durasi:</label><br>
  <input type="text" id="durasi" name="durasi" value="{{ $value->durasi }}"><br>

  <label for="lname">Deskripsi:</label><br>
  <input type="text" id="deskripsi" name="deskripsi" value="{{ $value->deskripsi }}"><br>

  <label for="lname">Note:</label><br>
  <input type="text" id="note" name="note" value="{{ $value->note }}"><br>
@endforeach
  <button type="submit">BUAT</button>
</form>