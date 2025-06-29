<?php
// Array associatif perusahaan teknologi
$perusahaan = [
    [
        "nama" => "Apple Inc.",
        "negara" => "Amerika Serikat",
        "didirikan" => 1976,
        "pendiri" => "Steve Jobs, Steve Wozniak",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"
    ],
    [
        "nama" => "Google",
        "negara" => "Amerika Serikat",
        "didirikan" => 1998,
        "pendiri" => "Larry Page, Sergey Brin",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
    ],
    [
        "nama" => "Microsoft",
        "negara" => "Amerika Serikat",
        "didirikan" => 1975,
        "pendiri" => "Bill Gates, Paul Allen",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg"
    ],
    [
        "nama" => "Samsung",
        "negara" => "Korea Selatan",
        "didirikan" => 1938,
        "pendiri" => "Lee Byung-chul",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg"
    ],
    [
        "nama" => "Huawei",
        "negara" => "Tiongkok",
        "didirikan" => 1987,
        "pendiri" => "Ren Zhengfei",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/0/02/Huawei_wordmark_2019.svg"
    ],
    [
        "nama" => "Amazon",
        "negara" => "Amerika Serikat",
        "didirikan" => 1994,
        "pendiri" => "Jeff Bezos",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg"
    ],
    [
        "nama" => "Meta (Facebook)",
        "negara" => "Amerika Serikat",
        "didirikan" => 2004,
        "pendiri" => "Mark Zuckerberg",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/0/05/Meta_Platforms_Inc._logo.svg"
    ],
    [
        "nama" => "Tesla",
        "negara" => "Amerika Serikat",
        "didirikan" => 2003,
        "pendiri" => "Elon Musk, JB Straubel",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/b/bd/Tesla_Motors.svg"
    ],
    [
        "nama" => "Xiaomi",
        "negara" => "Tiongkok",
        "didirikan" => 2010,
        "pendiri" => "Lei Jun",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/2/29/Xiaomi_logo.svg"
    ],
    [
        "nama" => "Intel",
        "negara" => "Amerika Serikat",
        "didirikan" => 1968,
        "pendiri" => "Robert Noyce, Gordon Moore",
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/c/c9/Intel-logo.svg"
    ]
];

// Tampilkan dalam tabel
echo "<h2>Daftar Perusahaan Teknologi Dunia</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>Nama Perusahaan</th>
        <th>Negara</th>
        <th>Tahun Berdiri</th>
        <th>Pendiri</th>
        <th>Logo</th>
      </tr>";

$no = 1;
foreach ($perusahaan as $p) {
    echo "<tr>
            <td>$no</td>
            <td>{$p['nama']}</td>
            <td>{$p['negara']}</td>
            <td>{$p['didirikan']}</td>
            <td>{$p['pendiri']}</td>
            <td><img src='{$p['gambar']}' width='60'></td>
          </tr>";
    $no++;
}

echo "</table>";
?>
