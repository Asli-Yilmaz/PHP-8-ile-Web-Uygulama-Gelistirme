<?php
    const title="Popüler Kurslar";

    $kategoriler=array("Programlama","Web Geliştirme","Veri Analizi");
    sort($kategoriler);
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
            "onay"=>false
        )
    );
    $yeni_kurs=array(
        "baslik"=>"Django Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Django kursu",
            "resim"=>"3.jpg",
            "yayinTarihi"=>"31.05.2025",
            "yorumSayisi"=>0,
            "begeniSayisi"=>5,
            "onay"=>true
    );
    array_push($kurslar,$yeni_kurs);

    
    $kurs1_altBaslik=ucfirst(strtolower($kurslar[1]["altBaslik"]));
    $kurs2_altBaslik=ucfirst(strtolower($kurslar[2]["altBaslik"]));
    $kurs3_altBaslik=ucfirst(strtolower($kurslar[3]["altBaslik"]));

    // $kurs1_altBaslik=substr($kurslar[1]["altBaslik"],0,40)."...";
    // $kurs2_altBaslik=substr($kurslar[2]["altBaslik"],0,40)."...";
    // $kurs3_altBaslik=substr($kurslar[3]["altBaslik"],0,40)."...";

    $kurs1_url=str_replace([" ","."],["-",""],strtolower($kurslar[1]["baslik"]));
    $kurs2_url=str_replace([" ","."],["-",""],strtolower($kurslar[2]["baslik"]));
    $kurs3_url=str_replace([" ","."],["-",""],strtolower($kurslar[3]["baslik"]));
    $kurs4_url=str_replace([" ","."],["-",""],strtolower($kurslar[4]["baslik"]));
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
                    <a href="#" class="list-group-item list-group-item-action active">                        
                    <?php echo $kategoriler[0]?></a>
                    <a href="#" class="list-group-item list-group-item-action">                        
                    <?php echo $kategoriler[1]?></a>
                    <a href="#" class="list-group-item list-group-item-action">                        
                    <?php echo $kategoriler[2]?></a>
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo title;?></h1>
                <p class="lead">
                    <?php echo count($kategoriler)?> kategoride <?php echo count($kurslar)?> kurs listelenmiştir
                </p>
                <!--if bloğunun açılışı-->
                <?php if($kurslar[1]["onay"]):  ?>
                    <div class="card mb-3">
                        <!-- div.row  ile oluştu ve row 12 coldan oluşur-->
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurslar[1]["resim"];?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <!-- div.card-body -->
                                <div class="card-body">
                                    <!-- h5.card-title -->
                                    <h5 class="card-title">
                                        <a href="<?php echo $kurs1_url; ?>" >
                                            <?php echo $kurslar[1]["baslik"];?>
                                        </a>
                                    </h5>
                                    <!-- p.card-text -->
                                    <p class="card-text">
                                        <?php if(strlen($kurslar[1]["altBaslik"])>40):?>
                                            <?php echo substr($kurslar[1]["altBaslik"],0,40)."...";?>
                                        <?php else :?>
                                            <?php echo $kurslar[1]["altBaslik"];?>
                                        <?php endif ?>
                                        
                                    </p>
                                    <p>
                                        <?php if($kurslar[1]["begeniSayisi"]>0):?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                Beğeni :<?php echo $kurslar[1]["begeniSayisi"]?>
                                            </span>
                                        <?php endif?>
                                        <?php if($kurslar[1]["yorumSayisi"]>0):?>
                                            <span class="badge rounded-pill text-bg-danger">
                                                Yorum :<?php echo $kurslar[1]["yorumSayisi"]?>
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

                <!--if bloğunun açılışı-->
                <?php if($kurslar[2]["onay"]):  ?>
                    <div class="card mb-3">
                        <!-- div.row  ile oluştu ve row 12 coldan oluşur-->
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurslar[2]["resim"];?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <!-- div.card-body -->
                                <div class="card-body">
                                    <!-- h5.card-title -->
                                    <h5 class="card-title">
                                        <a href="<?php echo $kurs2_url; ?>" >
                                            <?php echo $kurslar[2]["baslik"];?>
                                        </a>
                                    </h5>
                                    <!-- p.card-text -->
                                    <p class="card-text">
                                        <?php if(strlen($kurslar[2]["altBaslik"])>40):?>
                                            <?php echo substr($kurslar[2]["altBaslik"],0,40)."...";?>
                                        <?php else :?>
                                            <?php echo $kurslar[2]["altBaslik"];?>
                                        <?php endif ?>
                                        
                                    </p>
                                    <p>
                                        <?php if($kurslar[2]["begeniSayisi"]>0):?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                Beğeni :<?php echo $kurslar[2]["begeniSayisi"]?>
                                            </span>
                                        <?php endif?>
                                        <?php if($kurslar[2]["yorumSayisi"]>0):?>
                                            <span class="badge rounded-pill text-bg-danger">
                                                Yorum :<?php echo $kurslar[2]["yorumSayisi"]?>
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

                <!--if bloğunun açılışı-->
                <?php if($kurslar[3]["onay"]):  ?>
                    <div class="card mb-3">
                        <!-- div.row  ile oluştu ve row 12 coldan oluşur-->
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurslar[3]["resim"];?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <!-- div.card-body -->
                                <div class="card-body">
                                    <!-- h5.card-title -->
                                    <h5 class="card-title">
                                        <a href="<?php echo $kurs3_url; ?>" >
                                            <?php echo $kurslar[3]["baslik"];?>
                                        </a>
                                    </h5>
                                    <!-- p.card-text -->
                                    <p class="card-text">
                                        <?php if(strlen($kurslar[3]["altBaslik"])>40):?>
                                            <?php echo substr($kurslar[3]["altBaslik"],0,40)."...";?>
                                        <?php else :?>
                                            <?php echo $kurslar[3]["altBaslik"];?>
                                        <?php endif ?>
                                        
                                    </p>
                                    <p>
                                        <?php if($kurslar[3]["begeniSayisi"]>0):?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                Beğeni :<?php echo $kurslar[3]["begeniSayisi"]?>
                                            </span>
                                        <?php endif?>
                                        <?php if($kurslar[3]["yorumSayisi"]>0):?>
                                            <span class="badge rounded-pill text-bg-danger">
                                                Yorum :<?php echo $kurslar[3]["yorumSayisi"]?>
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


                <!--if bloğunun açılışı-->
                <?php if($kurslar[4]["onay"]):  ?>
                    <div class="card mb-3">
                        <!-- div.row  ile oluştu ve row 12 coldan oluşur-->
                        <div class="row">
                            <div class="col-4">
                                <img src="img/<?php echo $kurslar[4]["resim"];?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-8">
                                <!-- div.card-body -->
                                <div class="card-body">
                                    <!-- h5.card-title -->
                                    <h5 class="card-title">
                                        <a href="<?php echo $kurs4_url; ?>" >
                                            <?php echo $kurslar[4]["baslik"];?>
                                        </a>
                                    </h5>
                                    <!-- p.card-text -->
                                    <p class="card-text">
                                        <?php if(strlen($kurslar[4]["altBaslik"])>40):?>
                                            <?php echo substr($kurslar[4]["altBaslik"],0,40)."...";?>
                                        <?php else :?>
                                            <?php echo $kurslar[4]["altBaslik"];?>
                                        <?php endif ?>
                                        
                                    </p>
                                    <p>
                                        <?php if($kurslar[4]["begeniSayisi"]>0):?>
                                            <span class="badge rounded-pill text-bg-primary">
                                                Beğeni :<?php echo $kurslar[1]["begeniSayisi"]?>
                                            </span>
                                        <?php endif?>
                                        <?php if($kurslar[4]["yorumSayisi"]>0):?>
                                            <span class="badge rounded-pill text-bg-danger">
                                                Yorum :<?php echo $kurslar[4]["yorumSayisi"]?>
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
        <!-- div.card yaz enter bas -->     
        
            </div>
        </div>

        
        
    </div>
</body>
</html>