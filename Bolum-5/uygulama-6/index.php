<?php
    const title="Popüler Kurslar";

    $kategoriler=array(
        array("kategori_adi"=>"Programlama","aktif"=>true),
        array("kategori_adi"=>"Veri Analizi","aktif"=>false),
        array("kategori_adi"=>"Ofis Uygulamaları","aktif"=>false),
        array("kategori_adi"=>"Mobil Uygulamalar","aktif"=>false),
    );
    //sort($kategoriler);
    $kurslar=array(
        1=>array(
            "baslik"=>"Php Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Php ile web geliştirme",
            "resim"=>"1.jpg",
            "yayinTarihi"=>"31.05.2025",
            "yorumSayisi"=>0,
            "begeniSayisi"=>10,
            "onay"=>true
        ),
        2=>array(
            "baslik"=>"Python Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Python programlama",
            "resim"=>"2.jpg",
            "yayinTarihi"=>"31.05.2025",
            "yorumSayisi"=>10,
            "begeniSayisi"=>0,
            "onay"=>true
        ),
        3=>array(
            "baslik"=>"Node.js Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Node.js ile web geliştirme",
            "resim"=>"3.jpg",
            "yayinTarihi"=>"31.05.2025",
            "yorumSayisi"=>10,
            "begeniSayisi"=>20,
            "onay"=>true
        )
    );
    
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

    kursEkle($kurslar,"Django Kursu","Sıfırdan ileri seviye Django kursu","3.jpg","31.05.2025");
    
    $kurs1_altBaslik=ucfirst(strtolower($kurslar[1]["altBaslik"]));
    $kurs2_altBaslik=ucfirst(strtolower($kurslar[2]["altBaslik"]));
    $kurs3_altBaslik=ucfirst(strtolower($kurslar[3]["altBaslik"]));

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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    <!-- div.container yaz enter bas -->
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <?php for($i =0;$i<count($kategoriler);$i++):?>
                        
                        <a 
                            href="#" 
                            class="list-group-item list-group-item-action <?php echo ($kategoriler[$i]["aktif"])?"active":"" ?>">
                            <?php echo $kategoriler[$i]["kategori_adi"]?>
                        </a>
                    <?php endfor ?>
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo title;?></h1>
                <p class="lead">
                    <?php echo count($kategoriler)?> kategoride <?php echo count($kurslar)?> kurs listelenmiştir
                </p>

                <?php foreach($kurslar as $key=>$kurs):?>
                    <!--if bloğunun açılışı-->
                    <?php if ($kurs["onay"]):  ?>
                        <div class="card mb-3">
                            <!-- div.row  ile oluştu ve row 12 coldan oluşur-->
                            <div class="row">
                                <div class="col-4">
                                    <img src="img/<?php echo $kurs["resim"];?>" alt="" class="img-fluid rounded-start">
                                </div>
                                <div class="col-8">
                                    <!-- div.card-body -->
                                    <div class="card-body">
                                        <!-- h5.card-title -->
                                        <h5 class="card-title">
                                            <a href="<?php echo urlDuzenle($kurs["baslik"]); ?>" >
                                                <?php echo $kurs["baslik"];?>
                                            </a>
                                        </h5>
                                        <!-- p.card-text -->
                                        <p class="card-text">
                                            <?php echo kisaAciklama($kurs["altBaslik"]) ?>                                                
                                        </p>
                                        <p>
                                            <?php if($kurs["begeniSayisi"]>0):?>
                                                <span class="badge rounded-pill text-bg-primary">
                                                    Beğeni :<?php echo $kurs["begeniSayisi"]?>
                                                </span>
                                            <?php endif?>
                                            <?php if($kurs["yorumSayisi"]>0):?>
                                                <span class="badge rounded-pill text-bg-danger">
                                                    Yorum :<?php echo $kurs["yorumSayisi"]?>
                                                </span>
                                            <?php else:?>
                                                <span class="badge rounded-pill text-bg-warning">
                                                    İlk Yorumu Sen Yap
                                                </span>
                                            <?php endif?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    <!--if bloğunun kapanışı-->
                    <?php endif?>
                <?php endforeach ?>

                
        <!-- div.card yaz enter bas -->     
        
            </div>
        </div>

        
        
    </div>
</body>
</html>