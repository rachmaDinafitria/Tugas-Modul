<?php
// Langkah 1: Array awal dengan 5 negara ASEAN
$negara = ["Indonesia", "Malaysia", "Thailand", "Singapura", "Brunei"];

// Langkah 2: Tampilkan sebagai list HTML
echo "<h3>Daftar Negara ASEAN (Awal):</h3>";
echo "<ul>";
foreach ($negara as $n) {
    echo "<li>$n</li>";
}
echo "</ul>";

// Langkah 3: Tambahkan 3 elemen baru ke array
$negara[] = "Vietnam";
$negara[] = "Laos";
$negara[] = "Filipina";

// Langkah 4: Tampilkan ulang seluruh isi array setelah ditambahkan
echo "<h3>Daftar Negara ASEAN (Setelah Ditambahkan):</h3>";
echo "<ul>";
foreach ($negara as $n) {
    echo "<li>$n</li>";
}
echo "</ul>";
?>
