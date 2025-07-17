<?php
//product db den türediği için önce db yi include etmelisin 
    include "classes/db.class.php";
    include "classes/product.class.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/css/bootstrap.min.css" />
    
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <?php $product=new Product();?>

        <?php if($product->getProducts()):?>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width:30px">Id</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th style="width:120px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($product->getProducts() as $item):?>
                        <tr>
                            <td><?php echo $item->id?></td>
                            <td><?php echo $item->title?></td>
                            <td><?php echo $item->price?></td>
                            <td><?php echo $item->description?></td>
                            <td style="width:120px">
                                <a href="" class="btn btn-primary btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;?>   
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-warning">
                Ürün bulunamadı.
            </div>
        <?php endif;?>
    </div>
</body>
</html>