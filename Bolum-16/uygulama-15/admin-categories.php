<?php

    //buradaki değişkenleri variables klasorune ekledik
    require "libs/variables.php";
    //buradaki fonksiyonları functions klasorune ekledik
    require "libs/functions.php";

    if(!isAdmin()){
        header("location: unauthorized.php");
    }
    

?>
<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>
<?php include "<partials/_message.php"?>

<div class="container my-3">

<div class="row">
        <div class="col-12">
            <div class="border p-2 mb-2">
                <a href="category-create.php" class="btn btn-primary">Kategori Ekle</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:50px;">Id</th>
                        <th>Kategori Adı</th>
                        <th style="width:130px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sonuc=getCategories(); 
                        while($category=mysqli_fetch_assoc($sonuc)): ?>
                        <tr>
                            <td><?php echo $category["id"]?></td>
                            <td><?php echo $category["kategori_adi"]?></td>
                            <td>
                                <a href="category-edit.php?id=<?php echo $category['id']?>" class="btn btn-primary btn-sm">Düzenle</a>
                                <a href="category-delete.php?id=<?php echo $category['id']?>" class="btn btn-danger btn-sm">Sil</a>
                            </td>
                        </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
</div>
</div> 
        
<?php include "partials/_footer.php"?>