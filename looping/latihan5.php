<?php 


$value = 0;
for($i=1; $i<=10; $i++){
     $value +=  2;
    for($j = 1; $j <= $i; $j++){
        echo $j+$value." ";
    }
    echo "<br>";
}

echo "<hr>";

for($i=1; $i<=5; $i++){
    for($j=1; $j<=5; $j++){
        echo $j+$i." ";
    }
    echo "<br>";
}   