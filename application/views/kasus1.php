 <?php
      $no = 1;
      $list = mysqli_query($koneksi, "SELECT * FROM declination");
      $len=count($list);
    $avg=["min"=>0,"sec"=>0,"deg"=>0];
    $sum=["min"=>0,"sec"=>0,"deg"=>0];
?>


<?php
      while ($row = mysqli_fetch_array($list)){
        $sum["min"]=$sum["min"]+$row["min"];
        $sum["deg"]=$sum["deg"]+$row["deg"];
        $sum["sec"]=$sum["sec"]+$row["sec"];
        $avg["min"]=$sum["min"]/$len;
        $avg["deg"]=$sum["deg"]/$len;
        $avg["sec"]=$sum["sec"]/$len;
        if(is_float($avg["min"])){
        $bulat=round($avg["min"],1);
        $a=explode(".",$bulat);
        $hasilkoma=$a[1]/10;
        $hasilkoma=($hasilkoma*60)+$avg["sec"];
        }
      ?>

    ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['ksng']; ?></td>
      <td><?= $row['waktu']; ?></td>
      <td><?= $row['deg']; ?></td>
      <td><?= $row['min']; ?></td>
      <td><?= $row['sec']; ?></td>
    </tr>

  <?php } ?>