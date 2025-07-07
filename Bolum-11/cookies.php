<?php
    setcookie("username","asliyilmaz",time()+(60*60*24));
    //cookie verileri application altında cookies içinde tutulur
    //auth=kullanıcı uygulamaya giriş yaptı mı
    setcookie("auth","true",time()+(60*60*24));


    if(isset($_COOKIE["username"]))echo $_COOKIE["username"];
    echo "<br>";
    if(isset($_COOKIE["auth"]))echo $_COOKIE["auth"];


    //güncelleme
    setcookie("auth","false",time()+(60*60*24));

    //silme
    setcookie("auth","true",time()-(60*60));
?>