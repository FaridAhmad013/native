<?php 

    class Komputer{
        public $namaPemilik;
        public $jenisKelaminPemilik;
        public $merk;
        public $ukuranLayar;

        public function komputerDinyalakan(){
            return "Komputer dinyalakan";
        }

        public function komputerDimatikan(){
            return "Komputer dimatikan";
        }
    }

    $komputer1 = new Komputer;
    echo "Nama Pemilik : ".$komputer1->namaPemilik = "Farid Ahmad "."<br>";
    echo "Merk Komputer : ".$komputer1->merk = "LG "."<br>";
    echo "Ukuran Layar Komputer :".$komputer1->ukuranLayar = "13 Inch "."<br>";
    echo "Status Komputer :".$komputer1->komputerDinyalakan().""."<br>";
    echo "<hr>";

    $komputer2 = new Komputer;
    echo "Nama Pemilik : ".$komputer2->namaPemilik = "Fadhilah "."<br>";
    echo "Merk Komputer : ".$komputer2->merk = "Dell "."<br>";
    echo "Ukuran Layar Komputer :".$komputer2->ukuranLayar = "14 Inch "."<br>";
    echo "Status Komputer :".$komputer2->komputerDimatikan().""."<br>";
    echo "<hr>";


    $komputer3 = new Komputer;
    echo "Nama Pemilik : ".$komputer3->namaPemilik = "Ikbal "."<br>";
    echo "Merk Komputer : ".$komputer3->merk = "Samsung "."<br>";
    echo "Ukuran Layar Komputer :".$komputer3->ukuranLayar = "16 Inch "."<br>";
    echo "Status Komputer :".$komputer3->komputerDinyalakan().""."<br>";
    echo "<hr>";


    $komputer4 = new Komputer;
    echo "Nama Pemilik : ".$komputer4->namaPemilik = "Ardiansyah "."<br>";
    echo "Merk Komputer : ".$komputer4->merk = "ROG "."<br>";
    echo "Ukuran Layar Komputer :".$komputer4->ukuranLayar = "15 Inch "."<br>";
    echo "Status Komputer :".$komputer4->komputerDimatikan().""."<br>";
    echo "<hr>";


    $komputer5 = new Komputer;
    echo "Nama Pemilik : ".$komputer5->namaPemilik = "Fajar "."<br>";
    echo "Merk Komputer : ".$komputer5->merk = "Dell "."<br>";
    echo "Ukuran Layar Komputer :".$komputer5->ukuranLayar = "14 Inch "."<br>";
    echo "Status Komputer :".$komputer5->komputerDinyalakan();

