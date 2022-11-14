<?php

//penggunaan array menggunakan for dan foreach
//for perulangan yang akan di ulang sesuai set yang kita atur
// for ($angka = 0; $angka <= 10; $angka++)
// echo "angkanya adalah - $angka<br/>";

//foreach
//foreach mengulang sesuai nilai yg mau diambil (key)
// $warna = array("merah","hijau","biru","kuning");

// foreach ($warna as $variasi){
//     echo "berwarna : $variasi <br>";
// }
$days = ['senin','selasa','rabu','kamis','jumat','sabtu','minggu'];
?>
<html>
<head>
    <title>latihan menggunakan for dan foreach</title>
    <link rel="stylesheet" href="style.css">
<body>
<body>
        <?php
        for ($hari = 0; $hari < count($days); $hari++){

            ?>
        <div class="box">
            <?php echo $days[$hari];?>
        </div>
        <?php } ?>
        <div class="clear"></div>
            <?php foreach($days as $hari_hari) { ?>
            <div class="box2">
                <?php echo $hari_hari;?>
            </div>
            <?php }?>
    </body>
</body>
</head>
</html>
