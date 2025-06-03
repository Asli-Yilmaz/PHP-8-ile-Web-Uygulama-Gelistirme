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
            "yorumSayisi"=>"100",
            "begeniSayisi"=>"300",
        ),
        2=>array(
            "baslik"=>"Python Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Python programlama",
            "resim"=>"2.jpg",
            "yayinTarihi"=>"31.05.2025",
            "yorumSayisi"=>"100",
            "begeniSayisi"=>"300",
        ),
        3=>array(
            "baslik"=>"Node.js Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Node.js ile web geliştirme",
            "resim"=>"3.jpg",
            "yayinTarihi"=>"31.05.2025",
            "yorumSayisi"=>"100",
            "begeniSayisi"=>"300",
        )
    );
    $yeni_kurs=array(
        "baslik"=>"Django Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Django kursu",
            "resim"=>"3.jpg",
            "yayinTarihi"=>"31.05.2025",
            "yorumSayisi"=>"100",
            "begeniSayisi"=>"300",
    );
    array_push($kurslar,$yeni_kurs);

    
    $kurs1_altBaslik=ucfirst(strtolower($kurslar[1]["altBaslik"]));
    $kurs2_altBaslik=ucfirst(strtolower($kurslar[2]["altBaslik"]));
    $kurs3_altBaslik=ucfirst(strtolower($kurslar[3]["altBaslik"]));

    $kurs1_altBaslik=substr($kurslar[1]["altBaslik"],0,40)."...";
    $kurs2_altBaslik=substr($kurslar[2]["altBaslik"],0,40)."...";
    $kurs3_altBaslik=substr($kurslar[3]["altBaslik"],0,40)."...";

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
        <!-- div.card yaz enter bas -->
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
                        <p class="card-text"><?php echo$kurslar[1]["altBaslik"];?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni :<?php echo $kurslar[1]["begeniSayisi"]?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum :<?php echo $kurslar[1]["yorumSayisi"]?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
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
                        <p class="card-text"><?php echo $kurslar[2]["altBaslik"];?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni :<?php echo $kurslar[2]["begeniSayisi"]?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum :<?php echo $kurslar[2]["yorumSayisi"]?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div> 
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
                        <p class="card-text"><?php echo $kurslar[3]["altBaslik"];?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni :<?php echo $kurslar[3]["begeniSayisi"]?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum :<?php echo $kurslar[3]["yorumSayisi"]?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
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
                        <p class="card-text"><?php echo $kurslar[4]["altBaslik"];?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni :<?php echo $kurslar[4]["begeniSayisi"]?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum :<?php echo $kurslar[4]["yorumSayisi"]?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div> 
            </div>
        </div>

        
        
    </div>
</body>
</html>