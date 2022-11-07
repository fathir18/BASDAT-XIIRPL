<?php
// cara membuat function
function ngoding(){

}
// function bisa di kategorikan menggunakan public, protected, private
class vscode{
    public function coding_php(){

    }
}

// mencoba buat fungsi
function sapa_teman(){
    echo "<h1>Hai Gais<h1>";
    echo "<h3>Ketemu lagi sama gw<h3>";
}

// mencoba membuat fungsi yang ada parameter
function teman($teman_gw, $umur){
    echo "<h2>Hey Disini GW Sama {$teman_gw}</h2>";
    echo "<h2>Umur Dia Segini {$umur}</h2>";
} 

// cara panggil fungsi
// tuliskan nama fungsinya 
sapa_teman();

// jika fungsi menggunakan parameter, harus di tulis saat panggilannya
teman("A", 20);

// mencoba membuat fungsi mengguanakan percabankan
function kasir($nama, $jumlah){
    echo "<h3> Hai {$nama}, terima kasih telah berkunjung!!</h3>";
    echo "<h3> Dan jangan lupa kembali lagi!!</h3>";

    //
    if ($jumlah > 10){
        echo "<h3>Gookil, kamu dapat mobil karena telah berkunjung sebanyak {$jumlah} Kali </h3>";
    }
}

// panggil 
kasir("A","20");

?>