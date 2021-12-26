<form action="/materi/create_post" method="POST">
@csrf
  <label for="fname">Kode:</label><br>
  <input type="text" id="kode" name="kode"><br>
  <label for="lname">Nama:</label><br>
  <input type="text" id="nama" name="nama"><br>
  <label for="lname">Durasi:</label><br>
  <input type="text" id="durasi" name="durasi"><br>
  <label for="lname">Deskripsi:</label><br>
  <input type="text" id="deskripsi" name="deskripsi"><br>
  <label for="lname">Note:</label><br>
  <input type="text" id="note" name="note"><br>
  <button type="submit">BUAT</button>
</form>