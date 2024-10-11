<?php

$uang = 140500;
$pecahanUang = [100000,50000,20000,10000,5000,2000,1000,500];
// memformat angka dengan menambahkan pemisah ribuan dan desimal
echo "Uang : " . number_format($uang) ."<br>" . "Lembar Rupiah :" . "<br>" . "<br>";
foreach($pecahanUang as $pchUang){
// mengubah sebuah nilai menjadi tipe integer (bilangan bulat)
    $bagiUang = intval($uang / $pchUang) ;
        if($bagiUang > 0 ){
            $uang %= $pchUang;
            echo "Rp.".number_format($pchUang) . " : " . $bagiUang. "<br>";
    }
}


?>
