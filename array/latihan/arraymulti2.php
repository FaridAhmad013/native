<?php


$dataMahasiswa = [
    //mahasiswa 1
    [
        'namaMahasiswa' => 'Farid AHmad',
        //matakuliah
        'mataKuliah' => [
            ['namaMataKuliah' => 'Matematika'],
            ['namaMataKuliah' => 'IPS'],
            ['namaMataKuliah' => 'Fisika']
        ],
        //Hobi
        'hobi' => [
            ['namaHobi' => 'Mancing',],
            ['namaHobi' => 'Bersantay ria']
        ],
        //dosen
        'namaDosen' => 'Aceng Fikri'
    ],

    //mahasiswa 2
    [
        'namaMahasiswa' => 'Fadhilah',
        //matakuliah
        'mataKuliah' => [
            ['namaMataKuliah' => 'Matematika'],
            ['namaMataKuliah' => 'IPS'],
            ['namaMataKuliah' => 'Fisika']
        ],
        //Hobi
        'hobi' => [
            ['namaHobi' => 'Mancing',],
            ['namaHobi' => 'Bersantay ria']
        ],
        //dosen
        'namaDosen' => 'Aceng Fikri'
    ],

    //mahasiswa 3
    [
        'namaMahasiswa' => 'Ikbal Ardiansyah',
        //matakuliah
        'mataKuliah' => [
            ['namaMataKuliah' => 'Matematika'],
            ['namaMataKuliah' => 'IPS'],
            ['namaMataKuliah' => 'Fisika']
        ],
        //Hobi
        'hobi' => [
            ['namaHobi' => 'Mancing',],
            ['namaHobi' => 'Bersantay ria']
        ],
        //dosen
        'namaDosen' => 'Aceng Fikri'
    ],

    //mahasiswa 4
    [
        'namaMahasiswa' => 'Cecep',
        //matakuliah
        'mataKuliah' => [
            ['namaMataKuliah' => 'Matematika'],
            ['namaMataKuliah' => 'IPS'],
            ['namaMataKuliah' => 'Fisika']
        ],
        //Hobi
        'hobi' => [
            ['namaHobi' => 'Mancing',],
            ['namaHobi' => 'Bersantay ria']
        ],
        //dosen
        'namaDosen' => 'Ujang Betok'
    ],

    //mahasiswa 5
    [
        'namaMahasiswa' => 'Superi',
        //matakuliah
        'mataKuliah' => [
            ['namaMataKuliah' => 'Matematika'],
            ['namaMataKuliah' => 'IPS'],
            ['namaMataKuliah' => 'Fisika']
        ],
        //Hobi
        'hobi' => [
            ['namaHobi' => 'Mancing',],
            ['namaHobi' => 'Bersantay ria']
        ],
        //dosen
        'namaDosen' => 'Ujang Betok'
    ],

    //mahasiswa 6
    [
        'namaMahasiswa' => 'Unda Han',
        //matakuliah
        'mataKuliah' => [
            ['namaMataKuliah' => 'Matematika'],
            ['namaMataKuliah' => 'IPS'],
            ['namaMataKuliah' => 'Fisika']
        ],
        //Hobi
        'hobi' => [
            ['namaHobi' => 'Mancing',],
            ['namaHobi' => 'Bersantay ria']
        ],
        //dosen
        'namaDosen' => 'Ujang Betok'
    ],



];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multi</title>
</head>

<body>
    <center>
        <table border="1" style="width: 90%;">

            <tr>
                <th>No</th>
                <th>Nama Mahaiswa</th>
                <th>Nama Dosen</th>
                <th>Nama Mata Kuliah</th>
                <th>Hobi</th>
            </tr>

            <tr>
                <?php foreach ($dataMahasiswa as $mahasiswa) {
                    $index += 1;
                ?>
                    <td style="text-align: center;"><?php echo $index; ?></td>
                    <td style="text-align: center;"><?php echo $mahasiswa['namaMahasiswa']; ?></td>
                    <td style="text-align: center;"><?php echo $mahasiswa['namaDosen']; ?></td>
                    <td style="text-align: center;">
                        <?php foreach ($mahasiswa['mataKuliah'] as $makul) { ?>
                            <ul>
                                <li> <?php echo $makul['namaMataKuliah']; ?></li>
                            </ul>
                        <?php } ?>
                    </td>
                    <td style="text-align: center;">
                        <?php foreach ($mahasiswa['hobi'] as $hobi) { ?>
                            <ul>
                                <li><?php echo $hobi['namaHobi']; ?></li>
                            </ul>

                        <?php } ?>
                    </td>
            </tr>
            <?php } ?>
        
        </table>
    </center>

</body>

</html>