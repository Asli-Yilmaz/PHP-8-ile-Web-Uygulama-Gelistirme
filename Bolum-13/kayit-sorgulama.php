<?php
    include "ayar.php";
    $query="SELECT * FROM kurslar";
    $query="SELECT id, baslik FROM kurslar";
    $sonuc=mysqli_query($baglanti,$query);

    //satır satır alma işlemi
    while($row=mysqli_fetch_row($sonuc)){
        echo $row[0]." ".$row[1]."<br>";
    }
    echo "<hr>";

    //mysqli_fetch_row fonksitonu cursor mantığıyla çalıştığı için cursor
    //şuanda verilerin en sonundadır ve önceki verileri okumaz 
    //bunun için cursorü sıfırlayarak yenden en başa almak gerekir.
    $sonuc=mysqli_query($baglanti,$query);//coursor yeniden en başa alınır
    while($row=mysqli_fetch_row($sonuc)){
        echo $row[0]." ".$row[1]."<br>";
    }


    mysqli_close($baglanti);
    echo "<br>"."mysql bağlantısı kapatıldı.";

?>