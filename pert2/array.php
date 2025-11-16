<?php

// $data = ["toto", -2, "UNPAM"];
// echo $data[1] . "\n";

// $data2 = [
//     ["Adam", 21, "UNPAM"],
//     ["Rani", 35, "Pamulang"],
//     ["Lukman", 40, "UNPAM"]
//     ];

//     for ($i = 0; $i < 3; $i++) {
//         echo "data ke- " . ($i + 1) . " | Nama: " . $data2[$i][0] .
//         " | umur: " . $data2[$i][1] . " | Universitas: " . $data2[$i][2] . "\n";
//     }

$mhsw = [
    ["Adam", 21],
    ["Rani", 40],
    ["Lukman", 40]
];
$gender = ["Laki-laki", "Perempuan", "Laki-laki"];

    for ($j = 0; $j < count($mhsw); $j++) {

$asosiatif = [
    "nama" => $mhsw[$j][0],
    "umur" => $mhsw[$j][1],
    "universitas" => "Pamulang"
];
    echo "\nData ke- " . ($j + 1) . ": \n";
    echo "Nama: " . $asosiatif["nama"] . "\n";
    echo "Umur: " . $asosiatif["umur"] . "\n";
    echo "Universitas: " . $asosiatif["universitas"] . "\n";
    echo "Gender: " . $gender[$j] . "\n";
    }

// echo $asosiatif["nama"];

?>

