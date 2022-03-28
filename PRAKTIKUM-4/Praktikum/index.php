<?php
include_once "Kucing.php";
// membuat objek / instance objek kucing
$garfield = new Kucing("Garfield", 5, "Oren");
$odang = new Kucing("Odang", 10, "Belang Hitam");

echo $garfield->nama, "<br>";

echo $garfield->makan(),"<br>";
echo $garfield->tidur(),"<br>";
echo $garfield->lari(),"<br>";

echo $odang->makan(),"<br>";
echo $odang->tidur(),"<br>";
echo $odang->lari()
?>