<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Organisasi</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="kotak">
 <h1>FORM PENDAFTARAN ORGANISASI</h1>
 <form action="./proses_input.php" method="post">
 <label for="id_daftar">Id Daftar</label>
 <input type="text" name="id_daftar" maxlength="100" class="form-input" required>
 <hr>
 <label for="nama_organisasi">Nama Organisasi</label>
 <input type="text" name="nama_organisasi" maxlength="100" class="form-input" required>
 <hr>
 <label for="alamat">Alamat</label>
 <input type="text" name="alamat" maxlength="100" class="form-input" required>
 <hr>
 <label for="tanggal_pendirian">Tanggal Pendirian</label>
 <input type="date" name="tanggal_pendirian" maxlength="100" class="form-input" required>
 <hr>
 <label for="tujuan">Tujuan</label>
 <input type="text" name="tujuan" maxlength="100" class="form-input" required>
 <hr>
 <label for="nama_pendiri">Nama Pendiri</label>
 <input type="text" name="nama_pendiri" maxlength="100" class="form-input" required>
 <hr>
 <label for="jumlah_divisi">Jumlah Divisi</label>
 <input type="number" name="jumlah_divisi" maxlength="100" class="form-input" required>
 <p>
    Mohon Periksa Kembali Sebelum dikirim. Terimakasih!
</p>
 <button type="submit" id="btn-kirim">Kirim</button>
 
</form>
 </div>
</body>
</html>