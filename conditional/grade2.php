<?php 

$grade = "C";

switch($grade){
    case "A": 
        echo "Pertahankan";
    break;
    case "B":
        echo "Harus lebih baik lagi";
    break;
    case "C":
        echo "Perbanyak Belajar";
    break;
    case "D":
        echo "Jangan keseringan main";
    break;
    case "E": 
        echo "Kebanyakan Bolos";
    break;
    default: 
    echo "Format tidak sesuai";
}