<?php
include 'koneksi.php';

$nis=$_GET['nis'];

$query = "DELETE FROM siswa where nis='$nis'";
$result=mysqli_query($connect,$query);
if ($result) {
	header("Location:admin.php?page=siswa");
	

}else{
	echo "Data gagal dihapus <br>".mysqli_error($connect);
}

?>