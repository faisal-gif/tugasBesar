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

$query = "UPDATE guru SET nip='$nip',nama='$nama',jenis_kelamin='$jenis_kel',no_telp='$no_telp',email='$email',status='$status' 
,alamat='$alamat',mapel='$mapel',agama='$agama' where nip='$nip'";
$result=mysqli_query($connect,$query);
if ($result) {
	
	header("Location:admin.php?page=guru");
	
}
else{
	echo "gagal Update <br>".mysqli_error($connect);
}

?>