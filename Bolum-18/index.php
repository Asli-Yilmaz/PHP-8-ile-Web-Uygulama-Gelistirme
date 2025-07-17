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
    
    // //prepared sorgular
    // $product_price=30000;
    // $sql="SELECT * FROM products WHERE price>?";
    // $stmt=$pdo->prepare($sql);
    // $stmt->execute([$product_price]);
    // $urunler=$stmt->fetchAll();
    // foreach($urunler as $urun){
    //     echo $urun->title."<br>";
    // }

    //isert data

    // $title="Samsung S23";
    // $price=25000;
    // $description="android Samsung S23 model telefon";

    // // //$sql="INSERT INTO products(title,price,description) VALUES(?,?,?)";
    // // //veya alan isimleri aşağıdaki gibi de girilebilir
    // // $sql="INSERT INTO products(title,price,description) VALUES(:title,:price,:description)";
    // // $stmt=$pdo->prepare($sql);
    // // $stmt->execute(['title'=>$title,'price'=>$price,'description'=>$description]);

    // // echo "Kayıt eklendi.";

    // //multiple insert operation
    // $sql="INSERT INTO products(title,price,description) VALUES(:title,:price,:description)";
    // $stmt=$pdo->prepare($sql);

    // $stmt->bindParam(':title',$title);
    // $stmt->bindParam(':price',$price);
    // $stmt->bindParam(':description',$description);

    // $stmt->execute();

    // //sadece parametreler değiştirilip execute tekrar çağrıldığında sql soegusu bu yeni değerler için yeniden çalışır
    // $title="Samsung S24";
    // $price=35000;
    // $description="android Samsung S24 model telefon";

    // $stmt->execute();


    //kayıt güncelleme
    // $id=1;
    // $title="samsung z fold 7";
    // $sql="UPDATE products SET title=:title WHERE id=:id";
    // $stmt=$pdo->prepare($sql);
    // $stmt->execute(['id'=>$id, 'title'=>$title]);

    // echo $stmt->rowCount()." adet kayıt güncellendi.";

    //kayıt silme

    $id=1;
    $sql="DELETE FROM  products WHERE id=:id";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);

    echo $stmt->rowCount()." adet kayıt SİLİNDİ."



?>