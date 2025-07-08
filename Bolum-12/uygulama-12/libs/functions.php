<?php 

    function getDb(){
        $myfile=fopen("db.json","r");
        $size=filesize("db.json");
        $jsonString=fread($myfile,$size);
        $jsonArray=json_decode($jsonString,true);
        fclose($myfile);
        return $jsonArray;
    }
    function kursEkle(&$kurslar, string $baslik, string $altBaslik, string $resim, string $yayinTarihi,
    int $yorumSayisi=0, int $begeniSayisi=0, bool $onay=true){
        $yeni_kurs[count($kurslar)+1]=array(
            "baslik"=>$baslik,
            "altBaslik"=>$altBaslik,
            "resim"=>$resim,
            "yayinTarihi"=>$yayinTarihi,
            "yorumSayisi"=>$yorumSayisi,
            "begeniSayisi"=>$begeniSayisi,
            "onay"=>$onay
        );

        $kurslar=array_merge($kurslar,$yeni_kurs);
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