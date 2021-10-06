<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

</head>
<body>
 <table >
  <tr>
    <th>NIS</th>
    <th>Nama</th>
    <th>Agama</th>
    <th>Jenis Kelamin</th>
    <th>Kelas</th>
    <th>Nomor Telepon</th>
    <th>Alamat</th>

  </tr>
  <?php
  include 'koneksi.php';
  
  $query="SELECT * FROM siswa";
  $result=mysqli_query($connect,$query);

  if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?php echo $row["nis"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["agama"]; ?></td>
        <td><?php echo $row["jenis_kel"]; ?></td>
        <td><?php echo $row["Kelas"]; ?></td>
        <td><?php echo $row["nomor_telepon"];?></td>
        <td><?php echo $row["alamat"]; ?></td>
        <td><a href="updateSiswa.php?nis=<?php echo $row["nis"]; ?>"> Edit </a></td>
        <td><a href="hapusSiswa.php?nis=<?php echo $row['nis']; ?>"> Hapus </a></td>
      </tr>
      <?php
    }
  }
  else{
    echo "0 result";
  }
  ?>
</table>

  <form action="prosesSiswa.php" method="GET">
	<div class="contact-form">
    <div class="input-fields">
      <h1 align="center"> SISWA </h1>
      <input type="text" class="input" placeholder="NIS" name="nis">
      <input type="text" class="input" placeholder="Nama" name="nama">
      <select class="input" name="jenis_kel">
      <option value="P">P</option>
      <option value="L">L</option>
      </select>
      <input type="text" class="input" placeholder="Nomor Telepon" name="no_telp">
     <select class="input" name="agama">
      <option>Islam</option>
      <option>Kristen</option>
      <option>Hindu</option>
      <option>Budha</option>
      </select>
      <select class="input" name="kelas">
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
    </div>
    <div class="msg">
      <textarea placeholder="Alamat" name="alamat"></textarea>
    </div>
    <input type="submit" name="Kirim" value="Kirim" class="btn">
</div>
</form>
</body>
</html>