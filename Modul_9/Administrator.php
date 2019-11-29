<?php 
    session_start();
    if($_SESSION['status']==''){
?>
    <script>
        alert('Anda Tidak bisa mengakses halaman ini');
        document.location='login.php';</script>
    <?php
    }
    else if($_SESSION['status']!='Administrator'){
    ?>
    <script>
        alert('Anda Tidak bisa mengakses halaman ini');
        document.location='<?php echo $_SESSION['status'] ?>.php'</script>
    <?php
    }else{
        echo"
        <center><font color='blue'>
            <h1>HALAMAN ADMIN</h1><br>
            <a href=logout.php>LOGOUT</font>
        </center>";
    }
?>