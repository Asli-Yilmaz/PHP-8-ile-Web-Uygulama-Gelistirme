<?php
include "libs/ayar.php";
//buradaki değişkenleri variables klasorune ekledik
require "libs/variables.php";
//buradaki fonksiyonları functions klasorune ekledik
require "libs/functions.php";


?>
<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>

<?php
$username = $email = $password = $repassword = "";
$usernameErr = $emailErr = $passwordErr = $repasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["username"])) {
        $usernameErr = "Kullanıcı adı boş geçilemez" . "<br>";
    }elseif(strlen($_POST["username"])<5 or strlen($_POST["username"])>20){
        $usernameErr = "Kullanıcı adı 5-20 karakter aralığında olmalıdır." . "<br>";
    } 
    else {
        $sql="SELECT id FROM kullanicilar WHERE username=?";
        if($stmt=mysqli_prepare($baglanti,$sql)){
            $param_username=safe_html($_POST["username"]);
            mysqli_stmt_bind_param($stmt,"s",$param_username);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)==1){
                    $usernameErr="Kullanıcı adı alınmış. Lütfen başka bir kullanıcı adı deneyin.";
                }else{
                    $username=safe_html($_POST["username"]);
                }

            }else{
                echo mysqli_error($baglanti);
                echo "Hata oluştu.";
            }
        }
        $username = safe_html($_POST["username"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "E-posta boş geçilemez" . "<br>";
    }elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $emailErr = "E-posta formatına uyulmalıdır";
    } else {
        $sql="SELECT id FROM kullanicilar WHERE email=?";
        if($stmt=mysqli_prepare($baglanti,$sql)){
            $param_username=safe_html($_POST["email"]);
            mysqli_stmt_bind_param($stmt,"s",$param_username);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)==1){
                    $emailErr="Bu email adına hesap mevcut. Lütfen başka bir email adresi deneyin.";
                }else{
                    $email=safe_html($_POST["email"]);
                }

            }else{
                echo mysqli_error($baglanti);
                echo "Hata oluştu.";
            }
        }
        $email = safe_html($_POST["email"]);
    }
    if (empty($_POST["password"])) {
        $passwordErr = "Şifre boş geçilemez" . "<br>";
    } else {
        $password = safe_html($_POST["password"]);
    }
    if ($_POST["password"] != $_POST["repassword"]) {
        $repasswordErr = "Parola tekrar alanı eşleşmiyor!" . "<br>";
    } else {
        $repassword = safe_html($_POST["repassword"]);
    }

    if(empty($usernameErr)&&empty($passwordErr)&&empty($repasswordErr)){
        addNewUser($username,$email,$password);
    }

}
?>
<!-- div.container yaz enter bas -->
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <!--novalidate ile validasyon işleri html5 den alınıp server tarafına verilir -->
            <form action="register.php" method="post" novalidate>
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" name="username" id="form-control" value="<?php echo $username; ?>">
                    <div class="text-danger"><?php echo $usernameErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="email">E-posta</label>
                    <input type="email" name="email" id="form-control" value="<?php echo $email; ?>">
                    <div class="text-danger"><?php echo $emailErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" name="password" id="form-control" value="<?php echo $password; ?>">
                    <div class="text-danger"><?php echo $passwordErr; ?></div>
                </div>
                <div class="mb-3">
                    <label for="repassword">Parola Tekrar</label>
                    <input type="password" name="repassword" id="form-control">
                    <div class="text-danger"><?php echo $repasswordErr; ?></div>
                </div>
                <button type="submit" class="btn btn-primary">Kayıt Ol</button>
            </form>
        </div>
    </div>
</div>
<?php include "partials/_footer.php" ?>