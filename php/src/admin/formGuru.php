<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

</head>
<body>
<table>
  <tr>
    <th>NIP</th>
    <th>Nama</th>
    <th>Status</th>
    <th>Mata Pelajaran</th>
    <th>Agama</th>
    <th>Jenis Kelamin</th>
    <th>Email</th>
    <th>Nomor Telepon</th>
    <th>Alamat</th>

  </tr>
  <?php
  include 'koneksi.php';
  
  $query="SELECT * FROM guru";
  $result=mysqli_query($connect,$query);

  if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?php echo $row["nip"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["status"]; ?></td>
        <td><?php echo $row["mapel"]; ?></td>
        <td><?php echo $row["agama"]; ?></td>
        <td><?php echo $row["jenis_kelamin"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["no_telp"];?></td>
        <td><?php echo $row["alamat"]; ?></td>
        <td><a href="updateGuru.php?nip=<?php echo $row["nip"]; ?>"> Edit </a></td>
        <td><a href="hapusGuru.php?nip=<?php echo $row['nip']; ?>"> Hapus </a></td>
      </tr>
      <?php
    }
  }
  else{
    echo "0 result";
  }
  ?>
</table>

 
  <form action="prosesGuru.php" method="GET">
	<div class="contact-form">
    <div class="input-fields">
      <h1 align="center"> GURU </h1>
      <input type="text" class="input" placeholder="NIP" name="nip">
      <input type="text" class="input" placeholder="Nama" name="nama">
      <select class="input" name="jenis_kel">
      <option>PRIA</option>
      <option>WANITA</option>
      </select>
      <select class="input" name="agama">
      <option>Islam</option>
      <option>Kristen</option>
      <option>Hindu</option>
      <option>Budha</option>
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
      <input type="text" class="input" placeholder="Nomor Telepon" name="no_telp">
      <input type="text" class="input" placeholder="Email" name="email">
      <input type="text" class="input" placeholder="Status" name="Status">
    </div>
    <div class="msg">
      <textarea placeholder="Alamat" name="alamat"></textarea>
    </div>
    <input type="submit" name="Kirim" value="Kirim" class="btn">
</div>
</form>
</body>
</html>