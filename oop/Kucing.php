<?php 

    class Kucing{
        public $warna = "Coklat";
        public $jumlahKaki = "4";
        public $jenisBulu = "Panjang";
        public $makananFavorit = "Ikan";

        public function bersuara(){
            return "Nyan";
        }

        public function berburu(){
            return "Berburu ikan";
        }

    }

    $kucing1 = new Kucing;
    echo "Warna Kucing : ".$kucing1->warna."<br>";
    echo "Suara kucing : ".$kucing1->bersuara();

    echo "<hr>";
    $kucing1 = new Kucing;
    echo "Warna Kucing : ".$kucing1->warna = "oren"."<br>";
    echo "Suara kucing : ".$kucing1->bersuara();
