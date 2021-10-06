<?php
include 'koneksi.php';

$nis=$_GET['nis'];
$nip=$_GET['nip'];
$mapel=$_GET['mapel'];
$t1=$_GET['t1'];
$t2=$_GET['t2'];
$t3=$_GET['t3'];
$t4=$_GET['t4'];
$rataT=($t1+$t2+$t3+$t4)/4;
$uts=$_GET['uts'];
$uas=$_GET['uas'];
$rataUl=($uts+$uas)/2;
$sql = "INSERT INTO nilai(nip,nis,mapel,tugas1,tugas2,tugas3,tugas4,rataTugas,uas,uts,rataUlang)
		VALUES ('$nip','$nis','$mapel','$t1','$t2','$t3','$t4','$rataT','$uts','$uas','$rataUl')";
if (mysqli_query($connect,$sql)) {
	header("Location:guru.php?page=Tabelnilai");
}
else{
	echo "Record gagal ditambah <br>".mysqli_error($connect);
}
mysqli_close($connect);
?>