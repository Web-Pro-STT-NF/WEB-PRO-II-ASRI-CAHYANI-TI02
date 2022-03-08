<?php
    define('PHI',3.14);
    define('DBNAME','db_mahasiswa');
    define('DBSERVER','localhost');
    define('DBUSER','ica');
    define('DBPASS','1234');

$jari = 10;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;
    echo'Luas Lingkaran dengan Jari '.$jari.':'.$luas;
    echo '<br/>kelilingnya :'.$kll;

    echo '<hr>';

    echo 'Nama databasenya :'.DBNAME. '<br>';
    echo 'Server Database :'.DBSERVER. '<br>';
    echo 'Nama user database :'.DBUSER. '<br>';
    echo 'Password database :'.DBPASS. '<br>';
?>