<?php
    include "ayar.php";

    $query="UPDATE kurslar SET baslik='Laravel Dersleri', altBaslik='sıfırdan Laravel dersleri'  Where id=17";
    $sonuc=mysqli_query($baglanti,$query);
    if($sonuc){
        echo "veri güncellendi";
    }
    else{
        echo "güncelleme başarısız";
    }

    mysqli_close($baglanti);
    echo "<br>"."mysql bağlantısı kapatıldı.";

?>