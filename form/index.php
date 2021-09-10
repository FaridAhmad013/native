<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox </title>
</head>
<body>

    <form action="" method="post">
      <h3>PIlih Warna Kesukaan Anda</h3>
      <label for="putih">
      <input type="checkbox" name="warna[]" value="Blanc" id="putih">
      putih
      </label>
      
      <label for="hitam">
      <input type="checkbox" name="warna[]" value="Noir" id="hitam">
      Hitam  
    </label>
      
      <label for="merah">
      <input type="checkbox" name="warna[]" value="Rouge" id="merah">
      Merah
      </label>
      
      <label for="ungu">
      <input type="checkbox" name="warna[]" value="Violet" id="ungu">
      Ungu  
    </label>
      
    <label for="kuning">
    <input type="checkbox" name="warna[]" value="Jaune" id="kuning">
    kuning
    </label>
      
    <br>
      <button name="pilih" type="submit">
        pilih
      </button>
    </form>

</body>
</html>


<?php 

if(isset($_POST['pilih'])){
  $colors = $_POST['warna'];

  echo "warna kesukaan anda ";
  foreach($colors as $color){
    echo " <b>$color</b>";
  }

}