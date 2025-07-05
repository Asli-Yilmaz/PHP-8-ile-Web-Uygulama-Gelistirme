<?php

    //buradaki değişkenleri variables klasorune ekledik
    require "../libs/variables.php";
    //buradaki fonksiyonları functions klasorune ekledik
    require "../libs/functions.php";


?>
<?php include "../partials/_header.php"?>
<?php include "../partials/_navbar.php"?>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $repassword=$_POST["repassword"];
        $city=$_POST["city"];
        $hobiler=$_POST["hobiler"];

        echo $username."<br>";
        echo $email."<br>";
        echo $password."<br>";
        echo $repassword."<br>";
        echo $city."<br>";
        foreach ($hobiler as $hobi) {
            echo $hobi."<br>";
        }
        

        echo "<prev>";
        print_r($_POST);
        echo "<prev>";


    }
?>
    <!-- div.container yaz enter bas -->
    <div class="container my-3">

        <div class="row">
            <div class="col-12">
                <form action="register.php" method="post">
                    <div class="mb-3">
                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" name="username" id="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">E-posta</label>
                        <input type="email" name="email" id="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola</label>
                        <input type="password" name="password" id="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="repassword">Parola Tekrar</label>
                        <input type="password" name="repassword" id="form-control">
                    </div>
                     <div class="mb-3">
                        <label for="city">Şehir</label>
                        <select name="city" class="form-select"> 
                            <option value="-1" selected>Şehir Seçiniz</option>
                            <option value="1" selected>Adana</option>
                            <option value="2" selected>Adıyaman</option>
                            <option value="3" selected>Afyon</option>
                            <option value="4" selected>Ağrı</option>
                        </select>
                    </div>
                    <div class ="mb-3">
                        <label for="hobiler">Hobiler</label>
                        <div class="form-check">
                            <input type="checkbox" name="hobiler[]" value="sinema" id="hobiler_0">
                            <label for="hobiler_0"class="form-check-label">Sinema</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="hobiler[]" value="spor" id="hobiler_0">
                            <label for="hobiler_0"class="form-check-label">Spor</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="hobiler[]" value="muzik" id="hobiler_0">
                            <label for="hobiler_0"class="form-check-label">Müzik</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                </form>
            </div>
        </div>       
        
    </div>
<?php include "../partials/_footer.php"?>