<?php 
    $biodata = [
        'Farid AHmad' => 100,
        'Cecep Superi' => 90,
        'ikbal' => 40,
    ];

    foreach($biodata as $nama => $nilai){
        $ket = $nilai <= 75 ? 'anda tidak lulus' : 'anda lulus';
        echo "Nama : $nama  <br> Nilai : $nilai <br> Keterangan: $ket<hr>";
    }
?>