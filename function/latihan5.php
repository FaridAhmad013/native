<?php 

function nilaiMinimal($index = 0){
     $data = [90, 80, 60, 100, 127, 81, 51, 99];
     sort($data);
     if($index < count($data)){
        $hasil = "$data[$index] ".nilaiMinimal($index +1);
        return $hasil;
     }

}

function nilaiMaximal($index = 0){
    $data = [90, 80, 60, 100, 127, 81, 51, 99];
    rsort($data);
    if($index < count($data)){
       $hasil = "$data[$index] ".nilaiMaximal($index +1);
       return $hasil;
    }

}


echo "Nilai Minimal : ".nilaiMinimal();
echo "<br>";
echo "Nilai Maximal : ".nilaiMaximal();