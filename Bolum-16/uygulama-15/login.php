<?php

    include "libs/ayar.php";
    //buradaki değişkenleri variables klasorune ekledik
    require "libs/variables.php";
    //buradaki fonksiyonları functions klasorune ekledik
    require "libs/functions.php";

    
    if(isLoggedIn()){
        header("Location:index.php");
    }

    $username= $password  = "";
    $usernameErr = $passwordErr =$loginErr="";
    //login butonuna basılmış mı
    if(isset($_POST["login"])){

       if (empty($_POST["username"])) {
            $usernameErr = "Kullanıcı adı giriniz." . "<br>";
        } else {
            $username = safe_html($_POST["username"]);
        }
        if (empty($_POST["password"])) {
            $passwordErr = "Şifre giriniz." . "<br>";
        } else {
            $password = safe_html($_POST["password"]);
        }
        if(empty($usernameErr)&& empty($passwordErr)){
            $query="SELECT id,username, password , user_type FROM kullanicilar WHERE username=?";
            if($statement=mysqli_prepare($baglanti,$query)){
                mysqli_stmt_bind_param($statement,"s",$username);
                if(mysqli_stmt_execute($statement)){
                    mysqli_stmt_store_result($statement);
                    if(mysqli_stmt_num_rows($statement)==1){
                        //parola kontrolü
                        mysqli_stmt_bind_result($statement,$id,$username,$hashed_password,$user_type);
                        if(mysqli_stmt_fetch($statement)){
                            if(password_verify($password,$hashed_password)){
                                $_SESSION["loggedIn"]=true;
                                $_SESSION["id"]=$id;
                                $_SESSION["username"]=$username;
                                $_SESSION["user_type"]=$user_type;
                                header("location: index.php");
                            }else{
                                $loginErr="Parola yanlış.";
                            }
                        }
                    }
                    else{
                        $loginErr="Kullanıcı adı geçersiz.";
                    }
                }else{
                    $loginErr= " Bir hata oluştu";
                }
            }
        }
        mysqli_stmt_close($statement);
        mysqli_close($baglanti);
    }

?>
<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

<?php 
    if(!empty($loginErr)){
        echo "<div class='alert alert-danger text-center'>".$loginErr."</div>";
    }
?>

<div class="container my-3">

<div class="row">
        <div class="col-12">
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" name="username" id="form-control" value="<?php echo $username; ?>">
                    <div class="text-danger"><?php echo $usernameErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" id="form-control" value="<?php echo $password; ?>">
                    <div class="text-danger"><?php echo $passwordErr; ?></div>
                </div>    
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
        </div>
</div>
</div> 
        
<?php include "partials/_footer.php"?>