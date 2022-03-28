<?php
// membuat class kucing
class kucing{
    // atribut
    // visibility : public, private, etc
    public $nama;
    public $umur;
    public $warna;

// membuat constructor
    public function __construct($nama, $umur, $warna){
     $this->nama = $nama;
     $this->umur = $umur;
     $this->warna = $warna;
    }

    // behavior / method
    public function makan(){
        return "{$this->nama} sedang makan";
    }

    public function tidur(){
        return "{$this->nama} sedang tidur";
    }

    public function lari(){
        return "{$this->nama} sedang lari";
    }
}