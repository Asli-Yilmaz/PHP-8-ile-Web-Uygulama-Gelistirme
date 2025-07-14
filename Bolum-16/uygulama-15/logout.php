<?php
    session_start();
    //session sıfırlama
    $_SESSION=array();
    session_destroy();

    header("location:login.php");

?>