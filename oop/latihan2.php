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
        <legend><h1>GoFood</h1></legend>
        <form action="latihan2h.php" method="post">
            <table>
                <tr>
                    <td><label for="namaBarang">Nama Barang</label></td>
                    <td>:</td>
                    <td><input type="text" name="namaBarang" id="namaBarang" required></td>
                </tr>

                <tr>
                    <td><label for="harga">Harga</label></td>
                    <td>:</td>
                    <td><input type="number" name="harga" id="harga" required></td>
                </tr>

                <tr>
                    <td><label for="jumlahPesanan">Jumlah Pesanan</label></td>
                    <td>:</td>
                    <td><input type="number" name="jumlahPesanan" id="jumlahPesanan" min="1" required></td>
                </tr>

                <tr>
                    <td><label for="sistemPembayaran">Sistem Pembayaran</label></td>
                    <td>:</td>
                    <td><select name="sistemPembayaran" id="sistemPembayaran" required>
                        <option value="">PIlih</option>
                        <option value="Cash">Cash</option>
                        <option value="M-Banking">M-Banking</option>
                        <option value="Gopay">Gopay</option>
                        <option value="Pickup">Pickup</option>
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