<?php
    setcookie("auth[username]","",time()-60);
    setcookie("auth[name]","",time()-60);

    header("location:login.php");

?>