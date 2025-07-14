<?php

    //buradaki değişkenleri variables klasorune ekledik
    require "libs/variables.php";
    //buradaki fonksiyonları functions klasorune ekledik
    require "libs/functions.php";


?>
<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

<?php
    session_start();
    $baslik=$altBaslik=$resim=$yayinTarihi=$aciklama="";
    $baslikErr=$altBaslikErr=$resimErr=$yayinTarihiErr=$aciklamaErr="";
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        
        if(empty($_POST["baslik"])){
            $baslikErr="Başlık boş geçilemez."."<br>";
        }else{
            $baslik=safe_html($_POST["baslik"]);
        }
         if(empty($_POST["altBaslik"])){
            $altBaslikErr="Alt başlık boş geçilemez."."<br>";
        }else{
            $altBaslik=safe_html($_POST["altBaslik"]);
        }
        if(empty($_POST["aciklama"])){
            $aciklamaErr="Açıklama boş geçilemez."."<br>";
        }else{
            $aciklama=safe_html($_POST["aciklama"]);
        }
         if(empty($_FILES["imageFile"]["name"])){
            $resimErr="Resim seçiniz."."<br>";
        }else{
            uploadImage($_FILES["imageFile"]); //dosayı projeye ekler
            $resim=$_FILES["imageFile"]["name"]; //dosya ismini veritabanına ekler
        }
        if(empty($altBaslikErr) && empty($resimErr) ){
            createCourse($baslik,$altBaslik,$aciklama,$resim);
            $_SESSION["message"]=$baslik." isimli kurs eklendi.";
            $_SESSION["type"]="success";
            header("location: admin-courses.php");
        }




    }
?>
    <!-- div.container yaz enter bas -->
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <!-- dosya yükleyebilmek için enctype="multipart/form-data" kısmını eklemelisin -->
                    <form  method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="baslik">Başlık</label>
                            <input type="text" name="baslik" id="form-control" value="<?php echo $baslik;?>">
                            <div class="text-danger"><?php echo $baslikErr;?></div>
                        </div>
                        <div class="mb-3">
                            <label for="altBaslik">Alt Başlık</label>
                            <textarea name="altBaslik" class="form-control"><?php echo $altBaslik;?></textarea>
                            <div class="text-danger"><?php echo $altBaslikErr;?></div>
                        </div>
                        <div class="mb-3">
                            <label for="aciklama">Açıklama</label>
                            <textarea name="aciklama" class="form-control"><?php echo $aciklama;?></textarea>
                            <div class="text-danger"><?php echo $aciklamaErr;?></div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file" name="imageFile" id="imageFile" class="form-control">
                            <label for="imageFile" class="input-group-text">Yükle</label>                            
                        </div>
                        <div class="text-danger"><?php echo $resimErr;?></div>
                        
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>       
        
    </div>
<?php include "partials/_editor.php"?>
<?php include "partials/_footer.php"?>