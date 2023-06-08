<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test BackEnd Engineer PT GMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

  <!-- Dashboard Tambah Data Karyawan -->
  <div class="container col-md-6 mt-4">
		<h1>Tabel Data Karyawan</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Data Karyawan
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" name="alamat"></textarea>
					</div>
                    <div class="form-group">
						<label>Divisi</label>
						<input type="text" name="divisi" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary my-3" name="submit" value="simpan">Tambah Karyawan</button>
				</form>

				<?php
				include('koneksi.php');
				
				//Melakukan pengecekan jika tombol subnit diklik maka akan menjalankan perintah simpan data
				if (isset($_POST['submit'])) {
					//Menampung data dari inputan
					$nama = $_POST['nama'];
					$email = $_POST['email'];
					$alamat = $_POST['alamat'];
                    $divisi = $_POST['divisi'];

					//Syntax untuk menambahkan data karyawan ke Database
					$datas = mysqli_query($koneksi, "insert into karyawan (name, email, alamat, divisi)values('$nama', '$email', '$alamat', '$divisi')") or die(mysqli_error($koneksi));

					//Menampilkan alert berhasil dan kembali ke halaman index.php
					echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
				}
				?>
			</div>
		</div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>