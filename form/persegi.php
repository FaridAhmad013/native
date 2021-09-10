<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 | Persegi</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend><h1>Persegi</h1></legend>
            <input type="number" name="sisi" placeholder="Masukan Sisi" required>
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
    $sisi = $_POST['sisi'];
    $pilih = $_POST['pilih'];

    if($pilih == "1"){
        $rumus = "Rumus Luas Persegi, Sisi x Sisi";
        $hasil = $sisi*$sisi;
    }else if($pilih == "2"){
        $rumus = "Rumus Keliling Persegi, 4 x Sisi";
        $hasil = 4*$sisi;
    }

    echo "<b><i>$rumus</i></b> <br>
    Hasilnya : $hasil";
}