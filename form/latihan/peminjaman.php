<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Mobil</title>
</head>

<body>
    <form action="verifikasi.php" method="post">
        <fieldset>
            <legend>
                <h1>Peminjaman Mobil</h1>
            </legend>

            <table>
                <tr>
                    <td>
                        <label for="namaPeminjam">Masukan nama peminjam</label>
                    </td>
                    <td>
                        <input type="text" name="namaPeminjam" id="namaPeminjam" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="nik">Masukan NIK</label>
                    </td>
                    <td>
                        <input type="number" name="nikPeminjam" id="nik" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        Jenis Kelamin
                    </td>
                    <td>
                        <label for="l">
                            <input type="radio" name="jk" id="l" value="Laki-laki" required>
                            Laki-laki
                        </label>

                        <label for="p">
                            <input type="radio" name="jk" id="p" value="Perempuan" required>
                            Perempuan
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="agama">agama</label>
                    </td>
                    <td>
                        <select name="agama" id="agama" required>
                            <option value="">Pilih agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="namaMobil">Nama Mobil</label>
                    </td>
                    <td>
                        <input type="text" name="namaMobil" id="namaMobil" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="jenisMobil">Pilih Jenis Mobil</label>
                    </td>
                    <td>
                        <select name="jenisMobil" id="jenisMobil" required>
                            <option value="">Pilih Jenis Mobil</option>
                            <option value="Sedan">Sedan</option>
                            <option value="Sport">Sport</option>
                            <option value="SUB">Suv</option>
                            <option value="Keluarga">Keluarga</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="merekMobil">Merek Mobik</label>
                    </td>
                    <td>
                        <select name="merekMobil" id="merekMobil" required>
                            <option value="">Pilih merek mobil</option>
                            <option value="TOYOTA">Toyota</option>
                            <option value="SUPRA">Supra</option>
                            <option value="NISAN">Nisan</option>
                            <option value="KIJANG">Kujang</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="platMobil">No Plat Mobil</label>
                    </td>
                    <td>
                        <input type="text" name="platMobil" id="platMobil" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="tanggalPeminjaman">Tanggal Peminjaman</label>
                    </td>
                    <td>
                        <input type="date" name="tanggalPeminjaman" id="tanggalPeminjaman" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="tanggalKembali">TanggalKembali</label>
                    </td>
                    <td>
                        <input type="date" name="tanggalKembali" id="tanggalKembali" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="penjamin">penjamin</label>
                    </td>
                    <td>
                        <select name="penjamin" id="penjamin" required>
                            <option value="">Pilih Jaminan</option>
                            <option value="Fotocopy KTP">FotoCopy KTP</option>
                            <option value="Fotocopy SIM">FotoCopy SIM</option>
                            <option value="Fotocopy KK">FotoCopy KK</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="supir">Apakah anda akan menggunakan supir</label>
                    </td>
                    <td>
                       <select name="supir" id="supir" required>
                           <option value="">Putuskan</option>
                           <option value="Ya">Ya</option>
                           <option value="tidak">Tidak</option>
                       </select>
                    </td>
                </tr>
            </table>


            <button type="submit" name="masukan">
                Masukan
            </button>

        </fieldset>
    </form>
</body>

</html>