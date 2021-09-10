<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 | Segitiga</title>
</head>
<body>
        <form action="" method="post">
            <fieldset>
                <legend><h1>Perhitungan Segitiga</h1></legend>

                <div>
                <input type="number" name="alas" placeholder="Masukan Alas" required>
                </div>

                <div>
                <input type="number" name="tinggi" placeholder="Masukan Tinggi" required>
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
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $pilih = $_POST['pilih'];
    if($pilih == "1"){
        $rumus = "Rumus Luas Segitiga 1/2 x alas x tinggi";
        $hasil = 0.5 * $alas * $tinggi;
    }
    else if($pilih == "2"){
        $rumus = "Rumus Keliling Segitiga Alas x Tinggi";
        $hasil = $alas * $tinggi;
    }

    echo "<b><i>$rumus</i></b> <br>
        Hasilnya : $hasil";
}
?>