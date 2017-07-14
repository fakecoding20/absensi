<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
Nama Siswa<input type="text" name="nsiswa"><br>
Kelas<input type="text" name="kls"><br>
Tanggal <input type="text" name="tgl"><br>
Jam ke<input type="text" name="jam"><br>
			 Izin <input type="radio" name="ket" value="izin">
			 Sakit <input type="radio" name="ket" value="sakit">
			 Alpa<input type="radio" name="ket" value="alpa"><br>

<input type="submit" name="krm" value="kirim">

	
</form>

</body>
</html>
<?php
include "koneksi.php";
if (isset($_POST['krm'])) {
	# code...
	$nsis=$_POST['nsiswa'];
	$kelas=$_POST['kls'];
	$tanggal=$_POST['tgl'];
	$jamke=$_POST['jam'];
	$kete=$_POST['ket'];

	$input=mysql_query("INSERT INTO absensi(nama_siswa,kelas,tanggal,jam_ke,keterangan) VALUES ('$nsis','$kelas','$tanggal','$jamke','$kete')");
	if($input){
		echo "<script>alert('data berhasil disimpan');</script>";
	}
	else{
		echo "<script>alert('gagal disimpan');</script>";
	}
}

?>
<center><font size="30">Tabel Absensi</font></center>
<?php
include "koneksi.php";

    $buku=mysql_query("SELECT*FROM absensi ORDER BY nama_siswa asc");

	# code...
	echo"<center><table border=1 bgcolor=white></center>";
	echo"
	<tr>
	<td>Id</td>
	<td>Nama Siswa</td>
	<td>Kelas</td>
	<td>Tanggal</td>
	<td>Jam Ke</td>
	<td>keterangan</td>
	<td>Hapus</td>
	<td>Ubah</td>

	</tr>
	<tr>";
	while ($data=mysql_fetch_array($buku)) {
		echo"<td>".$data['id']."</td>";
		echo"<td>".$data['nama_siswa']."</td>";
		echo"<td>".$data['kelas']."</td>";
		echo"<td>".$data['tanggal']."</td>";
		echo"<td>".$data['jam_ke']."</td>";
		echo"<td>".$data['keterangan']."</td>";
		echo "<td><a href='hapus.php?kd=".$data['id']."'>Hapus data</a></td>";
		echo "<td><a href='edit.php?kd=".$data['id']."'>edit</a></td>";
	echo"</tr>";
	

}
?>
