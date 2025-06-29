<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2b</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            margin: 2px;
            float: left;
        }
        .genap {
            background-color: silver;
        }
        .ganjil {
            background-color: navy;
            color: white;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php
$baris = 5;
$kolom = 5;

for ($i = 1; $i <= $baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        // Jika baris genap, kasih class genap, kalau ganjil, class ganjil
        $kelas = ($i % 2 == 0) ? "genap" : "ganjil";
        echo "<div class='kotak $kelas'>$j</div>";
    }
    echo "<div class='clear'></div>"; // Biar pindah ke baris baru
}
?>

</body>
</html>
