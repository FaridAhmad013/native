<?php 

    class Segitiga
    {
        public $alas;
        public $tinggi;
        public $setengah = 0.5;

        public function luasSegitiga()
        {
            return $this->setengah*($this->alas*$this->tinggi);
        }

        public function kelilingSegitiga()
        {
            return $this->alas*$this->tinggi;
        }

    }
    
    $segitiga = new Segitiga;
    $segitiga->alas = 10;
    $segitiga->tinggi = 10;

    echo "Alas : {$segitiga->alas} <br>";
    echo "Tinggi : {$segitiga->tinggi} <br>";
    echo "Luas Segitiga : ".$segitiga->luasSegitiga();
    echo "<br> Keliling Segitiga : ".$segitiga->kelilingSegitiga();