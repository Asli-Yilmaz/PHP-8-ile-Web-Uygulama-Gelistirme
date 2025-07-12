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

    $id=$_GET["id"];
    $sonuc=getCourseById($id);
    $selectedCourse=mysqli_fetch_assoc($sonuc);
    $category=0;
    $baslik=$altBaslik=$resim="";
    $baslikErr=$altBaslikErr=$resimErr=$categoryErr="";
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
        if(empty($_FILES["imageFile"]["name"])){
            $resim=$selectedCourse["resim"];
        }else{
            uploadImage($_FILES["imageFile"]); //dosayı projeye ekler
            $resim=$_FILES["imageFile"]["name"]; //dosya ismini veritabanına ekler
        }
        if($_POST["category"]==0){
            $categoryErr="Kategori bigisi boş geçilemez."."<br>";
        }else{
            $category=safe_html($_POST["category"]);
        }

        $onay=$_POST["onay"]=="on"?1:0;

        if(empty($baslikErr) && empty($altBaslikErr) && empty($resimErr) && empty($categoryErr)){
            editCourse($id,$baslik,$altBaslik,$resim,$category,$onay);
            $_SESSION["message"]=$baslik." isimli kurs güncellendi.";
            $_SESSION["type"]="success";
            header("location: admin-courses.php");
        }


    }
?>
    <!-- div.container yaz enter bas -->
    <div class="container my-3">
        <div class="card card-body">
            <div class="row">
                <div class="col-9">                
                    <form  method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="baslik">Başlık</label>
                            <input type="text" name="baslik" id="form-control" value="<?php echo $selectedCourse["baslik"];?>">
                            <div class="text-danger"><?php echo $baslikErr;?></div>
                        </div>
                        <div class="mb-3">
                            <label for="altBaslik">Alt Başlık</label>
                            <textarea name="altBaslik" class="form-control"><?php echo $selectedCourse["altBaslik"];?></textarea>
                            <div class="text-danger"><?php echo $altBaslikErr;?></div>
                        </div>
                        <div>
                            <div class="input-group mb-3">
                                <input type="file" name="imageFile" id="imageFile" class="form-control">
                                <label for="imageFile" class="input-group-text">Yükle</label>                            
                            </div>
                            <div class="text-danger"><?php echo $resimErr;?></div>
                            
                        </div>              
                        
                        <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="onay" name="onay" 
                            <?php echo $selectedCourse["onay"]?"checked":"" ?>>
                        <label class="form-check-label" for="onay">
                        Onay
                        </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Güncelle</button>
                    </form>
                </div>
                <div class="col-3">
                    <img src="img/<?php echo $selectedCourse["resim"];?>" class="fluid" alt="">
                    <hr>
                    <?php foreach(getCategories() as $c):?>
                        <div class="form-check">
                            <label for="category_<?php echo $c["id"]?>"><?php echo $c["kategori_adi"]?></label>
                            <input type="checkbox"  id="category_<?php echo $c["id"]?>" class="form-check-input"
                                <?php
                                    $selectedCategories=getCategoriesById($selectedCourse["id"]);
                                    foreach($selectedCategories as $cat){
                                        if($cat["id"]==$c["id"]){
                                            echo "checked";
                                            break;
                                        }
                                    }
                                ?>
                            
                            >
                        </div>
                    <?php endforeach;?>

                    <hr>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="onay" name="onay" 
                            <?php echo $selectedCourse["onay"]?"checked":"" ?>>
                        <label class="form-check-label" for="onay">
                        Onay
                        </label>
                    </div>

                </div>
            </div>
        </div>       
        
    </div>
<?php include "partials/_footer.php"?>