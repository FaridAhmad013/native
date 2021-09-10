<?php 
if (isset($_POST['masukan'])) {
    $namaPeminjam = $_POST['namaPeminjam'];
    $nik = $_POST['nikPeminjam'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $namaMobil = $_POST['namaMobil'];
    $jenisMobil = $_POST['jenisMobil'];
    $merekMobil = $_POST['merekMobil'];
    $platMobil = $_POST['platMobil'];
    $tanggalPeminjaman = $_POST['tanggalPeminjaman'];
    $tanggalKembali = $_POST['tanggalKembali'];
    $penjamin = $_POST['penjamin'];
    $supir = $_POST['supir'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi</title>
</head>

<body>
    <form action="hasil.php" method="POST">
        <fieldset>
            <legend>
                <h1>Verifikasi</h1>
            </legend>
            <input type="hidden" name="namaPeminjam" value="<?php echo $namaPeminjam; ?>">
            <input type="hidden" name="nik" value="<?php echo $nik; ?>">
            <input type="hidden" name="jk" value="<?php echo $jk;?>">
            <input type="hidden" name="agama" value="<?php echo $agama;?>">
            <input type="hidden" name="namaMobil" value="<?php echo $namaMobil; ?>">
            <input type="hidden" name="jenisMobil" value="<?php echo $jenisMobil; ?>">
            <input type="hidden" name="merekMobil" value="<?php echo $merekMobil; ?>">
            <input type="hidden" name="platMobil" value="<?php echo $platMobil;?>">
            <input type="hidden" name="tanggalPeminjaman" value="<?php echo $tanggalPeminjaman; ?>">
            <input type="hidden" name="tanggalKembali" value="<?php echo $tanggalKembali; ?>">
            <input type="hidden" name="penjamin" value="<?php echo $penjamin; ?>">
            <input type="hidden" name="supir" value="<?php echo $supir; ?>">
            <table>
                <tr>
                    <td>
                        <label for="verifikasiTanggalKembali">Verifikasi Tanggal Kembali</label>
                    </td>
                    <td>
                        <input type="date" name="verifikasiTanggalKembali" id="verifikasiTanggalKembali">
                    </td>
                </tr>


            </table>

            <button type="submit" name="verifikasi">Verifikasi</button>
        </fieldset>


    </form>
</body>

</html>



