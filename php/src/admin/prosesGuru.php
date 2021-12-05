<?php
include 'koneksi.php';

$nip=$_GET['nip'];
$nama=$_GET['nama'];
$jenis_kel=$_GET['jenis_kel'];
$no_telp=$_GET['no_telp'];
$email=$_GET['email'];
$status=$_GET['Status'];
$alamat=$_GET['alamat'];
$mapel=$_GET['mapel'];
$agama=$_GET['agama'];

$sql = "INSERT INTO guru(nip,nama,jenis_kelamin,no_telp,email,status,alamat,mapel,agama)
		VALUES ('$nip','$nama','$jenis_kel','$no_telp','$email','$status','$alamat','$mapel','$agama')";
		$sql2 = "INSERT INTO user(username,password,level)
		VALUES ('$nip','$nip','guru')";
if (mysqli_query($connect,$sql)&&mysqli_query($connect,$sql2)) {
	header("Location:admin.php?page=guru");
}
else{
	echo "Record gagal ditambah <br>".mysqli_error($connect);
}
mysqli_close($connect);
?>