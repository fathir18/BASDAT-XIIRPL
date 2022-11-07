<?php

$temanfavorit = ['haekal', 'fahmi', 'abu', 'agung', 'haikal','rangga', 'adit', 'mamat', 'redi', 'fahrul',];
echo "<br/>";
echo "10 teman favorit";
echo "<br/>";
print_r($temanfavorit);
echo "<br/>";

array_push($temanfavorit, "pratama","adi");
echo "<br/>";
echo "2 teman favorit";
echo "<br />";
echo $temanfavorit [0];
echo "<br />";
echo $temanfavorit [5];
echo "<br/>";
echo "total semua teman";
echo "<br />";
print_r($temanfavorit);

