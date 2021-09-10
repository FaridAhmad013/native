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
        <legend>Perpangkatan</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="bilangan">Masukan BIlangan</label></td>
                    <td>:</td>
                    <td><input type="number" name="bilangan" id="bilangan"></td>
                </tr>
                <tr>
                    <td><label for="perpangkatan">Masukan Pangkat</label></td>
                    <td>:</td>
                    <td><input type="number" name="perpangkatan" id="perpangkatan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="hitung">Hitung</button></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>

<?php  

if(isset($_POST['hitung'])){
    $bilangan = $_POST['bilangan'];
    $perpangkatan = $_POST['perpangkatan'];
    function perpangkatan($bilangan, $perpangkatan){
    
        if($perpangkatan >= 0){
           return  perpangkatan( $bilangan, $perpangkatan-1).$bilangan;
          }
    }
    
    echo "Bilangan =  $bilangan <br>";
    echo "Perpangkatan :".perpangkatan($bilangan, $perpangkatan)." = ".$bilangan **= $perpangkatan;
    
    
    
}
