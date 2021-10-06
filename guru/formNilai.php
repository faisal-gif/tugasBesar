<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

</head>
<body>

 
  <form action="prosesNilai.php" method="GET">
	<div class="contact-form">
    <div class="input-fields">
      <h1 align="center"> Nilai </h1>
     <select class="input" name="nip">
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
     
      
      <input type="number" class="input" placeholder="Tugas 1" name="t1">
      <input type="number" class="input" placeholder="Tugas 2" name="t2">
      <input type="number" class="input" placeholder="Tugas 3" name="t3">
      <input type="number" class="input" placeholder="Tugas 4" name="t4">
      <input type="number" class="input" placeholder="UTS" name="uts">
      <input type="number" class="input" placeholder="UAS" name="uas">
    
    <input type="submit" name="Kirim" value="Kirim" class="btn">
</div>
</form>
</body>
</html>