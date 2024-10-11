<?php

$bilangan1 = [80,77,65,89,55,12,90,86];
$bilangan2 = [77,99,55,81,45,90,91,98];
// mencari angka yang sama dari kedua array
$ada = array_intersect($bilangan1, $bilangan2);
// mencari angka yang berbeda dari kedua array
$tidak = array_diff($bilangan1, $bilangan2);

echo "Bilangan yang ada di kedua variabel <br>" . implode(', ', $ada);
echo "<br>";
echo "<br>";
echo "Bilangan yang tidak ada dikedua variabel <br>" . implode(',', $tidak);


?>