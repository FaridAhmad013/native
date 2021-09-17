<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Uang</title>
</head>

<body>
    <fieldset>
        <legend>
            <h1>Peminjaman uang</h1>
        </legend>
        <table>

            <form action="" method="post">

                <tr>
                    <td><label for="nama">Masukan Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>

                <tr>
                    <td><label for="jenisKelamin">Jenis Kelamin</label></td>
                    <td>:</td>
                    <td>
                        <label for="l">
                            <input type="radio" name="jenisKelamin" value="Laki-laki" id="l">
                            Laki-Laki
                        </label>
                        <label for="p">
                            <input type="radio" name="jenisKelamin" value="Perempuan" id="p">
                            Perempuan
                        </label>
                    </td>
                </tr>

                <tr>
                    <td><label for="idPeminjam">Id Peminjam</label></td>
                    <td>:</td>
                    <td><input type="number" name="idPeminjam" id="idPeminjam"></td>
                </tr>

                <tr>
                    <td><label for="tanggalPeminjaman">Tanggal Peminjaman</label></td>
                    <td>:</td>
                    <td><input type="date" name="tanggalPeminjaman" id="tanggalPeminjaman"></td>
                </tr>

                <tr>
                    <td><label for="tanggalKembali">Tanggal Kembali</label></td>
                    <td>:</td>
                    <td><input type="date" name="tanggalKembali" id="tanggalKembali"></td>
                </tr>

                <tr>
                    <td><label for="nominalUang">Nominal Uang</label></td>
                    <td>:</td>
                    <td><input type="number" name="nominalUang" id="nominalUang"></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="submit">Masukan</button></td>
                </tr>

        </table>
        
        <?php

        class Peminjam
        {
            protected $nama;
            protected $jenisKelamin;
            protected $idPeminjam;
            protected $tanggalPeminjaman;
            protected $nominalUang;
            protected $tanggalKembali;

            public function __construct($nama, $jenisKelamin, $idPeminjam, $tanggalPeminjaman, $tanggalKembali, $nominalUang)
            {
                $this->nama = $nama;
                $this->jenisKelamin = $jenisKelamin;
                $this->idPeminjam = $idPeminjam;
                $this->tanggalPeminjaman = $tanggalPeminjaman;
                $this->tanggalKembali = $tanggalKembali;
                $this->nominalUang = $nominalUang;
            }

            public function getInfoPeminjam()
            {
                return "Nama : $this->nama <br> Jenis kelamin : $this->jenisKelamin <br> ID Peminjam : $this->idPeminjam <br> Tanggal Peminjaman :$this->tanggalPeminjaman <br> Tanggal Kembali : $this->tanggalKembali <br> Nominal Uang : $this->nominalUang";
            }
        }

        class Pembayaran extends Peminjam
        {
            public function ProsesPembayaran()
            {
                if ($this->nominalPembayaran == $this->nominalUang) {
                    return "Lunas";
                } else if ($this->nominalPembayaran == $this->nominalUang) {
                    return "Ini kembalian anda";
                } else {
                    return "Uang anda kurang";
                }
            }
        }

        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $jenisKelamin = $_POST['jenisKelamin'];
            $idPeminjam = $_POST['idPeminjam'];
            $tanggalPeminjaman = $_POST['tanggalPeminjaman'];
            $tanggalKembali = $_POST['tanggalKembali'];
            $nominalUang = $_POST['nominalUang'];

            $pembayaran = new Pembayaran($nama, $jenisKelamin, $idPeminjam, $tanggalPeminjaman, $tanggalKembali, $nominalUang);
            echo $pembayaran->getInfoPeminjam();
        }
        ?>

    </fieldset>
</body>

</html>