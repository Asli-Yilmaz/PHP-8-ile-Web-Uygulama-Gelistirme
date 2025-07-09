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
    $sonuc=getCategoryById($id);
    $selectedCategory=mysqli_fetch_assoc($sonuc);

    $category="";
    $categoryErr="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        
        if(empty($_POST["category"])){
            $categoryErr="Kategori adı boş geçilemez."."<br>";
        }else{
            $category=safe_html($_POST["category"]);
        }
        if(empty($categoryErr)){
            createCategory($category);
            $_SESSION["message"]=$category." isimli kategori eklendi.";
            $_SESSION["type"]="success";
            header("location: admin-categories.php");
        }


    }
?>
    <!-- div.container yaz enter bas -->
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <form  method="post">
                        <div class="mb-3">
                            <label for="category">Kategori Adı</label>
                            <input type="text" name="category" id="form-control" value="<?php echo $selectedCategory["kategori_adi"];?>">
                            <div class="text-danger"><?php echo $categoryErr;?></div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>       
        
    </div>
<?php include "partials/_footer.php"?>