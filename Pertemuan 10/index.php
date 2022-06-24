<!DOCTYPE html>
<html>
  <head>
    <title>Praktikum 10</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;700&family=Montserrat+Alternates:wght@600&display=swap" rel="stylesheet">
    <script src="script.js"></script>
  </head>
  <style>
    .counter-bg{
      width: 100px;
      height: 100px;
      padding: 10px;
      background-color: white;
      border-radius: 20px;
      box-shadow: 3px 3px 8px #b6a9a9, -5px -5px 10px #fff;
    }

  </style>
  <body>
    </div>
    </td>
    <td>
    <center>
    <h4 style="font-family: 'Montserrat'; font-size: 20pt;">
      <center>Halo!😁 kamu adalah pengunjung ke:</center>
    </h4>
    <div class="counter-bg">
      <div class="counter-inside">
      <?php 
      //buka counter mode baca
      $filecounter = "counter.txt";
      $fl = fopen($filecounter, "r+");

      //ambil nilai hit dan simpan dalam variabel $hit
      $hit = fread($fl, filesize($filecounter));

      //tampilkan
      echo("<br><font face = verdana size = 25pt color = #fc735b><b>");
      echo($hit);
      echo("</b></font>");
      //tutup file counter.txt
      fclose($fl);

      //buka file counter.txt mode tulis
      $fl = fopen($filecounter, "w+");

      //tambahkan nilai hit dengan 1
      $hit = $hit + 1;

      //simpan
      fwrite($fl, $hit, strlen($hit));

      //tutup
      fclose($fl);
    ?>
    </div>
    <br><br>
  </center>
  </body>
</html>