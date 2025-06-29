<!DOCTYPE html>
<html>
<head>
    <title>Deteksi Bilangan</title>
</head>
<body>

<h3>Pengulangan untuk mencari kategori bilangan :</h3>
<ul>
<?php
// Fungsi untuk cek bilangan prima
function isPrima($angka) {
    if ($angka <= 1) return false;
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) return false;
    }
    return true;
}

// Loop dari 1 sampai 20
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        if (isPrima($i)) {
            echo "<li>Angka $i adalah bilangan genap sekaligus bilangan prima</li>";
        } else {
            echo "<li>Angka $i adalah bilangan genap</li>";
        }
    } else {
        if (isPrima($i)) {
            echo "<li>Angka $i adalah bilangan ganjil sekaligus bilangan prima</li>";
        } else {
            echo "<li>Angka $i adalah bilangan ganjil</li>";
        }
    }
}
?>
</ul>

</body>
</html>
