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
        <input type="text" name="teks" required>
        <button name="btn" >submit</button>
    </form>

    <?php   
echo "<br>";
if(isset($_POST['btn']) ){
    $teks = $_POST['teks'];

function cetak($teks) {
// mencari semua angka dalam string
    preg_match_all('/\d+/', $teks, $matches);

    if (!empty($matches[0])) {
// mengambil angka pertama dari array
        $digit = $matches[0][0];
// memisahkan angka pertama 
        $pisah = str_split($digit);
// menggabungkan array menjadi string dan dipisahkan oleh tanda koma(,)
        $angka = implode(',', $pisah);
        return "Teks Mengandung angka: " . $angka;
    } else {
        return "Teks Tidak Mengandung angka";
    }
}

$hasil = cetak($teks);
echo $teks . "<br>";
echo $hasil;

}

?>

    </center>
</body>
</html>

