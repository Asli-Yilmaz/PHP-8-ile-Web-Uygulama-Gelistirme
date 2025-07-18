<?php
//product db den türediği için önce db yi include etmelisin 
    include "classes/db.class.php";
    include "classes/product.class.php";
?>
<?php include "includes/header.php";?>
<?php 

    if(isset($_POST["submit"])){
        $title=$_POST["title"];
        $price=$_POST["price"];
        $description=$_POST["description"];

        $product=new Product();
        if($product->createProduct($title,$price,$description)){
            header("location: index.php");
        }
    }
?>
<body>
    <div class="container my-3">
        <div class="row">
            <form action="" method="post">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </form>
        </div>

    </div>
<?php include "includes/footer.php";?>