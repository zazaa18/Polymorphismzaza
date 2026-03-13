<?php

abstract class BangunDatar {
    abstract public function hitungLuas();
}

class Persegi extends BangunDatar {
    public $sisi;

    public function __construct($sisi){
        $this->sisi = $sisi;
    }

    public function hitungLuas(){
        return $this->sisi * $this->sisi;
    }
}

class Lingkaran extends BangunDatar {
    public $jari;

    public function __construct($jari){
        $this->jari = $jari;
    }

    public function hitungLuas(){
        return 3.14 * $this->jari * $this->jari;
    }
}

class Segitiga extends BangunDatar {
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas(){
        return 0.5 * $this->alas * $this->tinggi;
    }
}

$persegi = new Persegi(4);
$lingkaran = new Lingkaran(7);
$segitiga = new Segitiga(6,8);

echo "Luas Persegi : " . $persegi->hitungLuas() . "<br>";
echo "Luas Lingkaran : " . $lingkaran->hitungLuas() . "<br>";
echo "Luas Segitiga : " . $segitiga->hitungLuas() . "<br>";

?>