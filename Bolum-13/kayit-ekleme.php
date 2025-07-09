<?php
    include "ayar.php";

    //tek kayıt ekleme
    $query="INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) 
    VALUES('html kursu','sıfırdan ileri seviye','1.jpg','09.07.2025',10,5,1)";

    $sonuc=mysqli_query($baglanti,$query);
    //coklu kayıt ekleme
    $query="INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) 
    VALUES('CSS kursu','sıfırdan ileri seviye','1.jpg','09.07.2025',10,5,1);";
    $query .="INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) 
    VALUES('Angular kursu','sıfırdan ileri seviye','1.jpg','09.07.2025',10,5,1);";
    
    $sonuc=mysqli_multi_query($baglanti,$query);
    $inserted_id=mysqli_insert_id($baglanti); //eklenen son verinin id değerini dönderir
    if($sonuc){
        echo "kayıt eklendi ".$inserted_id;
    }else{
        echo "kayıt eklenemedi.";
    }

    mysqli_close($baglanti);
    echo "mysql bağlantısı kapatıldı.";
?>