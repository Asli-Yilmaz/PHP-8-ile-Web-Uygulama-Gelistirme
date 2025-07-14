<?php

    //buradaki değişkenleri variables klasorune ekledik
    require "libs/variables.php";
    //buradaki fonksiyonları functions klasorune ekledik
    require "libs/functions.php";


?>
<?php 
    if(empty($_GET["id"])){
        header("location: admin-courses.php");
    }
    $id=$_GET["id"];
    $result=getCourseById($id);
    $course=mysqli_fetch_assoc($result);

    if($_SERVER["REQUEST_METHOD"]=="POST"){   
                
        if(deleteCourse($id)){

            $_SESSION["message"]=$id." numaralı KURS silindi.";
            $_SESSION["type"]="danger";
            header("location: admin-courses.php");
        }else{
            echo "hata";
        }
    }
?>
<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>
    <!-- div.container yaz enter bas -->
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card card-body">
                        <form method="post">
                            <b><?php echo $course["baslik"]?></b> isimli kursu silmek istiyor musunuz?
                            <button type="submit" class="btn btn-danger">Sil</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>       
        
    </div>
<?php include "partials/_footer.php"?>

    


