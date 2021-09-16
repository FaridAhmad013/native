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
        <legend><h1>Mahasiswa</h1></legend>
        <table>
            <form action="" method="post">

            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>

            <tr>
                <td><label for="">Nim</label></td>
                <td>:</td>
                <td><input type="number" name="nim" id=""></td>
            </tr>

            <tr>
                <td><label for="nilai">Nilai</label></td>
                <td>:</td>
                <td><input type="number" name="nilai" id="nilai"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="input">Masukan</button></td>
            </tr>

            </form>
        </table>
    </fieldset>
</body>
</html>

<?php 

class Mahasiswa
{
    public $nama;
    protected $nim;
    protected $nilai;

    public function __construct($nama, $nim, $nilai)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->nilai = $nilai;
    }

    public function getInfoMahasiswa()
    {
        return "Nama : $this->nama <br> NIM : $this->nim <br> Nilai : $this->nilai";
    }
    
}

class MataKuliah extends Mahasiswa
{
    protected $status;
    public function getInfoMatakuliah()
    {
        return "";
    }
    
}

if(isset($_POST['input'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];

    $mahasiswa = new Mahasiswa($nama, $nim, $nilai);
    echo $mahasiswa->getInfoMahasiswa();

}