<?php 

$values = [18, 45, 29, 61, 47, 34];

foreach($values as $value){

    $sisaBagi = $value % 3;
    
    echo "$value % 3 = $sisaBagi<br>";
}