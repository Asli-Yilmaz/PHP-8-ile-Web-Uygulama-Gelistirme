<?php
    session_start();

    if(isset($_SESSION["username"])){        
        echo $_SESSION["username"];
    }
    else {
        echo "username yok.";
    }
    echo $_SESSION["password"];

    print_r($_SESSION);

    //silme
    unset($_SESSION["username"]);
    print_r($_SESSION);

    //tüm session silinir
    session_unset();
    //veya
    $_SESSION=[]; //ile silinebilir;
?>