<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <fieldset>
        <legend>Biodata</legend>
        <form action="" method="post">
            <table>

            <!-- Nama-->
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>

                <!-- Jenis Kelamin-->
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><label for="laki-laki">
                    <input type="radio" name="jk" id="laki-laki" value="Laki-laki">
                    Laki-laki
                    </label>
                    <label for="perempuan">
                        <input type="radio" name="jk" id="perempuan" value="Perempuan">
                        Perempuan
                    </label>
                </td>
                </tr>

                <!-- Tanggal Lahir-->
                <tr>
                    <td><label for="tanggalLahir">Tanggal Lahir</label></td>
                    <td>:</td>
                    <td><input type="date" name="tanggalLahir" id="tanggalLahir"></td>
                </tr>

                <!--Agama-->
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select></td>
                </tr>

                <!-- Alamat-->
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td>:</td>
                    <td>
                        <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
                    </td>
                </tr>

                <!-- hobi -->
                <tr>
                    <td><label for="hobi">Hobi</label></td>
                    <td>:</td>
                    <td>
                    <label for="mancing">
                    <input type="checkbox" name="hobi[]" id="mancing" value="Mancing">
                    Mancing
                    </label>

                    <label for="tidur">
                    <input type="checkbox" name="hobi[]" id="tidur" value="Tidur">
                    Tidur
                    </label>

                    <label for="nontonYT">
                    <input type="checkbox" name="hobi[]" id="nontonYT" value="Nonton Youtube">
                    Nonton Youtube
                    </label>

                   <label for="bacaNovel">
                   <input type="checkbox" name="hobi[]" id="bacaNovel" value="Membaca Novel">   
                   Membaca Novel
                   </label>

                    <label for="bersantay">
                    <input type="checkbox" name="hobi[]" id="bersantay" value="Bersantay Ria">    
                    bersantay
                    </label>

                    <label for="ngoding">
                    <input type="checkbox" name="hobi[]" id="ngoding" value="Ngoding">
                    Ngoding
                    </label>
                    </td>
                </tr>

                <tr>
                    <td><button type="submit" name="input">Input</button></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            
        </form>
    </fieldset>
</body>
</html>

<?php 

if(isset($_POST['input'])){
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobies = $_POST['hobi'];

    function biodata($nama, $jk, $tanggalLahir, $agama, $alamat, $hobies){
        $biodata = "Nama : $nama <br>";
        $biodata .= "Jenis Kelamin : $jk <br>";
        $biodata .= "Tanggal Lahir : $tanggalLahir <br>";
        $biodata .= "Agama : $agama <br>";
        $biodata .= "Alamat : $alamat <br>";
        $biodata .= "Hobi : ". implode(", ", $hobies);
        return $biodata;
    }

    echo biodata($nama, $jk, $tanggalLahir, $agama, $alamat, $hobies);
}