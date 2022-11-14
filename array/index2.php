<?php

$warnaterang = ['kuning','hijau','pink'];
$warnagelap = ['hitam','abu','coklat'];

//gabungkan 2 array tersebut manjadi 1
$warna_warna = array_merge($warnaterang,$warnagelap);

//array merge bisa ditambahkan lebih dari 2
$semua_warna = array_merge(
    $warnaterang,
    $warnagelap,
    ['Magneta','cyan','hijau kelabu']
);

//unpacking untuk mengekstrak array 
$list_buah_lokal = ['mangga','rambutan'];
$list_buah = ['kurma','anggur', $list_buah_lokal,'kismis'];

//explode array berfungsi memecah belah string lalu diubah ke dalam array

//explode ada 2 parameter: delimiter(pemiso n), string sasaran (sasaran yang akan kita pecah menjadi array)

$siswa = "andi budi dono kasino indro";
// var_dump(explode(" ", $siswa));

//impload fungsi kebalikannya explode
//impload ada 2 parameter : glue (penggabung), array sasaran(sasaran yang akan kita gabung menjadi string)

$siswa_pintar = ['sefa','agus','novan',]; //array
$siswa_jago = implode(' ',$siswa_pintar); //string



?>