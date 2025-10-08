<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Ulang SMK Pasti Bisa</title>
</head>
<body>
    <h2>Pendaftaran Ulang SMK "Pasti Bisa"</h2>

    <form method="post" action="">
        <label>Nama Siswa:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Nomor Induk:</label><br>
        <input type="text" name="nis" required><br><br>

        <label>Pilih Kelas:</label><br>
        <select name="kelas" required>
            <option value="">-- Pilih Kelas --</option>
            <option value="1">Kelas 1</option>
            <option value="2">Kelas 2</option>
            <option value="3">Kelas 3</option>
        </select><br><br>

        <input type="submit" name="proses" value="Hitung Biaya">
    </form>

    <?php
    if (isset($_POST['proses'])) {
        $nama  = $_POST['nama'];
        $nis   = $_POST['nis'];
        $kelas = $_POST['kelas'];

        // Inisialisasi variabel biaya
        $uang_gedung = 0;
        $spp = 0;
        $seragam = 0;

        // Struktur SWITCH CASE untuk menentukan biaya berdasarkan kelas
        switch ($kelas) {
            case '1':
                $uang_gedung = 800000;
                $spp = 90000;
                $seragam = 125000;
                break;

            case '2':
                $uang_gedung = 500000;
                $spp = 100000;
                $seragam = 100000;
                break;

            case '3':
                $uang_gedung = 500000;
                $spp = 75000;
                $seragam = 100000;
                break;

            default:
                echo "<p>Kelas tidak valid.</p>";
                exit;
        }

        $total = $uang_gedung + $spp + $seragam;

        echo "<hr>";
        echo "<h3>Data Pembayaran</h3>";
        echo "Nama Siswa: <b>$nama</b><br>";
        echo "Nomor Induk: <b>$nis</b><br>";
        echo "Kelas: <b>$kelas</b><br><br>";

        echo "Uang Gedung: Rp " . number_format($uang_gedung, 0, ',', '.') . "<br>";
        echo "SPP Bulan Juli: Rp " . number_format($spp, 0, ',', '.') . "<br>";
        echo "Seragam: Rp " . number_format($seragam, 0, ',', '.') . "<br>";
        echo "<hr>";
        echo "<b>Total Pembayaran: Rp " . number_format($total, 0, ',', '.') . "</b>";
    }
    ?>
</body>
</html>
