<?php 

    class Komputer
    {
        public $merek;
        public $processor;
        public $memory;

        public function beliKomputer()
        {
            return "Beli Komputer Baru";
        }

    }

    
    class Laptop extends Komputer 
    {
        public function lihatSpek()
        {
            return "Merek :  ".parent::$merek.", Processor ".parent::$processor.", Memori :". parent::$memory;
        }
        
    }

    $laptopKu = new Laptop;

    echo $laptopKu->merek = "Dell";
    echo $laptopKu->processor = "Intel Core i5 gen 6";
    echo $laptopKu->memory = "8 GB";

    echo $laptopKu->beliKomputer();

