<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test BackEnd Engineer PT GMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container col-md-6 mt-4">
		<h1>Tabel Data Karyawan</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Data Karyawan
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //Mengambil id karyawan yang ingin diupdate

				//Menampilkan karyawan berdasarkan id
				$data = mysqli_query($koneksi, "SELECT * from karyawan where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				?>
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<!--  Menampilkan nama karyawan -->
						<input type="text" name="name" required="" class="form-control" value="<?= $row['name']; ?>">

						<!-- Syntax untuk menampung id yang ingin diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" value="<?= $row['email']; ?>">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" name="alamat"><?= $row['alamat']; ?></textarea>
					</div>
                    <div class="form-group">
						<label>Divisi</label>
						<input type="text" name="divisi" class="form-control" value="<?= $row['divisi']; ?>">
					</div>
					<button type="submit" class="btn btn-primary my-3" name="submit" value="simpan">Update data Karyawan</button>
				</form>

				<?php

				//Jika tombol submit diklik maka akan melakukan data
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$name = $_POST['name'];
					$email = $_POST['email'];
					$alamat = $_POST['alamat'];
                    $divisi = $_POST['divisi'];

					//Query mengupdate data karyawan di database
					mysqli_query($koneksi, "update karyawan set name='$name', email='$email', alamat='$alamat', divisi='$divisi' where id ='$id'") or die(mysqli_error($koneksi));

					//Menampilkan alert berhasil di update dan kembali ke halaman index.php
					echo "<script>alert('Data Karyawan berhasil diupdate.');window.location='index.php';</script>";
				}



				?>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>