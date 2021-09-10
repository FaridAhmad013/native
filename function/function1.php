<?php 

function luasSegitiga($alas = 0, $tinggi = 0){
    $luas = ($alas * $tinggi)/2;
    return $luas;
}

echo "Luas Segitiga : ".luasSegitiga(10, 8);