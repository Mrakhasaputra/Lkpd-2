<?php

$data = [80,90,75,100,85,100,66];
$cari = 100;
// menghitung jumlah kemunculan angka dalam array
$apawe = array_count_values($data);

echo "Jumlah Angka " . $cari . " = " . $apawe[$cari];

?>