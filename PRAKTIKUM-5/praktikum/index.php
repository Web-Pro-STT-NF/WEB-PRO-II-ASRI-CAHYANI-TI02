<?php
include_once "Kucing.php";
include_once "Persia.php";

$kucing1 = new Kucing("ucup", 3, 40);

echo "Nama : " . $kucing1->getNama() . "<br>";
echo "Umur : " . $kucing1->getUmur() . " tahun <br>";
$kucing1->setEnergi(100);
echo "Energi : " . $kucing1->getEnergi() . "<br>";


echo $kucing1->makan() . "<br>";
echo $kucing1->tidur() . "<br>";
echo $kucing1->lari() . "<br>";

echo "Energi sekarang : " . $kucing1->getEnergi(). "<br>";

$persia1 = new Persia("kitty", "Oranye", 140);

echo "Nama : " . $persia1->nama . "<br>";
echo "Umur : " . $persia1->warna . "<br>";
echo "Energi : " . $persia1->energi . "<br>";

echo $persia1->makan();
