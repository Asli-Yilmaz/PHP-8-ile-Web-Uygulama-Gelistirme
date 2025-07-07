<?php

    //buradaki değişkenleri variables klasorune ekledik
    require "libs/variables.php";
    //buradaki fonksiyonları functions klasorune ekledik
    require "libs/functions.php";

    //login butonuna basılmış mı
    if(isset($_POST["login"])){
        $username=$_POST["username"];
        $password=$_POST["password"];

        if($username==db_username && $password==db_password){
            setcookie("username",$username,time()+(60*60*24));
            setcookie("auth",true,time()+(60*60*24));

            //kullanıcıyı index.php sayfasına yönlendirir.
            header("location:index.php");
        }else{
            echo "<div class='alert alert-danger mb-0 text-center'>Kullanıcı adı veya parola hatalı!</div>";
        }
    }

?>
<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

<div class="container my-3">

<div class="row">
        <div class="col-12">
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" name="username" id="form-control" >
                        
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" id="form-control" >
                        
                </div>                    
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
        </div>
</div>
</div> 
        
<?php include "partials/_footer.php"?>