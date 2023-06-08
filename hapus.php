<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test BackEnd Engineer PT GMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
   
  <?php				
			include 'koneksi.php'; //Menghubungkan file database
			$id = $_GET['id']; //Menampung id data karyawan

			//Query Hapus data karyawan di Database
			$datas = mysqli_query($koneksi, "delete from karyawan where id ='$id'") or die(mysqli_error($koneksi));

			//Menampilkan alert data berhasil dihapus dan redirect ke menu awal
			echo "<script>alert('data berhasil dihapus.');window.location='index.php';</script>";
	?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>