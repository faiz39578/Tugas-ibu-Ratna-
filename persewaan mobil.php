<!DOCTYPE html>
<html>
<head>
  <title>Program Persewaan Mobil</title>
</head>
<body>
  <h2>Program Persewaan Mobil</h2>

  <form method="post">
    <label>Pilih Jenis Mobil:</label><br>
    <select name="mobil">
      <option value="Avanza">Avanza</option>
      <option value="Xenia">Xenia</option>
      <option value="Innova">Innova</option>
      <option value="Alphard">Alphard</option>
      <option value="Fortuner">Fortuner</option>
    </select><br><br>

    <label>Lama Sewa (hari):</label><br>
    <input type="number" name="hari" required><br><br>

    <input type="submit" name="hitung" value="Hitung Total Biaya">
  </form>

  <?php
  if (isset($_POST['hitung'])) {
      $mobil = $_POST['mobil'];
      $hari = $_POST['hari'];

      switch ($mobil) {
          case "Avanza":
              $sewa = 300000;
              $asuransi = 15000;
              break;
          case "Xenia":
              $sewa = 300000;
              $asuransi = 15000;
              break;
          case "Innova":
              $sewa = 500000;
              $asuransi = 25000;
              break;
          case "Alphard":
              $sewa = 750000;
              $asuransi = 30000;
              break;
          case "Fortuner":
              $sewa = 700000;
              $asuransi = 25000;
              break;
          default:
              $sewa = 0;
              $asuransi = 0;
              break;
      }

      $total = ($sewa + $asuransi) * $hari;

      echo "<h3>Rincian Biaya</h3>";
      echo "<table border='1' cellpadding='5'>";
      echo "<tr><th>Jenis Mobil</th><th>Biaya Sewa/Hari</th><th>Asuransi/Hari</th><th>Lama Sewa</th><th>Total</th></tr>";
      echo "<tr>";
      echo "<td>$mobil</td>";
      echo "<td>Rp " . number_format($sewa, 0, ',', '.') . "</td>";
      echo "<td>Rp " . number_format($asuransi, 0, ',', '.') . "</td>";
      echo "<td>$hari Hari</td>";
      echo "<td><b>Rp " . number_format($total, 0, ',', '.') . "</b></td>";
      echo "</tr>";
      echo "</table>";
  }
  ?>
</body>
</html>
