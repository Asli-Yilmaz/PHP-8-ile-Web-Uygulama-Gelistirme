<?php
    //iki tane buton varsa ve tıklanan butonlara göre işlem yapılacaksa
    //butona isim vermek ve aşağıdaki gibi buton ismini kontrol etmek daha kullanışlı
    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload"){
        echo "<pre>";
        print_r($_FILES["fileToUpload"]);
        print_r($_POST);
        echo "<pre>";

        $dest_path="./uploadedFiles/";
        $fileName=$_FILES["fileToUpload"]["name"];
        $fileSourcePath=$_FILES["fileToUpload"]["tmp_name"];
        $fileDestPath=$dest_path.$fileName;

        if(move_uploaded_file($fileSourcePath,$fileDestPath)){
            echo "dosya yüklendi";
        }else{
            echo "Hata";
        }
    }
?>