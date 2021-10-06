<?php 
session_start();
if($_SESSION['status']=='Login'){
 

include "koneksi.php";
?>


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
            <li><a href="#">Nilai</a></li>
            <li><a href="logout.php">logout</a></li>
            </ul> 
        
    </div>
    <div class="main_content">
<?php
$a=$_SESSION['user'];
$query1="SELECT * FROM user inner join siswa on user.username=siswa.nis where username=$a";
$query=mysqli_query($connect,$query1);
$c=mysqli_fetch_assoc($query);

?>
    

        <div class="header">Selamat datang <?php echo $c['nama']; ?> </div>
    
       
      
        
 
    <table>
        <tr>
    <th>NIS</th>
    <th>NAMA</th>
    <th>Mapel</th>
    <th>Tugas 1</th>
    <th>Tugas 2</th>
    <th>Tugas 3</th>
    <th>Tugas 4</th>
    <th>Rata-rata Tugas</th>
    <th>UTS</th>
    <th>UTS</th>
    <th>Rata-rata Ulangan</th>

  </tr>
         <?php
  
include 'koneksi.php';
  
  $query="SELECT * FROM nilai inner join siswa on nilai.nis=siswa.nis join user on siswa.nis=user.username where siswa.nis=$a";
  $result=mysqli_query($connect,$query);

  if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?php echo $row["nis"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["mapel"]; ?></td>
        <td><?php echo $row["tugas1"]; ?></td>
        <td><?php echo $row["tugas2"]; ?></td>
        <td><?php echo $row["tugas3"]; ?></td>
        <td><?php echo $row["tugas4"]; ?></td>
        <td><?php echo $row["rataTugas"]; ?></td>
        <td><?php echo $row["uts"];?></td>
        <td><?php echo $row["uas"]; ?></td>
        <td><?php echo $row["rataUlang"]; ?></td>
        
      
      </tr>
      <?php
    }
  }
  else{
    echo "0 result";
  }
}
  ?>

    </table>
    
      
    </div>
</div>

</body>
</html>