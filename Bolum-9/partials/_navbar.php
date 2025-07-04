<?php
    if(!empty($_GET['q'])){
        $keyword=$_GET['q'];
        //echo $keyword;
        // filtreleem işlemi için array_filter fonksiyonu kullanıldı
        // kapsam dışında olan keyword değişkenini filtrelemede kullanılacak foksiyon içinde
        // çağırabilmek için "use ($keywork)" yazısı eklendi. fonksiyon, birinci parametre olarak
        // verilen array iindeki her bir veri için çalışacak ve true gelenleri dönderecektir.
        $kurslar=array_filter($kurslar,function($kurs) use ($keyword){
            return stristr($kurs['baslik'],$keyword) or stristr($kurs['altBaslik'],$keyword);
        });
    }
?>

<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
        <a href="/" class="navbar-brand">CourseApp</a>
        
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="/" class="nav-link active">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">Kurslar</a>
            </li>
        </ul>
        <form action="index.php" class="d-flex" method="Get">
            <input type="text" name="q" class="form-control me-2" placeholder="Keyword">
            <button type="submit" class="btn btn-warning">Ara</button>
        </form>
    </div>
</nav>