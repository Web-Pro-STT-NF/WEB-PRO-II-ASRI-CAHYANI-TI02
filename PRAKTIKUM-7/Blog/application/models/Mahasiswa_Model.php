<?php
class Mahasiswa_model extends CI_Model {
 public $id;
 public $nama;
 public $nim;
 public $gender;
 public $ipk;
public function predikat(){
 $predikat = ($this->ipk >= 3.75)?"Cumlaude" : "Baik";
return $predikat;
}
}
?>