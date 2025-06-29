<?php
// Associative array: negara => ibukota
$asean = [
    "Indonesia" => "D.K.I Jakarta",
    "Malaysia" => "Kuala Lumpur",
    "Thailand" => "Bangkok",
    "Singapura" => "Singapura",
    "Brunei" => "Bandar Seri Begawan",
    "Vietnam" => "Hanoi",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Kamboja" => "Phnom Penh",
    "Myanmar" => "Naypyidaw"
];

// Tampilkan menggunakan foreach
echo "<h3>Daftar Negara ASEAN beserta Ibukotanya:</h3>";
echo "<ul>";
foreach ($asean as $negara => $ibukota) {
    echo "<li>$negara - Ibukotanya adalah <strong>$ibukota</strong></li>";
}
echo "</ul>";
?>
