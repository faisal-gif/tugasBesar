<table>
  <tr>
    <th>NIS</th>
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
  
  $query="SELECT * FROM nilai";
  $result=mysqli_query($connect,$query);

  if (mysqli_num_rows($result)>0) {
    while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?php echo $row["nis"]; ?></td>
        <td><?php echo $row["mapel"]; ?></td>
        <td><?php echo $row["tugas1"]; ?></td>
        <td><?php echo $row["tugas2"]; ?></td>
        <td><?php echo $row["tugas3"]; ?></td>
        <td><?php echo $row["tugas4"]; ?></td>
        <td><?php echo $row["rataTugas"]; ?></td>
        <td><?php echo $row["uts"];?></td>
        <td><?php echo $row["uas"]; ?></td>
        <td><?php echo $row["rataUlang"]; ?></td>
        
        <td><a href="updateForm.php?id=<?php echo $row["nip"]; ?>"> Edit </a></td>
        <td><a href="hapus.php?id=<?php echo $row['id']; ?>"> Hapus </a></td>
      </tr>
      <?php
    }
  }
  else{
    echo "0 result";
  }
  ?>
</table>