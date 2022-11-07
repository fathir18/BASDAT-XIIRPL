<?php

class komputer{
    public $merk;
    public $prosesor;
    public $memory;

    public function beli_komputer(){
        return "beli komputer baru";
    }
}

class laptop extends komputer{
    public function lihat_spek(){
        return "merk: $this->merk, prosesor";
    }
}
//instansiasi
//membuat objek baru dari 
$laptop_baru = new laptop();
//isi property 
$laptop_baru->$merk = "asus";
$laptop_baru->$prosesor = "AMD Ryzen";
$laptop_baru->$memory = "1 terabyte";

//panggil functionnya
echo $laptop_baru->beli_komputer();
echo "<br/>";
echo $laptop_baru->lihat_spek();


?>