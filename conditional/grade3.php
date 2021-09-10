<?php

$nilaiSaya = 90;

if ($nilaiSaya >= 90) {
    $grade = "A";
} else if ($nilaiSaya >= 80) {
    $grade = "B";
} else if ($nilaiSaya >= 70) {
    $grade = "C";
} else if ($nilaiSaya >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}

switch ($grade) {
    case "A":
        $ket = "Pertahankan";
        break;
    case "B":
        $ket = "Harus lebih baik lagi";
        break;
    case "C":
        $ket = " Perbanyak Belajar";
        break;
    case "D":
        $ket = "Jangan keseringan main";
        break;
    case "E":
        $ket = "Kebanyakan Bolos";
        break;
    default:
        $ket = "Format tidak sesuai";
}

echo "Nilai : $nilaiSaya <br>";
echo "Grade : $grade <br>";
echo "Keterangan: $ket";
