<?php
//product db den türediği için önce db yi include etmelisin 
    include "classes/db.class.php";
    include "classes/product.class.php";
?>
<?php include "includes/header.php";?>
<?php 
    $id=$_GET["id"];
    $product=new Product();
    $item=$product->getProductById($id);

    if(isset($_POST["submit"])){
        
        $title=$_POST["title"];
        $price=$_POST["price"];
        $description=$_POST["description"];

        
        if($product->editProduct($id,$title,$price,$description)){
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
                        <input type="text" name="title" id="title" class="form-control" value="<?php echo $item->title;?>">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" class="form-control" value="<?php echo $item->price;?>">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <!-- textarea nın value bilgisi olmaz -->
                        <textarea name="description" id="description" class="form-control"><?php echo $item->description;?></textarea>                    
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Güncelle</button>
                </div>
            </form>
        </div>

    </div>
<?php include "includes/footer.php";?>