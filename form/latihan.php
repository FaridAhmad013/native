<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend><h1>Soal No 1</h1></legend>

            <div>
            <input type="number" name="bilangan1" placeholder="Masukan Bilangan 1" required>
            </div>

            <div>
                <input type="number" name="bilangan2" placeholder="Masukan Bilangan" required>
            </div>

            <select name="pilih" required>
                <option value="">Pilih</option>
                <option value="+">Penjumlahan</option>
                <option value="-">Pengurangan</option>
                <option value="x">Perkalian</option>
                <option value="/">Pembagian</option>
            </select>

            <button type="submit" name="hitung">
                Hitung
            </button>
        </fieldset>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['hitung'])){
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $pilih = $_POST['pilih'];

        if($pilih == "+"){
            $hasil = $bilangan1 + $bilangan2;
        }else if($pilih == "-"){
            $hasil = $bilangan1 - $bilangan2;
        }else if($pilih == "x"){
            $hasil = $bilangan1 * $bilangan2;
        }else if($pilih == "/"){
            $hasil = $bilangan1 / $bilangan2;
        }
        
        
        echo "<b>$bilangan1</b> $pilih <b>$bilangan2</b> Adalah <b>$hasil</b>";
    }
?>