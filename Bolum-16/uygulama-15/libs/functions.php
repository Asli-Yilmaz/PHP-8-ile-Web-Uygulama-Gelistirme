<?php
    session_start();
    function isLoggedIn(){
        return isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]==true;
    }
    function isAdmin(){
        return isLoggedIn() && isset($_SESSION["user_type"]) && $_SESSION["user_type"]=="admin";
    }

    function addNewUser($username,$email,$password){
        include "ayar.php";
        $query="INSERT INTO kullanicilar(username,email,password) VALUES (?,?,?)";
        if($statement=mysqli_prepare($baglanti,$query)){
            $password=password_hash($password,PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($statement,"sss",$username,$email,$password);
            if(mysqli_stmt_execute($statement)){
                header("location:login.php");
            }else{
                echo mysqli_error($baglanti);
                echo "<br>";
                echo "hata oluştu";
            }
        }

    }

    function getCategories(){
        include "ayar.php";

        $query="SELECT * FROM kategoriler";
        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }

    function getCategoryById(int $id){
        include "ayar.php";
        $query="SELECT * FROM kategoriler WHERE id='$id'";
        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }

    function editCategory($id,string $category){
        include "ayar.php";
        $query="UPDATE kategoriler SET kategori_adi='$category' WHERE id='$id'";
        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }

    function deleteCategory($id){
        include "ayar.php";
        $query="DELETE FROM kategoriler WHERE id=$id";
        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }
    function deleteCourse($id){
        include "ayar.php";
        $query="DELETE FROM kurslar WHERE id=$id";
        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }

    function createCategory(string $kategori){
        include "ayar.php";
        $query="INSERT INTO kategoriler(kategori_adi) VALUES (?);";
        $statement=mysqli_prepare($baglanti,$query);
        
        mysqli_stmt_bind_param($statement,"s",$kategori);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);

        return $statement;
    }
    function getCourses(bool $anasayfa,bool $onay){
        include "ayar.php";

        $query="SELECT * FROM kurslar ";
        if($anasayfa){
            $query.=" WHERE anasayfa=1";
        }
        if($onay){
            if(str_contains($query,"WHERE")){
                $query.=" and onay=1;";
            }else{
                $query.=" WHERE onay=1;";
            }
        }

        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }
    function getCoursesByFilters($categoryId,$keyword,$page){
        include "ayar.php";
        $pageCount=2;
        $offset=($page-1)*$pageCount;
        $query="";
        if(!empty($categoryId))
            $query="FROM kurs_kategori kc inner join kurslar k on kc.kurs_id=k.id where kc.kategori_id=$categoryId and k.onay=1";
        else{
            $query="FROM kurslar where onay=1";
        }

        if(!empty($keyword)){
            $query.=" and baslik like '%$keyword%' or altbaslik like '%$keyword%' or aciklama like '%$keyword%'";
        }
        //sayfalama işlemi için önce kaç kurs döndüğünü bulmalıyız
        $total_sql="select count(*) ".$query;
        $count_data=mysqli_query($baglanti,$total_sql);
        $count=mysqli_fetch_array($count_data)[0];
        $total_pages=ceil($count/$pageCount);

        //limit ötelenecek kayıt, alınacak kayıt sayısı
        $sql="select * ".$query." limit $offset,$pageCount";
        $sonuc=mysqli_query($baglanti,$sql);
        mysqli_close($baglanti);
        return array(
            "total_pages"=>$total_pages,
            "data"=>$sonuc
        );
    }
    function clearCourseCategories(int $kurs_id){
        include "ayar.php";
        $query="DELETE FROM kurs_kategori WHERE kurs_id=$kurs_id";
        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }
    function addCourseCategories(int $kurs_id,array $kategoriler){
        include "ayar.php";
        $query="";
        foreach($kategoriler as $kategori){
            $query.="INSERT INTO kurs_kategori(kurs_id,kategori_id) values($kurs_id, $kategori);";
            
        }
        $sonuc=mysqli_multi_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }
    function createCourse(string $baslik, string $altBaslik,string $aciklama,string $resim, int $yorumSayisi=0, int $begeniSayisi=0,int $onay=0){
        include "ayar.php";
        $query="INSERT INTO kurslar(baslik,altBaslik,aciklama,resim,yorumSayisi,begeniSayisi,onay) VALUES (?,?,?,?,?,?,?);";
        $statement=mysqli_prepare($baglanti,$query);
        
        mysqli_stmt_bind_param($statement,"ssssiii",$baslik,$altBaslik,$aciklama,$resim,$yorumSayisi,$begeniSayisi,$onay);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);

        return $statement;
    }
    function getCourseById(int $id){
        include "ayar.php";
        $query="SELECT * FROM kurslar WHERE id='$id'";
        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }
    function getCoursesByCategoryId(int $id){
        include "ayar.php";
        $query="SELECT * FROM kurs_kategori kc inner join kurslar k on kc.kurs_id=k.id where kc.kategori_id=$id and k.onay=1";
        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }
    function getCoursesByKeyword(string $q){
        include "ayar.php";
        $query="SELECT * FROM kurslar where baslik like '%$q%' or altbaslik like '%$q%' or aciklama like '%$q%';";
        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }
    
    function getCategoriesById(int $coursId){
        include "ayar.php";
        $query="SELECT * from kurs_kategori kc inner join kategoriler c on kc.kategori_id=c.id where kc.kurs_id=$coursId;";
        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }

    function editCourse(int $id,string $baslik, string $altBaslik,string $aciklama,string $resim,int $onay=0,int $anasayfa=0){
        include "ayar.php";

        $query="UPDATE kurslar SET baslik='$baslik', altBaslik='$altBaslik', aciklama='$aciklama',resim='$resim',onay=$onay, anasayfa=$anasayfa WHERE id=$id;";
        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
    }
    function uploadImage(array $file){
        if(isset($file)){
            $dest_path="./img/";

            $fileName=$file["name"];
            $fileSourcePath=$file["tmp_name"];
            $fileDestPath=$dest_path.$fileName;

            move_uploaded_file($fileSourcePath,$fileDestPath);
        }
    }

    function getDb(){
        $myfile=fopen("db.json","r");
        $size=filesize("db.json");
        $jsonString=fread($myfile,$size);
        $jsonArray=json_decode($jsonString,true);
        fclose($myfile);
        return $jsonArray;
    }
    function kursEkle( string $baslik, string $altBaslik, string $resim, string $yayinTarihi,
    int $yorumSayisi=0, int $begeniSayisi=0, bool $onay=true){
        //db.json içinde olan tüm veriler çekilir
        $db=getDb();
        //kategoriler nesnesine yeni kurs bilgileri eklenir
        array_push($db["kurslar"],array(
            "baslik"=>$baslik,
            "altBaslik"=>$altBaslik,
            "resim"=>$resim,
            "yayinTarihi"=>$yayinTarihi,
            "yorumSayisi"=>$yorumSayisi,
            "begeniSayisi"=>$begeniSayisi,
            "onay"=>$onay
        ));
        
        //kurslara yenisi eklendikten sonra güncel versiyonu yeniden db.json içne yazılır.
        $myfile=fopen("db.json","w");
        fwrite($myfile,json_encode($db,JSON_PRETTY_PRINT));
        fclose($myfile);
    }  

    function urlDuzenle($baslik){        
        return str_replace([" ","."],["-",""],strtolower($baslik));
    }
    
    function kisaAciklama($altBaslik){
        if(strlen($altBaslik)>40){
            return substr($altBaslik,0,40)."...";
        }      
        else {
            return $altBaslik;
        }           
                                            
    }   

    // text inputlara script codu veya sql kodu girilerek yapılan saldırıları
    // önlemek için yzılmış fonksiyon
    function safe_html($data){
        $data=trim($data);
        $data=stripslashes($data); #sql injection saldırısını önler
        $data=htmlspecialchars($data);

        return $data;
    }


?>