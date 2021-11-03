<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="https://objectstorage.ap-tokyo-1.oraclecloud.com/n/nres2v3gd4wj/b/uts/o/admin%2Fstyle.css" > 
    <link rel="stylesheet" href="https://objectstorage.ap-tokyo-1.oraclecloud.com/n/nres2v3gd4wj/b/uts/o/admin%2Fstyles.css">
    <link rel="stylesheet" href="https://objectstorage.ap-tokyo-1.oraclecloud.com/n/nres2v3gd4wj/b/uts/o/admin%2FstyleGuru.css">

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
    $nip=$_GET['nip'];
    $query="SELECT * FROM guru where nip='$nip'";
    $result=mysqli_query($connect, $query);
    ?>
    <table>
      <form method="GET" action="prosesUpdateGuru.php">
       <?php
       while ($row=mysqli_fetch_array($result)) {
           ?>
         <div class="contact-form">
          <div class="input-fields">
            <h1 align="center"> GURU </h1>
            <input type="text" class="input" placeholder="NIP" name="nip"  value="<?php echo $row['nip'] ?>" >
            <input type="text" class="input" placeholder="Nama" name="nama" value="<?php echo $row['nama'] ?>" >
            <select class="input" name="jenis_kel" >
              <option><?php echo $row['jenis_kelamin'] ?></option>
              <option>PRIA</option>
              <option>WANITA</option>
            </select>
            <select class="input" name="agama">
             <option ><?php echo $row['agama'] ?></option>
             <option>Islam</option>
             <option>Kristen</option>
             <option>Hindu</option>
             <option>Budha</option>
           </select>
           <select class="input" name="mapel">
             <option><?php echo $row['mapel'] ?></option>
             <?php
             include 'koneksi.php';
           $query="select * from mapel";
           $result=mysqli_query($connect, $query);
           if (mysqli_num_rows($result)>0) {
               while ($s=mysqli_fetch_assoc($result)) {
                   ?>
                <option><?php echo $s['mapel'] ?></option>
                <?php
               }
           } ?>
          </select>
          <input type="text" class="input" placeholder="Nomor Telepon" name="no_telp" value="<?php echo $row['no_telp'] ?>">
          <input type="text" class="input" placeholder="Email" name="email" value="<?php echo $row['email'] ?>">
          <input type="text" class="input" placeholder="Status" name="Status" value="<?php echo $row['status'] ?>">
        </div>
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