<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 | Lingkaran</title>
</head>
<body>
        <form action="" method="post">
            <fieldset>
                <legend><h1>Luas & Keliling Lingkatan</h1></legend>
                <input type="number" name="jari" placeholder="Masukan Jari-Jari" required>
                <select name="pilih" required>
                    <option value="">Pilih</option>
                    <option value="1">Luas</option>
                    <option value="2">Keliling</option>
                </select>
                <button type="submit" name="hitung">Hitung</button>
            </fieldset>
        </form>
</body>
</html>

<?php 

    if(isset($_POST['hitung'])){
       $jari = $_POST['jari'];
       $pilih = $_POST['pilih'];

       if($pilih == "1"){
           $rumus = "Rumus Luas Lingkaran 3.14 x r^2";
           $jari **=2;
        $hasil =  3.14*$jari;
       }else if($pilih == "2"){
           $rumus = "Rumus Keliling Lingkaran 2 x 3.14 x r";
           $hasil = 2*(3.14*$jari);
       }

       echo "<b><i>$rumus</i></b> <br>
       Hasilnya : $hasil";
    }