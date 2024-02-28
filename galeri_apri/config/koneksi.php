<?php
$koneksi = mysqli_connect("localhost","root","","gallery_db");

if (mysqli_connect_errno()) {
	echo "Koneksi database gagal :" . mysqli_connect_error();
}

?>
