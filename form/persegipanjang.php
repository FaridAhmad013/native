<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 | Persegi Panjang</title>
</head>
<body>
        <form action="" method="post">
            <fieldset>
                <legend><h1>Luas & Keliling Persegi Panjang</h1></legend>
                <div>
                <input type="number" name="panjang" placeholder="Masukan panjang" required>
                </div>
                <div>
                <input type="number" name="lebar" placeholder="Masukan lebar" required>
                </div>

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
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $pilih = $_POST['pilih'];

        if($pilih == "1"){
            $rumus = "Rumus Luas Persegi Panjang, Panjang x Lebar";
            $hasil = $panjang*$lebar;
        }else if($pilih == "2"){
            $rumus = "Rumus  Keliling Persegi Panjang, 2 x Panjang + Lebar ";
            $hasil = 2*($panjang + $lebar);
        }

        echo "<b><i>$rumus</i></b> <br>
        Hasilnya : $hasil";
    }
?>