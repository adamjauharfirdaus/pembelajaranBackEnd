<?php

echo "\n=== PERKENALAN === \n \n";
function namaSaya() {
    echo "Adam Jauhar Firdaus";
}
$umur = 19;
$mahasiswa = "Teknik Informatika Universitas Pamulang \n";
echo "halo, nama saya ", namaSaya(), "\numur saya ", $umur, "\nsaat ini saya merupakan mahasiswa ", $mahasiswa;

echo "\n=== OPERASI ARITMATIKA SEDERHANA ===\n";
function tambah($a, $b) {
    return $a + $b;
}

function kurang($a, $b) {

    return $a - $b;
}

function kali($a, $b) {
    return $a * $b;
}

function bagi($a, $b) {
    return $a / $b;

}


echo "\ntentukan nilai dari variable a : ";
$angka1 = trim(fgets(STDIN));
echo "tentukan nilai dari nilai variable b : ";
$angka2 = trim(fgets(STDIN));


echo "\nHasil pertambahan dari angka ",$angka1 ," dan ", $angka2 , " adalah : ", tambah($angka1, $angka2) , "\n";
echo "Hasil pengurangan dari angka ",$angka1 ," dan ", $angka2 , " adalah : ", kurang($angka1, $angka2) , "\n";
echo "Hasil pembagian dari angka ",$angka1 ," dan ", $angka2 , " adalah : ", kali($angka1, $angka2) , "\n";
if ($angka2 != 0 ) {
    echo "Hasil pembagian dari angka ",$angka1 ," dan ", $angka2 , " adalah : ", bagi($angka1, $angka2) , "\n";
} else {
     echo "pembagian dengan angka 0 tidak diperbolehkan ! \n";
}
    




echo "\n=== PERHITUNGAN NILAI MATAKULIAH (NILAI DIBAWAH 75 WAJIB REMEDIAL ===\n";
echo "\nberapa nilai mata kuliah algoritma pemrograman kamu? : ";

$nilai_algo = trim(fgets(STDIN));
if ($nilai_algo >= 75) {
    echo "selamat, kamu lulus \n";
} else {
    echo "maaf, kamu tidak lulus !! \n";
}


$deret = 1; 
do {
    echo "deret ke - " , $deret . "\n";
    $deret++;
} while ($deret < 21);


echo "\nketikan nilai untuk mengecek apakah nilai untuk variable a : ";

$var_a = trim(fgets(STDIN));
$hasil_a = $var_a % 2;
if ($hasil_a == 0) {
    echo "\nbilangan termasuk genap";
} else {
    echo "\nbilangan termasuk ganjil";
}



?>




