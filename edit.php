<form method="post" action="">
<?php
include "koneksi.php";
$kode=$_GET['kd'];
$edit=mysql_query("SELECT*FROM absensi WHERE id='$kode'");
$data=mysql_fetch_array($edit);
 echo "nama siswa:<input type='text' name='kd' value='".$data['nama_siswa']. "'>";
 echo "kelas:<input type='text' name='kel' value='".$data['kelas']. "'>";
 echo "tanggal:<input type='text' name='tgl' value='".$data['tanggal']. "'>";
 echo "jam ke:<input type='text' name='jam' value='".$data['jam_ke']. "'>";
 echo "keterangan:hadir<input type='radio' name='ket' value='".$data['keterangan']. "'>
                  izin<input type='radio' name='ket' value='".$data['keterangan']. "'>
                  sakit<input type='radio' name='ket' value='".$data['keterangan']. "'>
                  alpa<input type='radio' name='ket' value='".$data['keterangan']. "'>
                  ";
 ?>
 </form>

<?php
if(isset($_POST['update'])){
	$kd=$_POST['kd'];
	$kela=$_POST['kel'];
	$tgl=$_POST['tgl'];
	$jm=$_POST['jam'];
	$kete=$_POST['ket'];
$update=mysql_query("UPDATE absensi SET nmbuku='$nama',jmlbuku='$jml' WHERE kdbuku='$kd'");
if($update){
	echo "Data sudah di rubah <a href='absensi.php'>kembali</a>";
}else{
	echo "Data gagal di ubah";
}
}
?>