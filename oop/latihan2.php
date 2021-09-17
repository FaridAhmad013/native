<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gofood</title>
</head>
<body>
    <fieldset>
        <legend>Gofood</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="namaBarang">Nama Barang</label></td>
                    <td>:</td>
                    <td><input type="text" name="namaBarang" id="namaBarang"></td>
                </tr>

                <tr>
                    <td><label for="harga">Harga</label></td>
                    <td>:</td>
                    <td><input type="number" name="harga" id="harga"></td>
                </tr>

                <tr>
                    <td><label for="jumlahPesanan">Jumlah Pesanan</label></td>
                    <td>:</td>
                    <td><input type="number" name="jumlahPesanan" id="jumlahPesanan"></td>
                </tr>

                <tr>
                    <td><label for="sistemPembayaran">Sistem Pembayaran</label></td>
                    <td>:</td>
                    <td><select name="sistemPembayaran" id="sistemPembayaran">
                        <option value="">PIlih</option>
                        <option value="1">Cash</option>
                        <option value="2">M-Banking</option>
                        <option value="3">Gopay</option>
                        <option value="4">Pickup</option>
                    </select></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>

<?php 

    class Pesanan
    {
        public $namaBarang, $harga, $jumlahPesanan, $sistemPembayaran;

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

        public function getHarga()
        {
            return $this->harga*$this->jumlahPesanan;
        }

        public function getDiskon()
        {
            if($this->getHarga()>= 150000){
                return $this->getHarga()*0.1;
            }else if($this->getHarga() >= 250000){
                return $this->getHarga()*0.15;
            }else{
                return 0;
            }

        }

        public function totalHarga()
        {
            return $this->getHarga()-$this->getDiskon();
        }
        
        
    }

    if(isset($_POST['submit'])){
        $namaBarang = $_POST['namaBarang'];
        $harga = $_POST['harga'];
        $jumlahPesanan = $_POST['jumlahPesanan'];
        $sistemPembayaran = $_POST['sistemPembayaran'];
        
        $pembayaran = new Pembayaran($namaBarang, $harga, $jumlahPesanan, $sistemPembayaran);
        echo $pembayaran->getHarga();
    }
