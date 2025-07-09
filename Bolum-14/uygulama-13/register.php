<?php

    //buradaki değişkenleri variables klasorune ekledik
    require "libs/variables.php";
    //buradaki fonksiyonları functions klasorune ekledik
    require "libs/functions.php";


?>
<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

<?php
    $username=$email=$password=$repassword=$city="";
    $usernameErr=$emailErr=$passwordErr=$repasswordErr=$cityErr=$hobilerErr="";
    $hobiler=[];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        
        if(empty($_POST["username"])){
            $usernameErr="Kullanıcı adı boş geçilemez"."<br>";
        }else{
            $username=safe_html($_POST["username"]);
        }
        if(empty($_POST["email"])){
            $emailErr="E-posta boş geçilemez"."<br>";
        }else{
            $email=safe_html($_POST["email"]);
        }
        if(empty($_POST["password"])){
            $passwordErr= "Şifre boş geçilemez"."<br>";
        }else{
            $password=safe_html($_POST["password"]);
        }
        if($_POST["password"]!=$_POST["repassword"]){
            $repasswordErr= "Parola tekrar alanı eşleşmiyor!"."<br>";
        }else{
            $repassword=safe_html($_POST["repassword"]);
        }
        if($_POST["city"]==-1){
            $cityErr= "Lütfen şehir seçiniz."."<br>";
        }else{
            $city=$_POST["city"];
        }
        if(!isset($_POST["hobiler"])){
            $hobilerErr= "Hobiler boş geçilemez"."<br>";
        }else{
            $hobiler=$_POST["hobiler"];
        }


    }
?>
    <!-- div.container yaz enter bas -->
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <form action="register.php" method="post">
                    <div class="mb-3">
                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" name="username" id="form-control" value="<?php echo $username;?>">
                        <div class="text-danger"><?php echo $usernameErr;?></div>
                    </div>
                    <div class="mb-3">
                        <label for="email">E-posta</label>
                        <input type="email" name="email" id="form-control" value="<?php echo $email;?>">
                        <div class="text-danger"><?php echo $emailErr;?></div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola</label>
                        <input type="password" name="password" id="form-control" value="<?php echo $password;?>">
                        <div class="text-danger"><?php echo $passwordErr;?></div>
                    </div>
                    <div class="mb-3">
                        <label for="repassword">Parola Tekrar</label>
                        <input type="password" name="repassword" id="form-control">
                        <div class="text-danger"><?php echo $repasswordErr;?></div>
                    </div>
                     <div class="mb-3">
                        <label for="city">Şehir</label>
                        <select name="city" class="form-select" > 
                            <option value="-1" selected>Şehir Seçiniz</option>

                            <?php foreach ($sehirler as $plaka=>$sehir):?>
                                <option value="<?php echo $plaka;?>"
                                    <?php echo $city==$plaka? ' selected':'' ?>>
                                        <?php echo $sehir;?>
                                </option>
                            <?php endforeach;?>
                        </select>
                        <div class="text-danger"><?php echo $cityErr;?></div>
                    </div>
                    <div class ="mb-3">
                        <label for="hobiler">Hobiler</label>
                            <?php foreach($hobilerArray as $id => $hobi):?>
                                <div class="form-check">
                                    <input type="checkbox" name="hobiler[]" 
                                    value="<?php echo $hobi;?>" 
                                    id="hobiler_<?php echo $id;?>"
                                    <?php if(in_array($hobi,$hobiler)) echo 'checked'?>
                                    >
                                    <label for="hobiler_<?php echo $id;?>"class="form-check-label"><?php echo $hobi;?></label>
                                </div>
                            <?php endforeach;?>                       
                        
                        <div class="text-danger"><?php echo $hobilerErr;?></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                </form>
            </div>
        </div>       
        
    </div>
<?php include "partials/_footer.php"?>