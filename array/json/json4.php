<?php 

$dataMahasiswa = '[
    {"nama":"Mahmud", "domisili":"Bandung"},
    {"nama":"Udin", "domisili":"Bandung"},
    {"nama":"Encep", "domisili":"Bandung"},
    {"nama":"Entis", "domisili":"Bandung"}
]';

$data = json_decode($dataMahasiswa);

foreach($data as $mahasiswa){
    echo "Nama : {$mahasiswa->nama} <br>";
    echo "Domisili : {$mahasiswa->domisili}";
    echo "<hr>";
}