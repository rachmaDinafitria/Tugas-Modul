<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2b</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            text-align: center;
            line-height: 30px;
            margin: 2px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php
$baris = 5; // Jumlah baris
$kolom = 5; // Maksimal kolom (tidak dipakai dalam loop, tapi bisa disesuaikan)

for ($i = 1; $i <= $baris; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<div class='kotak'>$j</div>";
    }
    echo "<div class='clear'></div>"; // Ganti baris
}
?>

</body>
</html>
