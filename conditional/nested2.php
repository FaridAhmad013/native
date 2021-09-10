<?php 

$kartuMember = "tidak";
$totalBelanja = 50000;
$diskon = 0;

if($kartuMember == "ya"){
    
    if($totalBelanja >= 250000){
        $diskon = $totalBelanja * 0.1;
    }else if($totalBelanja >= 100000){
        $diskon = $totalBelanja * 0.05;
    }else{
       $diskon = "Tidak mendapatkan diskon";
    }

}else {
    if($totalBelanja >= 100000){
        $diskon = $totalBelanja * 0.025;
    }else{
         $diskon = "Tidak mendapatkan diskon";
    }
}

echo "Kartu member: <b>$kartuMember</b> <br>";
echo "Total belanja: <b>$totalBelanja</b> <br>";
echo "Diskon: <b>$diskon</b> <br>";
$totalBelanja -= $diskon;
echo "Yang harus dibayar: <b>$totalBelanja</b>";

