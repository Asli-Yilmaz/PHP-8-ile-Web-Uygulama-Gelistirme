<?php

    include "libs/ayar.php";
    //buradaki değişkenleri variables klasorune ekledik
    require "libs/variables.php";
    //buradaki fonksiyonları functions klasorune ekledik
    require "libs/functions.php";


?>
<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

<?php 
    if(!isLoggedIn()){
        header("location: login.php"); 
    }        
    
?>

<div class="container my-3">

<div class="row">
        <div class="col-12">
            <div class='alert alert-danger text-center'>Bu alana yetkiniz bulunmamaktadır.</div>;
        </div>
</div>
</div> 
        
<?php include "partials/_footer.php"?>