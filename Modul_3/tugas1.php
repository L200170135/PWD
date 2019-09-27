<html>
<head>
<title>Program Penjumlahan</title>
</head>
<body>
<form method='POST' action='tugas1.php'>
<p>Nilai A adalah : <input type='text' name='a' size='10'></p>
<p>Nilai B adalah : <input type='text' name='b' size='10'></p>
<p><input type='submit' value='Jumlahkan' name='submit'></p>
</form>
<?php 
error_reporting (E_ALL ^ E_NOTICE);
$nilaiA = $_POST['a'];
$nilaiB = $_POST['b'];
$submit = $_POST['submit'];
if($submit){
    $jumlah = $nilaiA+$nilaiB;
    echo"<br/>Nilai A adalah : $nilaiA";
    echo"<br/>Nilai B adalah: $nilaiB";
    echo"<br/>Jadi, Nilai A ditambah Nilai B adalah $jumlah";
}
?>

</body>
</html>