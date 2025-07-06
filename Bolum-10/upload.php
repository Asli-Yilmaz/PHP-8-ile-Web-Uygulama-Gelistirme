<?php
    //iki tane buton varsa ve tıklanan butonlara göre işlem yapılacaksa
    //butona isim vermek ve aşağıdaki gibi buton ismini kontrol etmek daha kullanışlı
    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload"){

        // dosya yüklenirken kontrol edilecekler
        // - dosya seçilmiş mi?
        // - dosyanın boyutu
        // - dosyanın isminin kontrolü
        // - dosya uzantısı


        // echo "<pre>";
        // print_r($_FILES["fileToUpload"]);
        // print_r($_POST);
        // echo "<pre>";

        $successfulUpload=true;
        $dest_path="./uploadedFiles/";
        $fileName=$_FILES["fileToUpload"]["name"];
        $fileSize=$_FILES["fileToUpload"]["size"];

        if(empty($fileName)){
            $successfulUpload=false;
            echo "Dosya Seçiniz."."<br>";
        }

        if($fileSize>50000){
            $successfulUpload=false;
            echo "Dosya Boyutu Fazla"."<br>";
        }

        $fileSourcePath=$_FILES["fileToUpload"]["tmp_name"];
        $fileDestPath=$dest_path.$fileName;
        if($successfulUpload){

            if(move_uploaded_file($fileSourcePath,$fileDestPath)){
            echo "dosya yüklendi"."<br>";
            }else{
                echo "Dosya Yüklenemedi"."<br>";
            }
        }
       
    }
?>