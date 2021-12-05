<?php
session_start();
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM user where username='$username' and password='$password'";
$result=mysqli_query($connect,$query);


$cek=mysqli_fetch_assoc($result);


if ($cek['level']=="admin") {
	header("Location:admin/admin.php");
}
elseif ($cek['level']=="guru") {
	header("Location:guru/guru.php");
}
elseif ($cek['level']=="pengunjung") {
	$_SESSION['user'] = $username;
	$_SESSION['status'] = 'Login';
	header("Location:siswa/siswa.php");
}
else{
	header("Location:index.php");
}
?>