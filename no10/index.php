<?php

$usia = [12,15,17,20,25,30,35,40,45,50];

$dewasa = 0;
$anak = 0;

echo "List Usia : ";
foreach($usia as $umur){
    if($umur >= 17){
    $dewasa++;
    }else{
        $anak++;
    }
    echo $umur.", ";
}

echo "<br>";
echo "jumlah Kategori Dewasa : " . $dewasa;
echo "<br>";
echo "Jumlah Kategori Anak-anak : " . $anak;

?>