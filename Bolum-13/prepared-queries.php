<?php
    include "ayar.php";

    //aşağıdaki gibi sorgulara verileri direkt olarak yazmak sql injection saldırılarına neden olabilir.
    // $query="INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) 
    // VALUES('html kursu','sıfırdan ileri seviye','1.jpg','09.07.2025',10,5,1)";


    //bu durumu önlemek için aşağıdaki gibi prepared sorgular kullanılır
    $baslik='html kursu';
    $altBaslik="sıfırdan ileri seviye";
    $resim="1.jpg";
    $yayinTarihi="09.07.2025";
    $yorumSayisi=10;
    $begeniSayisi=5;
    $onay=1;

    //values kısmına gönderilecek değer karar ? yazılır
    $query="INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) 
    VALUES(?,?,?,?,?,?,?)";

    $statement=mysqli_prepare($baglanti,$query);

    //göndereceğimiz değerler string ise s, integer ise i yazılır
    mysqli_stmt_bind_param($statement,'ssssiii',$baslik,$altBaslik,$resim,$yayinTarihi,$yorumSayisi,$begeniSayisi,$onay);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);


    echo "veri eklendi.";


    mysqli_close($baglanti);
    echo "<br>"."mysql bağlantısı kapatıldı.";

?>