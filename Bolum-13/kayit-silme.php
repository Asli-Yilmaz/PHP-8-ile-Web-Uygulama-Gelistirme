<?php
    include "ayar.php";

    $query="DELETE FROM kurslar  Where id=15";
    $sonuc=mysqli_query($baglanti,$query);
    $adet=mysqli_affected_rows($baglanti);
    if($sonuc){
        echo "$adet veri silindi";
    }
    else{
        echo "silme işlemi başarısız";
    }

    mysqli_close($baglanti);
    echo "<br>"."mysql bağlantısı kapatıldı.";

?>