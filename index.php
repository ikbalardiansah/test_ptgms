<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test BackEnd Engineer PT GMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    

  <!-- Dashboard Data Karyawan -->
  <div class="container col-md-6">
		<h1 class="my-4">PT Global Mobility Service Indonesia</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
            <h3> Daftar Karyawan</h3>
            <a href="tambah.php" class="btn btn-sm btn-danger">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Alamat</th>
							<th>Divisi</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                            //Memanggil koneksi Database
							include('koneksi.php'); 

							$datas = mysqli_query($koneksi, "SELECT * FROM karyawan ") or die(mysqli_error($koneksi));
							//Script untuk menampilkan data karyawan

							$no = 1; //Untuk pengurutan nomor

							//Melakukan perulangan
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
                        <!-- Menampilkan Data Karyawan -->
						<td><?= $row['name']; ?></td> 
						<td><?= $row['email']; ?></td>
						<td><?= $row['alamat']; ?></td>
                        <td><?= $row['divisi']; ?></td>
						<td>
                                <!-- Fungsi menu Edit -->
								<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                 <!-- Fungsi menu Hapus dan menampilkan konfirmasi -->
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin hapus?');">Hapus</a>
						</td>
					</tr>
                    <?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>