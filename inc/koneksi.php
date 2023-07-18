<?php 
$koneksi = mysqli_connect("localhost","root","","data_pinjaman_bank_abc");
 
// cek koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal " . mysqli_connect_error();
}
 
?>