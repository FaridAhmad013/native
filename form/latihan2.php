<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend><h1>Soal No 2</h1></legend>
    <select name="pilihan" required>
        <option value="">Pilih Program Dibawah Ini</option>
        <option value="1">Luas dan Keliling segitiga</option>
        <option value="2">Luas dan Keliling Lingkaran</option>
        <option value="3">Luas dan Keliling Persegi</option>
        <option value="4">Luas dan Keliling Persegi Panjang</option>
    </select>

    <button type="submit" name="submit">Pilih</button>
        </fieldset>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $pilihan = $_POST['pilihan'];

        if($pilihan == "1"){
            header("location: segitiga.php");
        }else if($pilihan == "2"){
            header("location: lingkaran.php");
        }else if($pilihan == "3"){
            header("location: persegi.php");
        }else if($pilihan == "4"){
            header("location: persegipanjang.php");
        }
    }
?>

