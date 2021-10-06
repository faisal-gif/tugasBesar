<!DOCTYPE html>
<html lang="en">
<head>
  
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="styleGuru.css">
  <link rel="stylesheet" type="text/css" href="styleTabel.css">
  
</head>
<body>

  <div class="wrapper">
    <div class="sidebar">
      <h2>Sekolah</h2>
      <ul>
        <li><a href="admin.php?page=guru">Guru</a></li>
        <li><a href="admin.php?page=siswa">Siswa</a></li>
        <li><a href="admin.php?page=Logout">logout</a></li>

      </ul> 
      
    </div>
    <div class="main_content">
      <div class="header">Form Update</div>  
      <?php
      include 'koneksi.php';
      $nis=$_GET['nis'];
      $query="SELECT * FROM siswa where nis='$nis'";
      $result=mysqli_query($connect,$query);
      ?>
      <table>
        <form method="GET" action="prosesUpdateSiswa.php">
         <?php 
         while ($row=mysqli_fetch_array($result)) {

           ?>
           <div class="contact-form">
            <div class="input-fields">
              <h1 align="center"> Siswa </h1>
              <input type="text" class="input" placeholder="NIS" name="nis"  value="<?php echo $row['nis'] ?>" >
              <input type="text" class="input" placeholder="Nama" name="nama" value="<?php echo $row['nama'] ?>" >
              <select class="input" name="jenis_kel" >
                <option><?php echo $row['jenis_kel'] ?></option>
                <option>P</option>
                <option>L</option>
              </select>
              <select class="input" name="agama">
               <option ><?php echo $row['agama'] ?></option>
               <option>Islam</option>
               <option>Kristen</option>
               <option>Hindu</option>
               <option>Budha</option>
             </select>
             <select class="input" name="kelas">
              <option><?php echo $row['Kelas'] ?></option>
              <?php
              include 'koneksi.php';
              $query="select * from kelas";
              $result=mysqli_query($connect,$query);
              if (mysqli_num_rows($result)>0) {
                while ($s=mysqli_fetch_assoc($result)) {
                  ?>
                  
                  <option><?php echo $s['Kelas'] ?></option>
                  <?php
                }
              }
              ?>
            </select>
            <input type="text" class="input" placeholder="Nomor Telepon" name="nomor_telepon" value="<?php echo $row['nomor_telepon'] ?>">
            
            <div class="msg">
              <textarea placeholder="Alamat" name="alamat"><?php echo $row['alamat'] ?></textarea>
            </div>
            <input type="submit" name="Kirim" value="Kirim" class="btn">
            <?php
          }
          ?>
        </div>
      </div>
    </form>
  </body>
  </html>