<?php

// ARRAY 1 DIMENSI
// $arr = ["adam", "jauhar", "firdaus", "jordan", "skuy"];

// for ($i = 0; $i < 5; $i++) {
//     echo "nama " . ($i + 1) . " adalah : " . $arr[$i] . "\n";
// }

// echo "\n";


// // ARRAY MULTIDIMENSI
// $multidimensi = [
//     ["adam", "jauhar", "firdaus"],
//     ["20", "22", "21"],
//     ["3", "1", "2"]
// ];

// for ($j = 0; $j < 3; $j++) {
//     echo "nama saya " . $multidimensi[0][$j] .
//          ", umur saya " . $multidimensi[1][$j] .
//          ", saya anak ke- " . $multidimensi[2][$j] . "\n";
// }

// echo "\n";


// // FUNGSI LUAS PERSEGI PANJANG
// echo "\nFUNGSI MENGHITUNG LUAS PERSEGI PANJANG\n\n";

// echo "masukan nilai panjang persegi panjang : ";
// $panjang = trim(fgets(STDIN));

// echo "masukan nilai lebar persegi panjang : ";
// $lebar = trim(fgets(STDIN));

// $hasil = $panjang * $lebar;

// if ($hasil > 0) {
//     echo "luas dari persegi panjang adalah : $hasil\n";
// } else {
//     echo "hasil luas dari persegi panjang adalah negatif\n";
// }

// echo "\nMENGHITUNG RATA-RATA TINGGI BADAN SISWA\n";


// // RATA-RATA TINGGI BADAN
// $tinggiBadan = [150, 170, 162, 166, 158, 140, 178, 157, 186, 160];
// $length = count($tinggiBadan);
// $sum = 0;

// for ($k = 0; $k < $length; $k++) {
//     $sum += $tinggiBadan[$k];
// }

// $rata = $sum / $length;
// echo "rata-rata tinggi badan siswa adalah : $rata\n";


// // STRING MANIPULATION
// echo "\nmasukan kalimat untuk mengetahui banyaknya karakter: \n";
// $stringAwal = trim(fgets(STDIN));

// $lengthString = strlen($stringAwal);
// echo "jumlah karakter: $lengthString\n";

// $upperCase = strtoupper($stringAwal);
// echo "kalimat kapital: $upperCase\n";

// $lowerCase = strtolower($stringAwal);
// echo "kalimat kecil: $lowerCase\n";

// $nilai = array(10, 20, 30, 40, 70, 50, 60);
// echo "nilai paling tinggi adalah : " .max($nilai) ."\n";
// echo "nilai paling kecil adalah : " .min($nilai) ."\n";

// $dataMahasiswa = [];

function ketik($pesan) {
    echo $pesan;
    return trim(fgets(STDIN));
}

// while (true) {
//     echo "\n=== MENU CRUD MAHASISWA ===\n";
//     echo "1. Tambah Data (Create)\n";
//     echo "2. Lihat Data (Read)\n";
//     echo "3. Ubah Data (Update)\n";
//     echo "4. Hapus Data (Delete)\n";
//     echo "5. Keluar\n";
//     echo "Pilih menu: ";

//     $pilihan = trim(fgets(STDIN));

//     // ============================
//     // CREATE
//     // ============================
//     switch ($pilihan) {
//         case 1:
//         $nama = ketik("Masukkan nama mahasiswa: ");
//         $nilai = ketik("Masukkan nilai mahasiswa: ");

//         $dataMahasiswa[] = [
//             "nama" => $nama,
//             "nilai" => $nilai
//         ];

//         echo "Data berhasil ditambahkan!\n";
//     break;


//     // READ
//      case 2: 
//         echo "\n=== DATA MAHASISWA ===\n";

//         if (count($dataMahasiswa) == 0) {
//             echo "Data masih kosong!\n";
//         } else {
//             for ($i = 0; $i < count($dataMahasiswa); $i++) {
//                 echo "data ke- ". ($i + 1) . " Nama: " . $dataMahasiswa[$i]["nama"]. ", Nilai: " . $dataMahasiswa[$i]["nilai"] . "\n";
//             }
//             // foreach ($dataMahasiswa as $i => $mhs) {
//             //     echo "data ke- "($i + 1) . ". Nama: " . $mhs["nama"] . 
//             //          " | Nilai: " . $mhs["nilai"] . "\n";
//             // }
//         }
//     break;


//     // UPDATE

//     case 3:
//         if (count($dataMahasiswa) == 0) {
//             echo "Tidak ada data untuk diubah!\n";
//             continue;
//         }

//         $index = ketik("Pilih nomor data yang ingin diubah: ") - 1;

//         if (!isset($dataMahasiswa[$index])) {
//             echo "Nomor tidak valid!\n";
//             continue;
//         }

//         $namaBaru = ketik("Masukkan nama baru: ");
//         $nilaiBaru = ketik("Masukkan nilai baru: ");

//         $dataMahasiswa[$index]["nama"] = $namaBaru;
//         $dataMahasiswa[$index]["n00ilai"] = $nilaiBaru;

//         echo "Data berhasil diupdate!\n";
//     break;

 
//     // DELETE

//     case 4:
//         if (count($dataMahasiswa) == 0) {
//             echo "Tidak ada data untuk dihapus!\n";
//             continue;
//         }

//         $index = ketik("Pilih nomor data yang ingin dihapus: ") - 1;

//         if (!isset($dataMahasiswa[$index])) {
//             echo "Nomor tidak valid!\n";
//             continue;
//         }

//         array_splice($dataMahasiswa, $index, 1);

//         echo "Data berhasil dihapus!\n";
//     break;


//     // EXIT

//     case 5:
//         echo "Program selesai!\n";
//     exit;
    


//     // INPUT SALAH

//     default:
//         echo "Pilihan tidak valid!\n";
//     break;
// }

// }

$data = [];

while (true) {
    echo "\n=== MENU DATA MAHASISWA ===\n";
    echo "1. Input Data Mahasiswa\n";
    echo "2. Lihat Data Mahasiswa\n";
    echo "3. Keluar dari program\n";
    $menu = ketik("Pilih menu : ");
    switch ($menu) {
        case 1:
            $nama = ketik("masukan nama kamu: ");
$umur = ketik("masukan umur kamu: ");
$universitas = ketik("masukan nama universitas kamu: ");

$data = [
    "nama" => $nama,
    "umur" => $umur,
    "universitas" => $universitas
    ];
            echo "Data berhasil ditambahkan!\n";
    }
 if (count($data) == 0) {
            echo "Data masih kosong!\n";
        } else {
            for ($i = 0; $i < count($data); $i++) {
                echo "data ke- ".  ($i + 1) . " Nama: " . $data[$i]["nama"]. ", Umur: " . $data[$i]["umur"] . ", Universitas :" . $data[$i]["universitas"] . "\n";
            }

        }
}
?>
