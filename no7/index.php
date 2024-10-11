<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
    </style>

</head>
<body>
    <center>
    <form action="" method="post">
        <input type="text" name="nama1" required>
        <input type="text" name="nama2" required>
        <input type="submit" name="btn">
    </form>

    <?php
echo"<br>";
if(isset($_POST['btn'])){

$nama1 = $_POST['nama1'];
$nama2 = $_POST['nama2'];
// menghitung jumlah karakter dalam sebuah string
$jumlah1 = strlen($nama1);
$jumlah2 = strlen($nama2);
// menghitung selisih antara dua variabel
$selisih = abs($jumlah1 - $jumlah2);

if($nama1 > $nama2){
    $result = $nama1 . " memiliki jumlah lebih banyak dari " . $nama2 . " : Selisih $selisih karakter"; 
}else{
    $result = $nama1 . " memiliki jumlah lebih sedikit dari " . $nama2 . " : Selisih $selisih karakter"; 
}

echo "Nama Pertama : " . $nama1. "<br>";
echo "Nama Kedua : " . $nama2. "<br>" ;
echo $result.  "<br>" ;

}
?>

    </center>
</body>
</html>