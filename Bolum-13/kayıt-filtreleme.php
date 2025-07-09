<?php
    include "ayar.php";

    $query="SELECT *FROM kurslar WHERE id>5 and id<15";
    $sonuc=mysqli_query($baglanti,$query);
    while($row=mysqli_fetch_assoc($sonuc)){
        echo $row["id"]." ".$row["baslik"]."<br>";
    }

    echo "<hr>";
    $query="SELECT * FROM kurslar WHERE altBaslik like '%geliştirme%'";
    $sonuc=mysqli_query($baglanti,$query);
    while($row=mysqli_fetch_assoc($sonuc)){
        echo $row["id"]." ".$row["altBaslik"]."<br>";
    }
    mysqli_close($baglanti);
    echo "<br>"."mysql bağlantısı kapatıldı.";
?>