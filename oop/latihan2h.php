<?php

class Pesanan
{
    public $namaBarang;
    protected $harga, $jumlahPesanan, $sistemPembayaran;

    public function __construct($namaBarang, $harga, $jumlahPesanan, $sistemPembayaran)
    {
        $this->namaBarang = $namaBarang;
        $this->harga = $harga;
        $this->jumlahPesanan = $jumlahPesanan;
        $this->sistemPembayaran = $sistemPembayaran;
    }
}

class Pembayaran extends Pesanan
{

    public function getJumlahPesanan()
    {

        return $this->jumlahPesanan;
    }


    public function getHarga()
    {

        return $this->harga * $this->getJumlahPesanan();
    }

    public function getSistemPembayaran()
    {

        return $this->sistemPembayaran;
    }


    public function getCashBack()
    {

        if ($this->getSistemPembayaran() == "Cash") {
            return 0;
        } else if ($this->getSistemPembayaran() == "M-Banking") {
            return 0.025 * $this->getHarga();
        } else if ($this->getSistemPembayaran() == "Gopay") {
            return 0.1 * $this->getHarga();
        } else if ($this->getSistemPembayaran() == "Pickup") {
            return 0.015 * $this->getHarga();
        }
    }

    public function getDiskon()
    {

        if ($this->getHarga() >= 250000) {
            return $this->getHarga() * 0.15;
        } else if ($this->getHarga() >= 150000) {
            return $this->getHarga() * 0.1;
        } else {
            return 0;
        }
    }


    public function getTotalYangHarusDibayar()
    {

        return ($this->getHarga()) - ($this->getDiskon() + $this->getCashBack());
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gofood</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $namaBarang = $_POST['namaBarang'];
        $harga = $_POST['harga'];
        $jumlahPesanan = $_POST['jumlahPesanan'];
        $sistemPembayaran = $_POST['sistemPembayaran'];

        $pembayaran = new Pembayaran($namaBarang, $harga, $jumlahPesanan, $sistemPembayaran);
    ?>
        <fieldset>
            <legend>
                <h1>Struk Pembayaran</h1>
            </legend>
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><?php echo $pembayaran->namaBarang; ?></td>
                </tr>

                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><i><?php echo "Rp. " . number_format($pembayaran->getHarga(), 2, ',', ','); ?></i></td>
                </tr>

                <tr>
                    <td>Jumlah Pesanan</td>
                    <td>:</td>
                    <td><?php echo $pembayaran->getJumlahPesanan(); ?></td>
                </tr>

                <tr>
                    <td>Jenis Pembayaran</td>
                    <td>:</td>
                    <td><?php echo $pembayaran->getSistemPembayaran(); ?></td>
                </tr>


                <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td><i><?php echo "Rp. " . number_format($pembayaran->getDiskon(), 2, ',', ','); ?> </i></td>
                </tr>

                <tr>
                    <td>Cashback</td>
                    <td>:</td>
                    <td><i><?php echo "Rp. " . number_format($pembayaran->getCashBack(), 2, ',', ','); ?> </i></td>
                </tr>

                <tr>
                    <td>Total Yang Harus Dibayar</td>
                    <td>:</td>
                    <td><i><?php echo "Rp. " . number_format($pembayaran->getTotalYangHarusDibayar(), 2, ',', ','); ?></i></td>
                </tr>

            <?php } ?>
            </table>
        </fieldset>
</body>

</html>