<!DOCTYPE html>
<html>
<head>
    <title>Rangkaian Angka Terurut</title>
</head>
<body>

<?php
if (isset($_GET['angka'])) {
    $angka = (int)$_GET['angka'];

    for ($i = $angka; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }

} else {
    echo "<p>Silakan masukkan parameter <strong>'angka'</strong> pada URL. Contoh: <code>?angka=10</code></p>";
}
?>

</body>
</html>
