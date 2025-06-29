<!DOCTYPE html>
<html>
<head>
    <title>Latihan 3c - Pangkat</title>
    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            font-size: 24px;
            color: black;
            padding: 20px;
        }
        .hasil {
            border: 2px solid #3366cc;
            display: inline-block;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="hasil">
<?php
// Fungsi untuk menghitung pangkat
function hitungPangkat($angka, $pangkat) {
    $hasil = 1;
    for ($i = 1; $i <= $pangkat; $i++) {
        $hasil *= $angka;
    }
    return $hasil;
}

// Contoh penggunaan
$bilangan = 5;
$pangkat = 4;
$hasil = hitungPangkat($bilangan, $pangkat);

// Tampilkan hasil ke layar
echo "$bilangan pangkat $pangkat = $hasil";
?>
</div>

</body>
</html>
