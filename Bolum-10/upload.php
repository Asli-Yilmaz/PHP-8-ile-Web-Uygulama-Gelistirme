<?php
    //iki tane buton varsa ve tıklanan butonlara göre işlem yapılacaksa
    //butona isim vermek ve aşağıdaki gibi buton ismini kontrol etmek daha kullanışlı
    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload"){
        echo "<pre>";
        print_r($_FILES["fileToUpload"]);
        print_r($_POST);
        echo "<pre>";
    }
?>