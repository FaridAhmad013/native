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
        <legend>
            <h1>Mahasiswa</h1>
        </legend>
        <table>
            <form action="" method="post">

                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" required></td>
                </tr>

                <tr>
                    <td><label for="nim">Nim</label></td>
                    <td>:</td>
                    <td><input type="number" name="nim" id="nim" required></td>
                </tr>

                <tr>
                    <td><label for="nilai">Nilai</label></td>
                    <td>:</td>
                    <td><input type="number" name="nilai" id="nilai" min="0" max="100" required></td>
                </tr>

                <tr>
                    <td><label for="dosen">Nama Dosen</label></td>
                    <td>:</td>
                    <td><input type="text" name="dosen" id="dosen" required></td>
                </tr>

                <tr>
                    <td><label for="namaMatkul">Nama Matkul</label></td>
                    <td>:</td>
                    <td><input type="text" name="namaMatkul" id="namaMatkul" required></td>
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
    protected $namaDosen;
    protected $namaMatkul;

    public function __construct($nama, $nim, $nilai, $namaDosen, $namaMatkul)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->nilai = $nilai;
        $this->namaDosen = $namaDosen;
        $this->namaMatkul = $namaMatkul;
    }

    public function getInfoMahasiswa()
    {
        return "Nama : $this->nama <br> NIM : $this->nim <br> Nilai : $this->nilai";
    }
}

class MataKuliah extends Mahasiswa
{

    public function grade()
    {
        if ($this->nilai > 85) {
            return "A";
        } else if ($this->nilai > 75) {
            return "B";
        } else if ($this->nilai > 65) {
            return "C";
        } else {
            return "D";
        }
    }

    public function getStatus()
    {
        switch ($this->grade()) {
            case "A":
                return "Lulus";
                break;

            case "B":
                return "Lulus";
                break;

            case "C":
                return "Perbaikan";
                break;

            case "D":
                return "Tidak Lulus";
                break;
        }
    }


    public function getInfoMatakuliah()
    {
        return "Nama Dosen : $this->namaDosen <br> Grade :" . $this->grade() . "<br> Status : " . $this->getStatus();
    }
}

if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];
    $namaDosen = $_POST['dosen'];
    $namaMatkul = $_POST['namaMatkul'];

    $mahasiswa = new MataKuliah($nama, $nim, $nilai, $namaDosen, $namaMatkul);
    echo $mahasiswa->getInfoMahasiswa();
    echo "<br>";
    echo $mahasiswa->getInfoMatakuliah();
}
