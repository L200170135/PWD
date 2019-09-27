<html>
<head>
<title>Ganjil Genap</title>
</head>
<body>
<form method='POST' action='tugas2.php'>
<p>Masukkan bilangan : <input type='text' name='a' size='10'></p>
<p><input type='submit' value='Submit' name='submit'></p>
</form>
<?php 
error_reporting (E_ALL ^ E_NOTICE);
$gg = $_POST['a'];
$submit = $_POST['submit'];
if($submit){
    $mod=$gg%2;
    if($mod=='1'){
        echo"Nilai yang dimasukkan adalah bilangan ganjil";
    }else{
        echo"Nilai yang dimasukkan adalah bilangan genap";
    }
}
?>

</body>
</html>