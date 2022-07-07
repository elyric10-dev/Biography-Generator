<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "elyricmanatad";
    $connect = mysqli_connect($host, $user, $pass, $db);

    if(!$connect){
        die("<script>alert('NOT CONNECTED!')</script>");
    }
    
?>