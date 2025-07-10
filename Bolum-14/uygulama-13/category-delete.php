<?php

    //buradaki değişkenleri variables klasorune ekledik
    require "libs/variables.php";
    //buradaki fonksiyonları functions klasorune ekledik
    require "libs/functions.php";

    session_start();
    $id=$_GET["id"];
                
    if(deleteCategory($id)){

        $_SESSION["message"]=$id." numaralı kategori silindi.";
        $_SESSION["type"]="danger";
        header("location: admin-categories.php");
    }else{
        echo "hata";
    }


?>
