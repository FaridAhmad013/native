<?php
if (isset($_POST['verifikasi']) || isset($_POST['bayar'])) {
    $namaPeminjam = $_POST['namaPeminjam'];
    $nik = $_POST['nik'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $tanggalPeminjaman = $_POST['tanggalPeminjaman'];
    $tanggalKembali = $_POST['tanggalKembali'];
    $penjamin = $_POST['penjamin'];
    $namaMobil = $_POST['namaMobil'];
    $platMobil = $_POST['platMobil'];
    $jenisMobil = $_POST['jenisMobil'];
    $merekMobil = $_POST['merekMobil'];
    $verifikasiTanggalKembali = $_POST['verifikasiTanggalKembali'];
    $pembayaran = $_POST['pembayaran'];
    $telat = 0;
    $supir = $_POST['supir'];
    $hari = 0;
    $denda = 0;
    

   
 
    //mengitung biaya harian dengan supir dan tanpa supir
    $supir == "Ya" ? $biayaHarian = 250000 + 25000 : $biayaHarian = 150000;

    //mengitung keterlambatan dan jika terlambat maka hasilnya 0 bukan minus
    $telat = (strtotime($verifikasiTanggalKembali) - strtotime($tanggalKembali)) / 60 / 60 / 24  ;
    $telat = $telat <= 0 ? 0 : $telat;

    //menghitung lama pinjangan
    $lamaPinjaman = ((strtotime($tanggalKembali) - strtotime($tanggalPeminjaman)) / 60 / 60 / 24)+$telat;

    //menghitung denda
    $denda = (($telat * 24) * 10000);

    //menghitung total biaya
    $totalBiaya = $lamaPinjaman * $biayaHarian;

    //mengitung total pembayaran
    $totalPembayaran = $totalBiaya + $denda;

    //bayar
    if($pembayaran == $totalPembayaran){
        $ket = "Terimakasih";
    }else if($pembayaran >= $totalPembayaran){
        $kembalian = $pembayaran-$totalPembayaran;
        $ket = "Terimakasih, dan ini kembalian anda Rp. <i>".number_format($kembalian,2,',',',')."</i>";
    }else if($pembayaran == 0){
        echo "";
    }else{
        $ket = "Uang anda kurang dan anda diblacklist";
    }
    

    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Biaya</title>
</head>

<body>
    <fieldset>
        
    <table>
        <tr>
            <th>
                Data Diri Peminjam
            </th>
        </tr>

        <tr>
            <td>Nama Peminjam</td>
            <td>:</td>
            <td><?php echo $namaPeminjam; ?></td>
        </tr>

        <tr>
            <td>
                NIK
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $nik; ?>
            </td>
        </tr>

        <tr>
            <td>
                Jenis Kelamin
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $jk;?>
            </td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $agama;?></td>
        </tr>

        <tr>
            <th>
                Data Mobil Yang Dipinjam
            </th>
        </tr>
        <tr>
            <td>
                Tanggal Peminjaman
            </td>
            <td>
            :
            </td>
            <td>
            <?php echo $tanggalPeminjaman;?>
            </td>
        </tr>

        <tr>
            <td>
               Tanggal Kembali 
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $tanggalKembali;?>
            </td>
        </tr>

        <tr>
            <td>
                Tanggal verifikasi kembali
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $verifikasiTanggalKembali;?>
            </td>
        </tr>

        <tr>
            <td>
                Penjamin  
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $penjamin;?>
            </td>
        </tr>

        <tr>
            <td>
                Nama Mobil Yang Dipinjam
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $namaMobil;?>
            </td>
        </tr>

        <tr>
            <td>
                No Plat Mobil Yang Dipinjam
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $platMobil;?>
            </td>
        </tr>

        <tr>
            <td>
                Jenis Mobil
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $jenisMobil;?>
            </td>
        </tr>

        <tr>
            <td>
                Merek Mobil
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $merekMobil; ?>
            </td>
        </tr>

        <tr>
            <td>
                Supir
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $supir;?>
            </td>
        </tr>

        <tr>
            <th>
                Rincian Biaya
            </th>
        </tr>
        <tr>
            <td>
                Lama Pinjaman
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $lamaPinjaman;?> Hari
            </td>
        </tr>

        <tr>
            <td>
                Biaya Harian
            </td>
            <td>
                :
            </td>
            <td>
                <i>
                Rp. <?php echo number_format($biayaHarian, 2, ',', ','); ?>
                </i>
            </td>
        </tr>

        <tr>
            <td>
                Telat
            </td>
            <td>
                :
            </td>
            <td>
                <?php echo $telat; ?> Hari
            </td>
        </tr>

        <tr>
            <td>
                Denda
            </td>
            <td>
                :
            </td>
            <td>
                <i>
                Rp. <?php echo number_format($denda, 2, ',', ','); ?>
                </i>
               
            </td>
        </tr>

        <tr>
            <th>
                Total Biaya
            </th>
        </tr>
        <tr>
            <td>
                Total Biaya
            </td>
            <td>
                :
            </td>
            <td>
                <i>
                Rp.<?php echo number_format($totalBiaya,2,',',',');?>
                </i>
            </td>
        </tr>

        <tr>
            <td>
                Total Denda 
            </td>
            <td>
                :
            </td>
            <td>
                <i>
                Rp. <?php echo number_format($denda,2,',',','); ?>
                </i>
            </td>
        </tr>

        <tr>
            <th>
                Total Pembayaran
            </th>
        </tr>
        <tr>
            <td>
                Total Pembayaran
            </td>
            <td>
                :
            </td>
            <td>
              <i>
              Rp. <?php echo number_format($totalPembayaran,2,',',',');?>
              </i> 
            </td>
        </tr>
        
        <tr>
            <th>Bayar</th>
        </tr>
        <tr>
            <td><label for="pembayaran">Masukan Nominal Pembayaran</label></td>
            <td>:</td>
            <td>
                    <form action="" method="post">
                    <input type="hidden" name="namaPeminjam" value="<?php echo $namaPeminjam;?>">
                    <input type="hidden" name="nik" value="<?php echo $nik; ?>">
                    <input type="hidden" name="jk" value="<?php echo $jk;?>">
                    <input type="hidden" name="agama" value="<?php echo $agama;?>">
                    <input type="hidden" name="tanggalPeminjaman" value="<?php echo $tanggalPeminjaman;?>">
                    <input type="hidden" name="tanggalKembali" value="<?php echo $tanggalKembali;?>">
                    <input type="hidden" name="penjamin" value="<?php echo $penjamin;?>">
                    <input type="hidden" name="namaMobil" value="<?php echo $namaMobil;?>">
                    <input type="hidden" name="platMobil" value="<?php echo $platMobil;?>">
                    <input type="hidden" name="jenisMobil" value="<?php echo $jenisMobil;?>">
                    <input type="hidden" name="merekMobil" value="<?php echo $merekMobil;?>">
                    <input type="hidden" name="verifikasiTanggalKembali" value="<?php echo $verifikasiTanggalKembali?>">
                    <input type="hidden" name="totalHarga" value="<?php echo $totalPembayaran;?>">
                    <input type="hidden" name="supir" value="<?php echo $supir;?>">
                    <input type="number" name="pembayaran" id="pembayaran">
                    <button type="submit" name="bayar">
                        Bayar
                    </button>

                    </form>
            </td>
        </tr>
        <tr>
            <td>
            Keterangan
            </td>
            <td>
                :
            </td>
            <td>
            <?php echo " <b>$ket</b> <br>";?>
            </td>
        </tr>

        </fieldset>
        
        
    </table>
</body>

</html>



