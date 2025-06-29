<?php
// Array multidimensi: kota, makanan khas, dan harga
$dataKota = [
    ["kota" => "Padang", "makanan" => "Rendang", "harga" => 25000],
    ["kota" => "Bandung", "makanan" => "Batagor", "harga" => 15000],
    ["kota" => "Yogyakarta", "makanan" => "Gudeg", "harga" => 20000],
    ["kota" => "Surabaya", "makanan" => "Rujak Cingur", "harga" => 22000],
    ["kota" => "Medan", "makanan" => "Bika Ambon", "harga" => 18000]
];

// Menampilkan dalam bentuk tabel
echo "<h3>Daftar Makanan Khas Kota di Indonesia</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>Nama Kota</th>
        <th>Makanan Khas</th>
        <th>Harga</th>
      </tr>";

$no = 1;
foreach ($dataKota as $kota) {
    echo "<tr>
            <td>$no</td>
            <td>{$kota['kota']}</td>
            <td>{$kota['makanan']}</td>
            <td>Rp " . number_format($kota['harga'], 0, ',', '.') . "</td>
          </tr>";
    $no++;
}

echo "</table>";
?>
