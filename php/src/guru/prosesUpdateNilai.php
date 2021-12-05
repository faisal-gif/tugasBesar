<?php
include 'koneksi.php';

$nip=$_GET['nip'];
$nis=$_GET['nis'];
$mapel=$_GET['mapel'];
$t1=$_GET['t1'];
$t2=$_GET['t2'];
$t3=$_GET['t3'];
$t4=$_GET['t4'];
$rataT=($t1+$t2+$t3+$t4)/4;
$uts=$_GET['uts'];
$uas=$_GET['uas'];
$rataUl=($uts+$uas)/2;

$query = "UPDATE nilai SET nip='$nip',nis='$nis',mapel='$mapel',tugas1='$t1',tugas2='$t2',tugas3='$t3' 
,tugas4='$t4',uts='$uts',uas='$uas',rataTugas='$rataT',rataUlang='$rataUl' where nip='$nip'";
$result=mysqli_query($connect,$query);
if ($result) {
	
	header("Location:guru.php?page=Tabelnilai");
	
}
else{
	echo "gagal Update <br>".mysqli_error($connect);
}

?>