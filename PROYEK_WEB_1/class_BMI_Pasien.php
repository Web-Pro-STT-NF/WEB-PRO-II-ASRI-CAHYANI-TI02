<?php
include_once 'class_Pasien.php';
include_once 'class_BMI.php';
class bmiPasien extends pasien  {
    use bmi;
    public $bmi;
    function __construct ($nama_pasien, $kode, $tgl_periksa, $email, $jk, $bb, $tb, $status){
        parent :: __construct ($nama_pasien, $kode, $tgl_periksa, $email, $jk, $bb, $tb, $status);
        $this -> bb = $bb;
        $this -> tb = $tb;
        $this -> bmi = $this -> nilai();
    }
}

?>