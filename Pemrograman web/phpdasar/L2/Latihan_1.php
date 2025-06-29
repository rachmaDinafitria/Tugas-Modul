<!DOCTYPE html>
<html>
<head>
    <title>Latihan 3a</title>
    <style>
        /* CSS Class yang akan digunakan */
        .teksStyling {
            font-size: 28px;
            font-family: Arial, sans-serif;
            color: #1A0547;
            font-style: italic;
            font-weight: bolder;
        }
    </style>
</head>
<body>

<?php
// User-defined function untuk mengubah style tulisan
function ubahStyle($text, $className) {
    return "<p class='$className'>$text</p>";
}

// Variabel input
$tulisan = "Hello World! Here I come!";
$kelasCss = "teksStyling";

// Pemanggilan fungsi dan output ke layar
echo ubahStyle($tulisan, $kelasCss);
?>

</body>
</html>
