<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>OOP Aritmatika</legend>
        <form action="" method="post">
            <div>
                <label for="bil1">Masukan Bilangan 1</label>
                <input type="number" name="bil1" id="bil1">
            </div>
            <div>
                <label for="bil2">Masukan Bilangan 2</label>
                <input type="number" name="bil2" id="bil2">
            </div>
            <button type="submit" name="hitung">
                Hitung
            </button>
        </form>
    </fieldset>
</body>
</html>

<?php
    
    class Aritmatika
    {

        public $bilangan1, $bilangan2;

        public function __construct($bilangan1, $bilangan2)
        {
            $this->bilangan1 = $bilangan1;
            $this->bilangan2 = $bilangan2;
        }

        public function pertambahan()
        {
            return $this->bilangan1+$this->bilangan2;
        }

        public function pengurangan()
        {
            return $this->bilangan1-$this->bilangan2;
        }

        public function perkalian()
        {
            return $this->bilangan1*$this->bilangan2;
        }

        public function pembagian()
        {
            return $this->bilangan1/$this->bilangan2;
        }

        public function modulus()
        {
            return $this->bilangan1%$this->bilangan2;
        }

    }

    if(isset($_POST['hitung']))
    {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $aritmatika = new Aritmatika($bil1, $bil2);
        echo "Pertambahan ". $aritmatika->pertambahan();
        echo "<br>Pengurangan ". $aritmatika->pengurangan();
        echo "<br>Perkalian ". $aritmatika->perkalian();
        echo "<br>Pembagian ". $aritmatika->pembagian();
        echo "<br>Modulus ".$aritmatika->modulus();
        
    }