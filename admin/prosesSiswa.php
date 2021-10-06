<?php
include 'koneksi.php';

$nis=$_GET['nis'];
$nama=$_GET['nama'];
$jenis_kel=$_GET['jenis_kel'];
$no_telp=$_GET['no_telp'];
$agama=$_GET['agama'];
$kelas=$_GET['kelas'];
$alamat=$_GET['alamat'];


$sql = "INSERT INTO siswa(nis,nama,jenis_kel,nomor_telepon,agama,kelas,alamat)
		VALUES ('$nis','$nama','$jenis_kel','$no_telp','$agama','$kelas','$alamat')";
$sql2 = "INSERT INTO user(username,password,level)
		VALUES ('$nis','$nis','pengunjung')";

if (mysqli_query($connect,$sql)&&mysqli_query($connect,$sql2)) {
	header("Location:admin.php?page=siswa");
}
else{
	echo "Record gagal ditambah <br>".mysqli_error($connect);
}
mysqli_close($connect);
?>