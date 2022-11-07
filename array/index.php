<?php

// $siswa = [
//     //keynya bisa int/string
//     1=>'arjuna',
//     2=>'nitta',
//     3=>'ahmad sandi'
// ];

// echo "siapa yang paling ganteng? {$siswa[1]}";

//array multidimension
//ada array di dalam array
// $togel = [
//     [1, 2, 3, 4, 5],       //0
//     [6, 7, 8, 9, 22],      //1
//     [12, 15, 13, 14, 51],  //2
//     [19, 21, 31, 47, 35]   //3
//     //0, 1, 2, 3, 4
// ];
// //caara memanggil array
// echo $togel[2][4];

//array push
//array push berguna untuk menerima 2 parameter
//parameter1 : untuk target
//parameter2 : untuk nilai yang akan dimasukkan

$sayur = ['bayem','kangkung','sawi'];
$buah = ['pisang','kelapa','coklat'];

//cara pertama untuk menambahkan item
array_push($buah,'timun');  

//cara yang kedua
$sayur[] = 'labu';

echo $buah[3];
echo $sayur[3];
?>

