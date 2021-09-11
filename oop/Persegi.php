<?php 

    class Persegi
    {
        public $sisi;

        public function luasPersegi()
        {
            return $this->sisi*$this->sisi;
        }

        public function kelilingPersegi()
        {
            return 4*$this->sisi;
        }
    }

    $persegi = new Persegi;
    $persegi->sisi = 10;
    echo "Sisi : {$persegi->sisi} <br>";
    echo "Luas Persegi : ". $persegi->luasPersegi();
    echo "<br>Keliling Persegi : ". $persegi->kelilingPersegi();