<?php 
    class Laptop 
    {
        private $pemilik = "Farid";
        private $merk = "Dell";

        public function __construct()
        {
            echo "Construct Laptop";
        }

        public function hidupkanLaptop()
        {
            return "Hidupkan Laptop $this->merk Punya $this->pemilik ";
        }
        
        public function __destruct()
        {
            echo "Destruct Laptop";
        }    
        
    }

        $laptop = new Laptop;
        echo $laptop->hidupkanLaptop();