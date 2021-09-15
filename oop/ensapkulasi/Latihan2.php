<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>

        <legend>Kucing</legend>
        <div>
            <label for="nama">Masukan Nama</label>
            <input type="text" name="nama" id="nama">
        </div>    

        <div>
            <label for="warna">Masukan Warna</label>
            <input type="text" name="warna" id="warna">
        </div>

        <div>
            <label for="jmlEkorKucing">Masukan Jumlah Ekor</label>
            <input type="number" name="jmlEkorKucing" id="jmlEkorKucing">
        </div>
        <button type="submit" name="input">Input</button>

        </fieldset>
    </form>
</body>
</html>

<?php 

    class Kucing
    {
        public $nama;
        public $warna;
        public $jmlEkorKucing;

        public function __construct($nama, $warna, $jmlEkorKucing)
        {
            $this->nama = $nama;
            $this->warna = $warna;
            $this->jmlEkorKucing = $jmlEkorKucing;
        }

        public function cekKucing(){
            
            if($this->jmlEkorKucing == 3){
                return "Kucing tersebut cingked";
            }else if($this->jmlEkorKucing == 4){
                return "Kucing tersebut Normal";
            }else if($this->jmlEkorKucing > 4){
                return "Siluman Kucing";
            }

        }
        
    }

    if(isset($_POST['input'])){
        $jmlEkorKucing = $_POST['jmlEkorKucing'];
        $warna = $_POST['warna'];
        $nama = $_POST['nama'];

        $kucing = new Kucing($nama, $warna, $jmlEkorKucing);
        echo "Nama Kucing :{$kucing->nama}<br>";
        echo "Warna Kucing :{$kucing->warna}<br>";
        echo "Status : {$kucing->cekKucing()}";
    }