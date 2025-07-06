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

        if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"]==0){
            $successfulUpload=true;
            $dest_path="./uploadedFiles/";
            $fileName=$_FILES["fileToUpload"]["name"];
            $fileSize=$_FILES["fileToUpload"]["size"];
            $fileExtensions=array("jpg","png","jpeg");

            if(empty($fileName)){
                $successfulUpload=false;
                echo "Dosya Seçiniz."."<br>";
            }

            if($fileSize>50000){
                $successfulUpload=false;
                echo "Dosya Boyutu Fazla"."<br>";
            }
            //uzantı kontrolü için dosya adını parçalıyoruz
            $uploadedFileName=explode(".",$fileName);
            $fileName_woExtention=$uploadedFileName[0];
            $fileName_extention=$uploadedFileName[1];

            if(!in_array($fileName_extention,$fileExtensions)){
                $successfulUpload=false;
                echo "Dosya uzantısı geçersiz."."<br>";
                echo "Geçerli Dosya Uzanlıları: ".implode(", ",$fileExtensions);
            }
            
            //md5 hash algoritması ile filename şifrelenir.
            $new_fileName=md5(time().$fileName_woExtention).".".$fileName_extention;

            $fileSourcePath=$_FILES["fileToUpload"]["tmp_name"];
            $fileDestPath=$dest_path.$new_fileName;
            if($successfulUpload){

                if(move_uploaded_file($fileSourcePath,$fileDestPath)){
                echo "dosya yüklendi"."<br>";
                }else{
                    echo "Dosya Yüklenemedi"."<br>";
                }
            }
        }else{
            echo "Bir Hata Oluştu.";
        }
        
       
    }
?>