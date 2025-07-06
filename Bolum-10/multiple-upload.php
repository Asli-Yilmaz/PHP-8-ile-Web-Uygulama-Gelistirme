<?php
    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload"){
        $fileCount=count($_FILES["fileToUpload"]["name"]);
        $maxFileSize= (1024*1024)*2; // 2 megabyte
        $fileTypes=array("image/jpg","image/jpeg","image/png");
        $uploadOk=true;

        if($fileCount>2){
            $uploadOk=false;
            echo "Max. 2 dosya yükleyebeilirsiniz";
            echo "<br>";

        }
        if($uploadOk){
            for($i=0;$i<$fileCount;$i++){
                $fileTmpPath=$_FILES["fileToUpload"]["tmp_name"][$i];
                $fileName=$_FILES["fileToUpload"]["name"][$i];
                $fileSize=$_FILES["fileToUpload"]["size"][$i];
                $fileType=$_FILES["fileToUpload"]["type"][$i];
                

                if(in_array($fileType,$fileTypes)){
                    if($fileSize>$maxFileSize){
                        echo "Dosya boyutu çok büyük.";
                        echo "<br>";    
                    }else{
                        
                        $fileNameArr=explode(".",$fileName);
                        $fileName_woExtention=$fileNameArr[0];
                        $fileName_extention=$fileNameArr[1];

                        $new_fileName=md5(time().$fileName_woExtention).".".$fileName_extention;
                        $dest_path="images/".$new_fileName;

                        if(move_uploaded_file($fileTmpPath,$dest_path)){
                            echo $new_fileName." dosyası yüklendi.";
                            echo "<br>";
                        }else{
                            echo "Dosya yükleme hatası.";
                            echo "<br>";                
                         }
                    }
                    
                
                }else{
                    echo "Geçersiz Dosya Uzantsı.";
                    echo "<br>";    
                    echo "Geçerli olan dosya tipleri: ".implode(", ",$fileTypes);
                    echo "<br>";    
                }
            }
            
        }



    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" enctype="multipart/form-data">
        <input type="text" name="username">
        <input type="file" name="fileToUpload[]" multiple="multiple">
        <input type="submit" value="Upload" name="btnFileUpload">

    </form>
</body>
</html>