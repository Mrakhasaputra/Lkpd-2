
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <input type="number" name="lamaKerja" required>
        <input type="submit" name="submit">
    </form>

    <?php
echo "<br>";
if(isset($_POST['submit'])){

$lamaKerja = $_POST['lamaKerja'];

$jamLebih = $lamaKerja - 8;


if($lamaKerja > 8){
    $angka = ($jamLebih - 1 ) * 25;
    $angka += 50;
}

echo "Lama Kerja :  $lamaKerja <br>";
echo "Jam Lebih : $jamLebih <br>";
echo "Jumlah Kompensasi : $angka <br>";
}
?>

    </center>
</body>
</html>
