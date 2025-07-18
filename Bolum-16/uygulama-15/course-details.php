<?php

    //buradaki değişkenleri variables klasorune ekledik
    require "libs/variables.php";
    //buradaki fonksiyonları functions klasorune ekledik
    require "libs/functions.php";

    if(!isset($_GET["id"]) or !is_numeric($_GET["id"])){
        header("location:index.php");
    }
    $sonuc=getCourseById($_GET["id"]);
    $course=mysqli_fetch_assoc($sonuc);

?>

<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>
    <!-- div.container yaz enter bas -->
    <div class="container my-3">
        <div class="card">
            <div class="row">
                <div class="col-4">
                    <!-- alt değerlerini girmek seo geliştirir -->
                    <img src="img/<?php echo $course["resim"];?>" alt="<?php echo $course["baslik"];?>" class="img-fluid">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h1 class="h4 card-title"><?php echo $course["baslik"];?></h1>
                        <p class="card-text"><?php echo $course["altBaslik"];?></p>
                        <hr>
                        <p class="card-text"><?php echo htmlspecialchars_decode($course["aciklama"]);?></p>
                    </div>
                </div>
            </div>       
        </div>
    </div>
<?php include "partials/_footer.php"?>