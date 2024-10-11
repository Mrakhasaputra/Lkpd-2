<?php

$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80,78,82,78,88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86,70,80,85,81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83,91,70,73,81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89,85,84,86,88],
    ],
];

foreach($students as $student){
    $name = $student['nama'];
// menjumlahkan semua angka yang ada di array
    $jumlah = array_sum($student['nilai']);
// menghitung berapa banyak angka yang ada di array 
    $count = count($student['nilai']);
    $bagi = $jumlah / $count;
    
    echo $name . " = " . $bagi . "<br>";
}

?>