<!-- templates nedir 
    her sayfada aynı şekilde bulunmasını istediğimiz navabr
    footer menu gibi yapıları _navbar.php, _menu.php gibi oluştururarak
    gerekli yerlerde çağırırız. yani her sayfaya navbar kodunu copy paste
    etmemize gerek kalmaz

    partials veya views olarak isimlendirdiğimiz klasöre çoğu sayfada 
    tekrar edecek olan header footer menu gibi yapıları
    _header.php şeklinde yazarız. ve bu parçaları diğer sayfalarla
    bağlamak için bu parçayı kullanmak istediğimiz sayfaya giderek 
    view ı kullanacağınız yere giderek
    <?php include 'partials/_header.php'?>
    yazmak yeterlidir.
-->