<?php
    setcookie("username","",time()-60);
    setcookie("auth","",time()-60);

    header("location:login.php");

?>