<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai Siswa</title>
</head>

<body>
    <fieldset>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Masukan Jumlah Data</th>
                    <td>: <input type="number" name="row" min="1"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><button type="submit" name="inputValue">Masukan</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>

    <?php
    if (isset($_POST['inputValue'])) {
        $row = $_POST['row'];

    ?>
        <fieldset>
            <legend>Input Nilai Siswa</legend>
            <table>
                <form action="output.php" method="post">
                    
                    <?php
                    for ($i = 1; $i <= $row; $i++) {
                    ?>
                        <tr>
                            <th colspan="2"> Data ke <?php echo $i; ?></th>
                            <td>Nama</td>
                            <td><input type="text" name="nama[]" required></td>
                        </tr>
                        <tr>
                            <th colspan="2"></th>
                            <td>Asal Sekolah</td>
                            <td><input type="text" name="asalSekolah[]" required></td>
                        </tr>

                        <tr>
                            <th colspan="2"></th>
                            <td>Nilai Bahasa Indonesia</td>
                            <td><input type="number" name="nilaiIndonesia[]" min="1" max="100" required></td>
                        </tr>

                        <tr>
                            <th colspan="2"></th>
                            <td>NIlai Matematika</td>
                            <td><input type="number" name="nilaiMatematika[]" min="1" max="100" required></td>
                        </tr>

                        <tr>
                            <th colspan="2"></th>
                            <td>Nilai Bahasa Inggris</td>
                            <td><input type="number" name="nilaiInggris[]" min="1" max="100" required></td>
                        </tr>

                        <tr>
                            <th colspan="2"></th>
                            <td>Nilai Ilmu Pengetahuan Alam</td>
                            <td><input type="number" name=nilaiIpa[]" min="1" max="100" required></td>
                        </tr>

                    <?php } ?>

                    <tr>
                        <th></th>
                        <td><button type="submit" name="input">Masukan</button></td>
                    </tr>

                <?php } ?>

                </form>
            </table>
        </fieldset>
</body>

</html>