<?php

if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    $asalSekolah = $_POST['asalSekolah'];
    $indonesia = $_POST['nilaiIndonesia'];
    $matematika = $_POST['nilaiMatematika'];
    $inggris = $_POST['nilaiInggris'];
    $ipa = $_POST['nilaiIpa'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Nilai Siswa</title>
</head>

<body>
    <fieldset>
        <legend>
            Data Siswa
        </legend>
        <table border="1">
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Bahasa Indonesia </th>
                <th>Bahasa Indonesia </th>
                <th>Bahasa Indonesia </th>
                <th>Bahasa Indonesia</th>
                <th>Jumlah Nilai</th>
                <th>Rata-rata</th>
                <th>Keterangan</th>
            </tr>

            <?php
            for ($i = 0; $i < count($nama); $i++) {
                //menghitung jumlah nilai
                $jumlahNilai = $indonesia[$i] + $matematika[$i] + $inggris[$i] + $ipa[$i];

                //kondisi keterangan
                $keterangan = $jumlahNilai >= 340 ? 'Diterima' : 'Tidak Diterima';

                //menghitung rata-rata
                $rataRata = $jumlahNilai/4;
            ?>
                <tr>
                    <td><?php echo $no += 1; ?></td>
                    <td><?php echo $nama[$i]; ?></td>
                    <td><?php echo $asalSekolah[$i]; ?></td>
                    <td><?php echo $indonesia[$i]; ?></td>
                    <td><?php echo $matematika[$i]; ?></td>
                    <td><?php echo $inggris[$i]; ?></td>
                    <td><?php echo $ipa[$i]; ?></td>
                    <td><?php echo $jumlahNilai; ?></td>
                    <td><?php echo $rataRata;?></td>
                    <td><?php echo $keterangan; ?></td>
                </tr>
            <?php } ?>
        </table>
    </fieldset>
</body>

</html>