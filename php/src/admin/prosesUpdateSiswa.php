<?php
include 'koneksi.php';

$nis=$_GET['nis'];
$nama=$_GET['nama'];
$jenis_kel=$_GET['jenis_kel'];
$no_telp=$_GET['nomor_telepon'];
$kelas=$_GET['kelas'];
$alamat=$_GET['alamat'];
$agama=$_GET['agama'];

$query = "UPDATE siswa SET nis='$nis',nama='$nama',jenis_kel='$jenis_kel',nomor_telepon='$no_telp',alamat='$alamat',Kelas='$kelas',agama='$agama' 
where nis='$nis'";
$result=mysqli_query($connect,$query);
if ($result) {
	
	header("Location:admin.php?page=siswa");
	
}
else{
	echo "gagal Update <br>".mysqli_error($connect);
}

?>