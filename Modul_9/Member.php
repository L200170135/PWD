<?php 
    session_start();
    if($_SESSION['status']==''){
?>
    <script>
        alert('Anda Tidak bisa mengakses halaman ini');
        document.location='login.php';</script>
    <?php
    }
    else if($_SESSION['status']!='Member'){
    ?>
    <script>
        alert('Anda Tidak bisa mengakses halaman ini');
        document.location='<?php echo $_SESSION['status'] ?>.php'</script>
    <?php
    }else{
        echo"
        <center><font color='red'>
            <h1>HALAMAN MEMBER</h1><br>
            <a href=logout.php>LOGOUT</font>
        </center>";
    }
?>