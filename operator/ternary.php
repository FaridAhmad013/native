<?php

$nilaiAkademi = 80;
$nilaiAtletik = 85;

echo "Nilai akademik: <b>{$nilaiAkademi}</b><br> Nilai Atletik: <b>{$nilaiAtletik}</b> <br> Dinyatakan : ";
echo $nilaiAkademi > 85 && $nilaiAtletik > 83 ? '<b><lulus/b>' : '<b>tidak</b>';
