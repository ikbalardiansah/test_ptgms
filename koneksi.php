<?php

$server 	= "localhost";
$username	= "root";
$password	= "";
$db 		= "test"; //Nama Database
$koneksi = mysqli_connect($server, $username, $password, $db); 


//untuk cek jika koneksi gagal ke database
if(mysqli_connect_errno()) {
	echo "Koneksi gagal : ".mysqli_connect_error();
}

?>