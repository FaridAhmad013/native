<?php 

    class Laptop
    {
        public $procie = 'Core I7';
        protected $VGA = 'GTX 1050';

        public function gaming(){
            return "Wush Wush";
        }

    }

    class ROG extends Laptop 
    {
        public $procie = 'Core I9';
    }

    $asus = new ROG();
    echo $asus->procie;
    if(property_exists($asus, 'VGA'))
    {
        echo "<br>Laptop Ini punya VGA";
    }
    echo $asus->gaming();