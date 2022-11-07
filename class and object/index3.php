<?php
// class smkjp1

class smkjp1{
    //property
    var $guru;
    var $murid;

    //function berdiri
    function berdiri(){
        return "berdiri dengan tegap";
    }

    function berlari(){
        return "berlari 1000 langkah";
    }
}
//instansiasi
$sekolah = new smkjp1();

//contoh
$jp = new smkjp1();

//isi property
$sekolah->guru = "Pak Saipul";
$sekolah->murid = "Ahmad K";

//contoh isi
$jp->guru = "Pak Saipul";
$jp->murid = "Ahmad K";

//tampilkan dari objek $sekolah
echo $sekolah->guru," ",$sekolah->berdiri();
echo "<br />";
echo $sekolah->murid," ",$sekolah->berlari();
echo "<br />";

//contoh tampil
echo $sekolah->murid," ",$jp->berdiri();
echo "<br />";
echo $sekolah->guru," ",$jp->berlari();
echo "<br />";



?>
