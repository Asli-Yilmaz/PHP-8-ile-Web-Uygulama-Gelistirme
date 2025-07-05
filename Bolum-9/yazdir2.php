<?php
    if(!empty($_POST)){
    
    $username= $_POST['username'];
    $password= $_POST['password'];

    echo $username." ".$password;
    }
?>