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
         
            <li><a href="?page=guru">Guru</a></li>
            <li><a href="?page=siswa">Siswa</a></li>
            <li><a href="?page=Logout">logout</a></li>

        </ul> 
        
    </div>
    <div class="main_content">
        <div class="header">Selamat datang admin</div>  
        
        <?php
    if(isset($_GET['page'])){
      $menu = $_GET['page'];
        switch ($menu) {
          case "guru":
            include "formGuru.php";
            break;
            case "siswa":
            include "formSiswa.php";
            break;
             case "Logout":
            include "logout.php";
            break;
              }
   }
    ?>
    
      
    </div>
</div>

</body>
</html>