<?php

// cara mengakses class dan object
class mobil{
    //property 
    var $merk;
    var $roda;
    var $kecepatan;

    //membuat fungsi / operasi berjalan (maju dan mundur)
    function jalan_maju(){
        return "Vroommmm maju";
    }
    function jalan_mundur(){
        return "Vroommmm ciittt mundur";
    }
}

// intansiasi (menginstankan variabel yang menghubungkan dari class keluar class)
$mobil_keren = new mobil();

// set property 
$mobil_keren->merk="ferrari";
$mobil_keren->roda="hitam";
$mobil_keren->kecepatan="400Km";

echo $mobil_keren->merk;
echo "<br />";
echo $mobil_keren->roda;
echo "<br />";
echo $mobil_keren->kecepatan;
echo "<br />";
echo $mobil_keren->jalan_maju();
echo "<br />";
echo $mobil_keren->jalan_mundur();
?>