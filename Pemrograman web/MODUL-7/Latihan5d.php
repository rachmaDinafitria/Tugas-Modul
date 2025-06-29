<!DOCTYPE html>
<html>
<head>
    <title>Input Angka</title>
</head>
<body>
    <h1>Masukkan Jumlah Angka dan Baris</h1>

    <form action="" method="post">
        Jumlah Angka: <input type="number" name="angka" required><br><br>
        Jumlah Baris: <input type="number" name="baris" required><br><br>
        <button type="submit">Tampilkan</button>
    </form>

    <hr>

    <?php
    // Periksa apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST["angka"];
        $baris = $_POST["baris"];

        $nomor = 1;

        echo "<h2>Output:</h2>";
        for ($i = 1; $i <= $baris; $i++) {
            for ($j = 1; $j <= $angka; $j++) {
                echo $nomor . " ";
                $nomor++;
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>
