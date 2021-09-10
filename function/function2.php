<?php 

function hitungUmur($tahunLahir, $tahunSekarang){
    $umur = $tahunSekarang-$tahunLahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan Nama saya $nama <br>";
    echo "Saya Berusia :".hitungUmur(2004, 2021)." Tahun <br>";
    echo "Senang berkenalan dengan Anda";
}

echo perkenalan("Farid");