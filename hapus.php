<?php
include "koneksi.php";
$kode=$_GET["kd"];
$hapus=mysql_query("DELETE FROM absensi WHERE id='$kode'");
if($hapus){
	echo "Data Terhapus <a href='absen.php'> Kembali</a>";
}else{
	echo"Data gagal Terhapus <a href='absen.php'>Kembali</a>";
}

?>