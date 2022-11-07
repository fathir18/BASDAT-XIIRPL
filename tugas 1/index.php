<?php
function asd($tisu, $jumlah, $harga){
    echo"<p>saat aku menggunakan {$tisu}</p>";
    echo"<p>aku gunakan {$jumlah} satu lembar</p>";
    echo"<p>{$jumlah} harganya {$harga}</p>";

}
asd('tisu','satu lembar','2000');

$a = ['saat','aku','menggunakan','tisu'];
$b = ['aku','gunakan','satu','lembar','satu','lembar'];
$c = ['satu','lembar','harganya','2000'];

$panjang1 = count ($a);
$panjang2 = count ($b);
$panjang3 = count ($c);

var_dump($panjang1);
echo "<br />";
var_dump($panjang2);
echo "<br />";
var_dump($panjang3);
echo "<br />";
?>