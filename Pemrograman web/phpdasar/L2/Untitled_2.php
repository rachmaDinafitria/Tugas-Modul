<?php
// Contoh variabel
$a = "";
$b = 0;
$c = "Hello";
$d; // tidak diinisialisasi

// Mengecek variabel $a
echo "<b>Variabel \$a:</b><br>";
echo "isset(\$a): " . (isset($a) ? "true" : "false") . "<br>";
echo "empty(\$a): " . (empty($a) ? "true" : "false") . "<br><br>";

// Mengecek variabel $b
echo "<b>Variabel \$b:</b><br>";
echo "isset(\$b): " . (isset($b) ? "true" : "false") . "<br>";
echo "empty(\$b): " . (empty($b) ? "true" : "false") . "<br><br>";

// Mengecek variabel $c
echo "<b>Variabel \$c:</b><br>";
echo "isset(\$c): " . (isset($c) ? "true" : "false") . "<br>";
echo "empty(\$c): " . (empty($c) ? "true" : "false") . "<br><br>";

// Mengecek variabel $d (belum di-set)
echo "<b>Variabel \$d:</b><br>";
echo "isset(\$d): " . (isset($d) ? "true" : "false") . "<br>";
echo "empty(\$d): " . (empty($d) ? "true" : "false") . "<br>";
?>
