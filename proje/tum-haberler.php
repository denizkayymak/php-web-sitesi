	<?php 
    
    $bag=mysqli_connect("localhost","root","","maski");
    if(!$bag)die("baglantı kurulamadı...".mysqli_error());
    mysqli_query($bag,"set names'utf8'");
    $sql="select *from haberler order by Id desc ";
    $kayitlar=mysqli_query($bag,$sql);
    
    ?>
<!DOCTYPE html>
<html lang="tr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>



        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

     <title>MASKİ - Malatya Büyükşehir Belediyesi Su ve Kanalizasyon İdaresi Genel Müdürlüğü - Tüm Haberler</title>
     <meta name="description" content=""/><meta name="robots" content="index, follow"/><meta name="copyright" content="wicyo.com"><meta name="language" content="tr">
     <link rel="shortcut icon" href="Cdn/fav.html"/>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 

    <link rel="stylesheet" type="text/css" href="Tasarim/assets/css/bootstrap.min5e1f.css?v=2">
     <link rel="icon" type="image/png" href="Cdn/maskilogo.png">

    <link rel="stylesheet" type="text/css" href="Tasarim/assets/fontello/css/fontello.css">
    <link rel="stylesheet" href="Tasarim/assets/lightbox/css/lightbox.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,600i,700|Oswald:400,500&amp;display=swap&amp;subset=latin-ext"
          rel="stylesheet">
    <link href="ajax2/libs/animate.css/3.7.2/animate.min.css"
          rel="stylesheet">
    <script src="../kit.fontawesome.com/eada634938.js" crossorigin="anonymous"></script>
          
    <link rel="stylesheet" type="text/css" href="Tasarim/assets/css/kaskibea6.css?v=7">
        <link rel="stylesheet" media="only screen and (max-device-width:600px)" type="text/css" href="Tasarim/assets/css/kaski.mobilae52.css?v=5">
    <link rel="stylesheet" media="only screen and (max-device-width:1198px)" type="text/css" href="Tasarim/assets/css/kaski.webf500.css?v=13">
    <link rel="stylesheet" media="only screen and (max-device-width:1198px)" type="text/css" href="Tasarim/assets/css/bootstrap.min.mobilc164.css?v=9">
