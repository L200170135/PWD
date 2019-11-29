<html>
    <?php 
        session_start(); 
        $id_session=session_id();
        echo"session id anda adalah".$id_session;
        echo"<br><br>";
        session_destroy();

        $id_session2=session_id();
        echo"session id anda setelah data session di-destroy adalah".$id_session2;
        echo"<br><br>";
        
    ?>
    <head>
        <title>Destroy</title>
    </head>
    <body>
    </body>
</html>