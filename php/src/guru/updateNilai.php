<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://objectstorage.ap-tokyo-1.oraclecloud.com/n/nres2v3gd4wj/b/uts/o/admin%2Fstyle.css">
    <link rel="stylesheet" href="https://objectstorage.ap-tokyo-1.oraclecloud.com/n/nres2v3gd4wj/b/uts/o/admin%2Fstyles.css">
    <link rel="stylesheet" href="https://objectstorage.ap-tokyo-1.oraclecloud.com/n/nres2v3gd4wj/b/uts/o/admin%2FstyleGuru.css">
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Sekolah</h2>
        <ul>
           <li><a href="guru.php?page=nilai">Input Nilai</a></li>
            <li><a href="guru.php?page=Tabelnilai">Nilai Siswa</a></li>
            <li><a href="guru.php?page=Logout">logout</a></li>
        </ul> 
        
    </div>
    <div class="main_content">
        <div class="header">Form Update</div>
          <?php
  include 'koneksi.php';
  $nis=$_GET['nis'];
  $query="SELECT * FROM nilai where nis='$nis'";
  $result=mysqli_query($connect,$query);
  ?>
  <table>
<form method="GET" action="prosesUpdateNilai.php">
  <?php 
  while ($row=mysqli_fetch_array($result)) {

  ?>
<form action="prosesNilai.php" method="GET">
  <div class="contact-form">
    <div class="input-fields">
      <h1 align="center"> Nilai </h1>
     <select class="input" name="nip">
      <option><?php echo $row['nip'] ?></option>
      <?php
      include 'koneksi.php';
      $query="select * from guru";
      $result=mysqli_query($connect,$query);
      if (mysqli_num_rows($result)>0) {
      while ($s=mysqli_fetch_assoc($result)) {
      ?>

       <option><?php echo $s['nip'] ?></option>
      <?php
      }
      }
      ?>
      </select>

     <select class="input" name="nis">
      <option><?php echo $row['nis'] ?></option>
      <?php
      include 'koneksi.php';
      $query="select * from siswa";
      $result=mysqli_query($connect,$query);
      if (mysqli_num_rows($result)>0) {
      while ($s=mysqli_fetch_assoc($result)) {
      ?>
       <option><?php echo $s['nis'] ?></option>
      <?php
      }
      }
      ?>
      </select>
      <select class="input" name="mapel">
     <option><?php echo $row['mapel'] ?></option>
      
      <?php
      include 'koneksi.php';
      $query="select * from mapel";
      $result=mysqli_query($connect,$query);
      if (mysqli_num_rows($result)>0) {
      while ($s=mysqli_fetch_assoc($result)) {
      ?>
       <option><?php echo $s['mapel'] ?></option>
      <?php
      }
      }
      ?>
      </select>
     
      
      <input type="number" class="input" placeholder="Tugas 1" name="t1" value="<?php echo $row['tugas1'] ?>">
      <input type="number" class="input" placeholder="Tugas 2" name="t2" value="<?php echo $row['tugas2'] ?>">
      <input type="number" class="input" placeholder="Tugas 3" name="t3" value="<?php echo $row['tugas3'] ?>">
      <input type="number" class="input" placeholder="Tugas 4" name="t4" value="<?php echo $row['tugas4'] ?>">
      <input type="number" class="input" placeholder="UTS" name="uts" value="<?php echo $row['uts'] ?>">
      <input type="number" class="input" placeholder="UAS" name="uas" value="<?php echo $row['uas'] ?>">
    
    <input type="submit" name="Kirim" value="Kirim" class="btn">
    <?php
}
?>
</div>
</div>
</form>
</body>
</html>