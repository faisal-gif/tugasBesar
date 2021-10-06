<?php
include 'koneksi.php';

$nip=$_GET['nip'];

$query = "DELETE FROM guru where nip='$nip'";
$result=mysqli_query($connect,$query);
if ($result) {
	header("Location:admin.php?page=guru");
	
	?>
	<a href="homeCurd.php">Lihat tabel</a>
	<?php
}else{
	echo "Data gagal dihapus <br>".mysqli_error($connect);
}

?>