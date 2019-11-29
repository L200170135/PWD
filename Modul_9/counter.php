<html>
    <?php 
        session_start(); 
        error_reporting(E_ALL^E_NOTICE);
    ?>
    <head>
        <title>Mengakses data session</title>
    </head>
    <body>
        <?php 
            $_SESSION['counter']++;
            $_SESSION['nama_pengunjung']."<br>";
            echo"anda telah mengunjungi halaman ini sebanyak ".$_SESSION['counter']."kali";
        ?>
    </body>
</html>