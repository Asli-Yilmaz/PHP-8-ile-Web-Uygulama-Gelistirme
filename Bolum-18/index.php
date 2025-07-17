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
    <title>Document</title>
</head>
<body>
    <?php
        $product=new Product();
        echo "<pre>";
        print_r($product->getProducts());
        echo "<br>";
        print_r($product->getProductById(6));
    
    ?>
</body>
</html>