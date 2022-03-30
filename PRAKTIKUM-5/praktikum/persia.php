<?php

class Persia extends Kucing{
    public $nama;
    public $warna;
    public $energi;

    public function __construct($nama, $warna, $energi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->energi = $energi;
    }

    public function persia_makan(){
        $this->energi += 10;
        return "{$this->nama} sedang makan dan energinya bertambah 10";
    }
    public function persia_tidur(){
        $this->energi -= 5;
        return "{$this->nama} sedang tidur dan energinya berkurang 5";
    }
}