<style>
    .yanmenu {
        background: #0e1425;
        background: linear-gradient(0deg, #0e1425 0%, #09681fc2 100%);
    }

    .header .nav a,.icsayfa .sayfaust {
        color: #09681fc2 !important;
    }

    .header a.abonemenu, .header a.abonemenu, .slayt .slaytaciklama a,.Kutular .Kutu.KutuBg:hover,.SayfaResim .galeri:hover {
        background: #145aa7 ;
    }

    .Kutular .Kutu,.SayfaResim .galeri {
        border-color: #145aa7 !important;
    }

    .Kutular .Kutu.KutuBg {
        background: linear-gradient(0deg, #0e1425 0%, #145aa7 100%);
    }
    .lds-ripple {
      display: inline-block;
      position: relative;
      width: 80px;
      height: 80px;
    }
    .lds-ripple div {
      position: absolute;
      border: 4px solid #fff;
      opacity: 1;
      border-radius: 50%;
      animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
    }
    .lds-ripple div:nth-child(2) {
      animation-delay: -0.5s;
    }
    @keyframes lds-ripple {
      0% {
        top: 36px;
        left: 36px;
        width: 0;
        height: 0;
        opacity: 1;
      }
      100% {
        top: 0px;
        left: 0px;
        width: 72px;
        height: 72px;
        opacity: 0;
      }
    }


</style>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-21Y56SZL80"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
	  gtag("js", new Date());

  gtag("config", "G-21Y56SZL80");
</script>
	


</head>
<body>

<style>
    .odeme {
        background: #124b8c;
    }

    .odeme-a {
        color: white !important;
    }

    .odeme:hover {
        background: #343a40;
    }
</style>
<div class="yanmenu">
    <ul>
         <li>
            <a href="#" target="_blank" title="Online ödeme, Abonelik işlemleri, Başvurular" class="wow fadeInLeft" data-wow-duration="0s">
                <i class="far fa-credit-card" title="Online ödeme, Abonelik işlemleri, Başvurular"></i>
                <span>E-MASKİ<br></span>
            </a>
        </li> <li>
            <a href="#"  title="Su kesintisi" class="wow fadeInLeft" data-wow-duration="1s">
                <i class="far fa-address-card" title="Su kesintisi, su ne zaman gelir vb"></i>
                <span>SU KESİNTİSİ<br></span>
            </a>
        </li> <li>
            <a href="#"  title="Su kesintisi" class="wow fadeInLeft" data-wow-duration="1s">
                <i class="far fa-address-card" title="Haberlerimiz"></i>
                <span>HABERLER<br></span>
            </a>
        </li> <li>
            <a href="#"  title="Bize Telefon hattı üzerinden ulaşabilirsiniz." class="wow fadeInLeft" data-wow-duration="2s">
                <i class="fas fa-headphones-alt" title="Bize Telefon hattı üzerinden ulaşabilirsiniz."></i>
                <span>MASKİ<br>İLETİŞİM</span>
            </a>
        </li> <li>
            <a href="#"  title="İl ve ilçe genelindeki ödeme noktalarımız" class="wow fadeInLeft" data-wow-duration="3s">
                <i class="fas fa-map-marked-alt" title="İl ve ilçe genelindeki ödeme noktalarımız"></i>
                <span>ÖDEME<br>NOKTALARI</span>
            </a>
        </li> <li>
            <a href="#"  title="Yapılan ve devam eden projelerimiz, arıza çalışmalarımız." class="wow fadeInLeft" data-wow-duration="4s">
                <i class="fas fa-hard-hat" title="Yapılan ve devam eden projelerimiz, arıza çalışmalarımız."></i>
                <span>MASKİ<br>NEREDE ?</span>
            </a>
        </li> <li>
            <a href="#"  title="Fotoğraflar" class="wow fadeInLeft" data-wow-duration="5s">
                <i class="fas fa-hands-helping" title="Fotoğraflar"></i>
                <span>FOTOĞRAF GALERİ <br></span>
            </a>
        </li> <li>
            <a href="#"  title="" class="wow fadeInLeft" data-wow-duration="6s">
                <i class="far fa-lightbulb" title=""></i>
                <span>YAYINLARIMIZ<br></span>
            </a>
        </li>    </ul>
</div>

<div class="Sayfa">
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                    <a href="index.php" class="logo">
                        <img src="Cdn/maski.logo.png"
                             alt="MASKİ - Malatya Büyükşehir Belediyesi Su ve Kanalizasyon İdaresi Genel Müdürlüğü">
                    </a>
                </div>
                <div class="col-md-8 col-11">
                    <nav class="navbar navbar-expand-xl navbar-light">


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">ANASAYFA</a>
                                </li>
                                <li class="nav-item  dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">KURUMSAL</a>
                                    <div class="dropdown-menu"><a class="dropdown-item"  href="#">MASKİ Hakkında</a>
                                        <a class="dropdown-item"  href="#">Başkan Selahattin GÜRKAN</a>
                                        <a class="dropdown-item"  href="#">Misyon ve Vizyonumuz</a>
                                        <a class="dropdown-item"  href="#">Genel Müdürümüz</a>
                                        <a class="dropdown-item"  href="#">Teşkilat Şeması</a>
                                        <a class="dropdown-item"  href="#">Kurumsal Politikamız</a>
                                        <a class="dropdown-item"  href="#">Faaliyet Raporları</a>
                                        <a class="dropdown-item"  href="#">Mevzuat</a>
                                        <a class="dropdown-item"  href="#">Etik Davranış İlkeleri</a>
                                        <li class="nav-item  dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">MALATYA VE SU</a>
                                        <div class="dropdown-menu"><a class="dropdown-item"  href="#">Tüm Haberler</a><a class="dropdown-item"  href="#">Malatya Su</a>
                                        <a class="dropdown-item"  href="#">Kaptaj</a><a class="dropdown-item"  href="#"></a>
                                        <a class="dropdown-item"  href="#">Atıksu Arıtma Tesisi</a>
                                        <a class="dropdown-item"  href="#">Laboratuvar</a>
                                        <a class="dropdown-item"  href="#">E-Yayınlarımız</a></div></li>
                                        <li class="nav-item  dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">ABONE HİZMETLERİ</a>
                                        <div class="dropdown-menu"><a class="dropdown-item" rel="noopener noreferrer" target="_blank" href="#">Abone İşlemleri</a>
                                        <a class="dropdown-item" rel="noopener noreferrer" target="_blank" href="#">Maski Tarifeler Cetveli</a>
                                        <a class="dropdown-item" rel="noopener noreferrer" target="_blank" href="#">Sayaçlar</a>
                                        <a class="dropdown-item" rel="noopener noreferrer" target="_blank" href="#">Usulsüz Kullanım</a></div></li>
                                        <li class="nav-item  dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">GÜNCEL</a>
                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" rel="noopener noreferrer" target="_blank" href="#">Haberler</a>
                                            <a class="dropdown-item" rel="noopener noreferrer" target="_blank" href="#">Duyurular</a>
                                            <a class="dropdown-item" rel="noopener noreferrer" target="_blank" href="#">Videolar</a>
                                            <a class="dropdown-item" rel="noopener noreferrer" target="_blank" href="#">Fotoğraf Galerisi</a></div></li>
                                            <li class="nav-item  dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">İLETİŞİM</a>
                                                <div class="dropdown-menu">
                                                <a class="dropdown-item" rel="noopener noreferrer" target="_blank" href="#">İletişim Bilgileri</a>
                            </ul>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                </div>
                <div class="col-3 hidden-xs">
                </div>
            </div>
        </div>
    </div><div class="container-fluid"><script src="ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="container-fluid">
<div class="icsayfa" style="margin-bottom: 58px !important;">

    <div class="sayfaust">Tüm Haberler</div><div class="row" style="margin-left: 0px;">
    <?php   while ($satir=mysqli_fetch_array($kayitlar)){
        foreach($kayitlar as $value ){
        ?>
<?php echo '<div class="shadow p-3 mb-5 bg-white rounded col-lg-3 col-sm-3 col-xl-3 col-md-12">
  <a href="#" style="color: black"><h6 class="card-title">
  <img src="'.$value["Foto"].'" class="card-img-top" alt="..."></a>
  <div class="card-body" style="padding: 2px;">
  <h6> <?php echo "'.'<a href ="haber1.php?sid='.$value["Id"].'"></a>'; ?>
  <?php echo '<a href ="haber1.php?sid=' .$value["Id"]. '">'.$value['Baslik'] ?> <?php '</a> </h6>
    '?>
    
    <?php echo "
  </div>
</div>"; }}?>
    
    
    
    
    <div class="row" style="width: 100%;">
    <div class="col-12 offset-5">
        <ul class="pagination">
            <li><a class="page-link" href="tum-haberlercff1.html?p=1">İlk Sayfa</a></li>
            <li class="page-item disabled">
                <a class="page-link" href="#">Geri</a>
            </li>
            <li class="page-item ">
                <a class="page-link" href="tum-haberler905b.html?p=2">İleri</a>
            </li>
            <li><a class="page-link" href="tum-haberler5cfa.html?p=91">Son Sayfa</a></li>
        </ul>
    </div>
</div>
</div></div>

</div>
<script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e4990b92ef827d2"></script>
    </div>
<style>
    #botFrame.aktif {
        width: 380px !important;
        height: 600px !important;
    }
</style>
<div style="outline: none!important;
    visibility: visible!important;
    resize: none!important;
    box-shadow: none!important;
    overflow: visible!important;
    background: none!important;
    opacity: 1!important;
    filter: alpha(opacity=100)!important;
    -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity1)!important;
    -moz-opacity: 1!important;
    -khtml-opacity: 1!important;
    top: auto!important;
    right: 10px!important;
    bottom: 40px!important;
    left: auto!important;
    position: fixed!important;
    border: 0!important;
    min-height: 0!important;
    min-width: 0!important;
    max-height: none!important;
    max-width: none!important;
    padding: 0!important;
    margin: 0!important;
    -moz-transition-property: none!important;
    -webkit-transition-property: none!important;
    -o-transition-property: none!important;
    transition-property: none!important;
    transform: none!important;
    -webkit-transform: none!important;
    -ms-transform: none!important;
    width: auto!important;
    height: auto!important;
    z-index: 2000000000!important;
    background-color: transparent!important;
    cursor: auto!important;
    float: none!important;
    border-radius: unset!important;
    pointer-events: auto!important;">
    <iframe id="botFrame"
            style="outline: none !important;visibility: visible !important;resize: none !important;box-shadow: none !important;overflow: visible !important;background: none transparent !important;opacity: 1 !important;top: auto !important;right: auto !important;bottom: auto !important;left: auto !important;position: static !important;border: 0px !important;min-height: auto !important;min-width: auto !important;max-height: none !important;max-width: none !important;padding: 0px !important;margin: 0px !important;transition-property: none !important;transform: none !important;width: 75px;z-index: 999999 !important;cursor: auto !important;float: none !important;border-radius: unset !important;pointer-events: auto !important;display: block !important;height: 150px"
            src="mBot/index.html"></iframe>
</div>


<div class="modal fade" style="z-index:999999999;" id="surveyModal" data-backdrop="static" data-keyboard="false"
     tabindex="-1" aria-labelledby="aboutMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal-lg">
            <div class="modal-header bg-info" style="padding: 10px;display: none;
    color: white;">
                <h5 class="modal-title" style="font-size: larger;">Duyuru</h5>
            </div>
            <div class="modal-body" style="font-size: larger;" id="firstModalText">
                <img src="Cdn/web-popup.png" style="width: -webkit-fill-available;" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="dontShowAgain()">Tekrar Gösterme
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>




	
	
	<script src="ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
            
    <script src="../cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script type="text/javascript" src="Tasarim/assets/js/bootstrap.min.js"></script>
    <script>
    
    </script>
    
    <script src="Tasarim/assets/lightbox/js/lightbox-plus-jquery.min.js"></script>
        <script src="Tasarim/assets/js/jquery.mask.min.js"></script>
        
    <script src="Tasarim/assets/js/kaski1c07.js?v=17"></script>
    
    </body>


</html>
	




