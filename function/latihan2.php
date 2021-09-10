<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>
    <form action="" method="post">
        <label for="jari">Masukan Jari</label>
        <input type="number" name="jari" id="jari">
        <button type="submit" name="hitung">Hitung</button>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['hitung'])){
        $jari = $_POST['jari'];

        function luasLingkaran($jari, $phi = 3.14){
            $jari**=2;
            $luasLingkaran = $phi*$jari;
            return $luasLingkaran;
        }

        function kelilingLingkaran($jari, $phi = 3.14){
            $kelilingLingkaran = ($phi * $jari) * 2;
            return $kelilingLingkaran;
        }

       echo  "Jari-jari : $jari <br>";
       echo "Luas Lingkaran : ".luasLingkaran($jari);
       echo "<br>Keliling Lingkaran :".kelilingLingkaran($jari);

    }
?>