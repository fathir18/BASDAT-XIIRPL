<?php
// class SMK JP1

class SMKJPONE{
    //property
    public $kepsek;
    public $guru;
    public $murid;

    ///function berdiri
    function kepsek(){
        return "Kepsek Kita Adalah";
    }
    function guru(){
        return "Guru Kita Adalah ";
    }
    function murid(){
        return "Murid Kita Adalah";
    }
}
// intansiasi
$sekolah = new SMKJPONE();

// isi property
$sekolah->kepsek = "Pak Lilik"; 
$sekolah->guru = "Pak Saiful"; 
$sekolah->murid = "Hasan";

//tampilkan 
echo $sekolah->kepsek()," ",$sekolah->kepsek;
echo "<br/>";
echo $sekolah->guru()," ",$sekolah->guru;
echo "<br/>";
echo $sekolah->murid()," ",$sekolah->murid;

?>