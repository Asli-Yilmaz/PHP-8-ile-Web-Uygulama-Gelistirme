<?php 
    //q, inputun name parametresine karşılık geliyor
    // http://localhost/courseApp/Bolum-9/yazdir.php?q=php adresine gidip çalıştır
    $query=$_GET['q'];
    echo $query."<br>";

    //http://localhost/courseApp/Bolum-9/yazdir.php?q=asl%C4%B1&category=programlama
    //adresi çalıştırılarak ikinci parametre de get methodu üzerinden alınır
    $category=$_GET['category'];
    echo $category;
?>