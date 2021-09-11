<?php 

    class Segitiga
    {
        public $alas;
        public $tinggi;
        public $a,$b,$c;

        public function luasSegitiga()
        {
            return ($this->alas*$this->tinggi)/2;
        }

        public function kelilingSegitiga()
        {
            return $this->a*$this->b*$this->c;
        }

    }
    
    $segitiga = new Segitiga;
    $segitiga->alas = 10;
    $segitiga->tinggi = 10;
    $segitiga->a =10;
    $segitiga->b = 10;
    $segitiga->c = 10;

    echo "Alas : {$segitiga->alas} <br>";
    echo "Tinggi : {$segitiga->tinggi} <br>";
    echo "a : {$segitiga->a} <br>";
    echo "b : {$segitiga->b} <br>";
    echo "c : {$segitiga->c} <br>";
    echo "Luas Segitiga : ".$segitiga->luasSegitiga();
    echo "<br> Keliling Segitiga : ".$segitiga->kelilingSegitiga();