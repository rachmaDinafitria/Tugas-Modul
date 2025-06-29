<!DOCTYPE html>
<html>
<head>
    <title>Latihan 3d - Faktorial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 24px;
            background-color: white;
            color: black;
            padding: 20px;
        }
        .hasil {
            border: 2px solid #3366cc;
            padding: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>

<div class="hasil">
<?php
// Fungsi faktorial
function hitungFaktorial($angka) {
    $faktorial = 1;
    for ($i = 1; $i <= $angka; $i++) {
        $faktorial *= $i;
    }
    return $faktorial;
}

// Contoh bilangan
$nilai = 5;
$hasil = hitungFaktorial($nilai);

// Menampilkan hasil
echo "Faktorial dari $nilai = $hasil";
?>
</div>

</body>
</html>
