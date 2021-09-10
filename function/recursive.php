<?php 

function factorial($n){
    if($n > 2){
        return $n*factorial($n-1);
    }else{
        return $n;
    }
}

echo factorial(5);
