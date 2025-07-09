<?php

use Dom\Mysql;

    function getCategories(){
        include "ayar.php";

        $query="SELECT * FROM kategoriler";
        $sonuc=mysqli_query($baglanti,$query);
        mysqli_close($baglanti);
        return $sonuc;
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