<?php
    include_once("baglanti-kurulumu.php");

    $sql="SELECT * FROM products";
    $result=$pdo->query($sql);

    //buradaki fetchin default değeri PDO::FETCH_ASSOC 
    // while($row=$result->fetch()){
    //     echo $row["title"]."<br>";
    // }

    //bunu her seferinde objeye çevirmek yerine baglantı.php de attribute olarak bunu set edebilirsin
    // while($row=$result->fetch(PDO::FETCH_OBJ)){
    //     echo $row->title."<br>";
    // }

    //artık PDO::FETCH_OBJ demeden de kullanabiliriz
    // while($row=$result->fetch()){
    //     echo $row->title."<br>";
    // }

    // //döngü olmadan kayıtların hepsi alınır
    // $urunler=$result->fetchAll();
    // foreach($urunler as $urun){
    //     echo $urun->price."<br>";
    // }
    
    //prepared sorgular
    $product_price=30000;
    $sql="SELECT * FROM products WHERE price>?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$product_price]);
    $urunler=$stmt->fetchAll();
    foreach($urunler as $urun){
        echo $urun->title."<br>";
    }

?>