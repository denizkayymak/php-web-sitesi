	
<!DOCTYPE html>
<html lang="tr">



<head>

      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

     <title>MASKİ - Malatya Büyükşehir Belediyesi Su ve Kanalizasyon İdaresi Genel Müdürlüğü</title><meta name="description"
      content="MASKİ - Mayseri Büyükşehir Belediyesi Su ve Kanalizasyon İdaresi Genel Müdürlüğü"/><meta name="robots" content="index, follow"/>
      <meta name="copyright" content="wicyo.com"><meta name="language" content="tr"><link rel="shortcut icon" href="Cdn/fav.html"/>
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
        <link rel="stylesheet" media="only screen and (max-device-width:600px)" type="text/css" href="Tasarim/assets/css/kaski.mobilae24.css?v=14">
    <link rel="stylesheet" media="only screen and (max-device-width:1198px)" type="text/css" href="Tasarim/assets/css/kaski.web1bce.css?v=6">
    <link rel="stylesheet" media="only screen and (max-device-width:1198px)" type="text/css" href="Tasarim/assets/css/bootstrap.min.mobilf500.css?v=13">
<style>
    .yanmenu {
        background: #062d12;
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

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-21Y56SZL80"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
	  gtag("js", new Date());

  gtag("config", "G-21Y56SZL80");
</script>
</head>
<body>

<?php 

$bag=mysqli_connect("localhost","root","","maski") ;
if (!$bag) die("baglantı Kurulamadı...".mysqli_error());
mysqli_query($bag,"set names 'utf8'");

$sql="select * from Haberler ";
$kayıtlar=mysqli_query($bag,$sql);



?>
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
            <a href="tum-haberler.php"  title="Su kesintisi" class="wow fadeInLeft" data-wow-duration="1s">
                <i class="far fa-address-card" title="Haberlerimiz"></i>
                <span>HABERLER<br></span>
            </a>
        </li> <li>
            <a href="#"  title="Bize Telefon hattı üzerinden ulaşabilirsiniz." class="wow fadeInLeft" data-wow-duration="2s">
                <i class="fas fa-headphones-alt" title="Bize Telefon hattı üzerinden ulaşabilirsiniz."></i>
                <span>MASKİ<br>İLETİŞİM</span>
                <i class="fas fa-cloud"></i>
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
                                        <a class="dropdown-item"  href="#">Kaptaj</a><a class="dropdown-item"  href="#">Gazetelerde KASKİ</a>
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
                                            <a class="dropdown-item" rel="noopener noreferrer" target="_blank" href="tum-haberler.php">Haberler</a>
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
    </div><style>
    .duyuru {
        border: 2px solid #228ae6;
        flex-basis: content;
        height: 2.5rem
    }

    .duyuru-icon {
        background-color: #228ae6;
        padding: 10px 15px;
        z-index: 6
    }

    .duyuru .cnt-marquee {
        overflow: hidden;
        width: 100%;
        height: 100%
    }

    .duyuru .cnt-marquee a {
        padding: 0 1rem;
        border-right: 2px solid #228ae6;
        line-height: 2.2
    }

    .duyuru .cnt-marquee .str_move {
        white-space: nowrap;
        position: absolute;
        top: 0;
        left: 0;
        cursor: move
    }

    .duyuru-btn {
        padding: 10px;
        background-color: #228ae6;
        font-size: .9rem;
        font-weight: 600;
        white-space: nowrap;
    }

    .Bilgilendirme2 {
        margin-top: 5px;
        padding: 10px 0;
        background-size: cover;
        background-position: center;
        color: #fff;
    }
</style>

<div class="container-fluid">
    <div class="row main" style="">
        <div class="col-md-12 col-sm-12  col-xl-7 col-lg-7">

            <div class="slayt" style="margin-bottom: 10px;">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li><li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li><li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li><li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="7" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="8" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="9" class=""></li> </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item ">
                            <a href="#" ><img src="Cdn/haberr4.jpg" class="d-block w-100" style="object-fit: cover !important;" alt="Gesi Fatih Mahallemizde muhtelif bölgelerdeki yeni konutlar için içme suyu şebeke hattı imalatı ve abone bağlantı çalışması gerçekleştiriyoruz."/></a>
                            <div class="slaytaciklama" style="text-align: center;width: 100%;">
                                <h3 style="background: #85c29547;padding: 5px;">Gürkaynak Mahalle Muhtarı İbrahim Duman: “İNANILMAZ HİZMETLER YAPILIYOR”</h3>
                                <p style=""></p>
                                <a href="#">Habere git</a>
                            </div>
                        </div> 

                         <div class="carousel-item active">
                            <a href="#" ><img src="Cdn/haberr.jpg" class="d-block w-100" style="object-fit: cover !important;" alt="KASKİ, Yağmur Suyu Hattı İmalatına Hız Verdi"/></a>
                            <div class="slaytaciklama" style="text-align: center;width: 100%;">
                                <h3 style="background: #85c29547;padding: 5px;">ATIKSU ARITMA TESİSİ İNŞAA EDİYORUZ.</h3>
                                <p style=""></p>
                                <a href="#">Habere git</a>
                            </div>
                        </div> <div class="carousel-item ">
                            <a href="#" ><img src="Cdn/haberr1.jpg" class="d-block w-100" style="object-fit: cover !important;" alt="Hacılar İlçemize bağlı Yukarı Mahalle’de ekonomik ömrünü tamamlamış içme suyu şebeke hattımızı son teknoloji ile üretilen yeni nesil borular ile yeniliyoruz."/></a>
                            <div class="slaytaciklama" style="text-align: center;width: 100%;">
                                <h3 style="background: #85c29547;padding: 5px;">SALGIN İDDİALARINA RAPORLU YANIT</h3>
                                <p style=""></p>
                                <a href="#">Habere git</a>
                            </div>
                        </div> <div class="carousel-item ">
                            <a href="#" ><img src="Cdn/haberr2.jpg" class="d-block w-100" style="object-fit: cover !important;" alt="Yenidoğan Mahallesi Alınteri Caddesi’nde yeni konutlar için içme suyu şebeke hattı imalatı gerçekleştiriyoruz."/></a>
                            <div class="slaytaciklama" style="text-align: center;width: 100%;">
                                <h3 style="background: #85c29547;padding: 5px;">GÜRKAN: BİR YANDAN İÇMESUYU HATTI DÖŞENİRKEN BİR YANDAN DA ASFALT SERİMİ DEVAM EDİYOR</h3>
                                <p style=""></p>
                                <a href="#">Habere git</a>
                            </div>
                        </div> <div class="carousel-item ">
                            <a href="#" ><img src="Cdn/haberr3.jpg" class="d-block w-100" style="object-fit: cover !important;" alt="Gesi Fatih Mahallemizde muhtelif bölgelerdeki yeni konutlar için içme suyu şebeke hattı imalatı ve abone bağlantı çalışması gerçekleştiriyoruz."/></a>
                            <div class="slaytaciklama" style="text-align: center;width: 100%;">
                                <h3 style="background: #85c29547;padding: 5px;">ELMALI’NIN 38 YILLIK ALTYAPISI TAMAMEN YENİLENDİ</h3>
                                <p style=""></p>
                                <a href="#">Habere git</a>
                            </div>
                        </div>
                        
                         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Geri</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">İleri</span>
                        </a>
                    </div>

                </div>
            </div>
            <!--            <div class="Bilgilendirme">-->
            <div class="Bilgilendirme2" style="display: none">
                <div class="duyuru d-flex align-items-stretch fadeIn mb-1 bg-white">
                    <div class="duyuru-icon text-white d-flex align-items-center">
                        <i class="fa fa-bullhorn"></i>
                    </div>
                    <marquee onmouseover="this.stop();" onmouseout="this.start();"
                             class="cnt-marquee position-relative  w-100 h-100 str_wrap"
                             style=" height: 34px;">
                        <a href="#">Alo 185, çağrı merkezimizi arayarak bilgi alabilir, birçok işlemlerinizi halledebilirsiniz.</a> <div class="carousel-item"></div>
                    </marquee>

                    <a class="duyuru-btn text-white d-flex align-items-center" href="index.html"></a>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-5  col-xl-5">
            <div class="Kutular">
                <div class="row">
                     <div class="col-md-4 col-lg-6 col-xl-6 col-sm-6 col-xs-12">
                        <a href="#" class="Kutu    wow bounceIn" data-wow-duration="1.1s" style="background-position: center;background-image: url('Cdn/başkan1.png') !important">
                        <div class="KutuYazi"><p>SELAHATTİN GÜRKAN</p><small>Malatya Büyükşehir Belediye Başkanı</small></div></a></div>
                        <div class="col-md-4 col-lg-6 col-xl-6 col-sm-6 col-xs-12">
                        <a href="#" class="Kutu    wow bounceIn" data-wow-duration="1.2s" style="background-position: center;background-image: url('Cdn/maskimudur.jpg') !important">
                        <div class="KutuYazi"><p>MEHMET MERT</p><small>MASKİ Genel Müdürü</small></div></a></div> <div class="col-md-4 col-lg-6 col-xl-6 col-sm-6 col-xs-12">
                        <a href="#" class="Kutu  KutuBg  wow bounceIn" data-wow-duration="1.3s" ><i class="fas fa-tint"></i><p>Güncel Su Fiyatları</p></a></div> <div class="col-md-4 col-lg-6 col-xl-6 col-sm-6 col-xs-12">
                        <a href="#" class="Kutu  KutuBg  wow bounceIn" data-wow-duration="1.4s" ><i class="fa fa-balance-scale"></i><p>Hukuk ⚖ Mevzuat</p></a></div> <div class="col-md-4 col-lg-6 col-xl-6 col-sm-6 col-xs-12">
                        <a href="#" class="Kutu  KutuBg  wow bounceIn" data-wow-duration="1.5s" ><i class="fa fa-faucet"></i><p>Güncel İçme Suyu Analiz Sonuçları</p></a></div> <div class="col-md-4 col-lg-6 col-xl-6 col-sm-6 col-xs-12">
                        <a href="#" class="Kutu  KutuBg  wow bounceIn" data-wow-duration="1.6s" ><i class="fas fa-flask"></i><p>Laboratuvar</p></a></div> <div class="col-md-4 col-lg-6 col-xl-6 col-sm-6 col-xs-12">
                        <a href="#" class="Kutu  KutuBg  wow bounceIn" data-wow-duration="1.7s" ><i class="fas fa-child"></i><p>Şubelerimiz</p></a></div> <div class="col-md-4 col-lg-6 col-xl-6 col-sm-6 col-xs-12">
                        <a href="#" class="Kutu KutuBg Kesinti KutuBg  wow bounceIn" data-wow-duration="1.9s" ><i class="fas fa-tint-slash"></i><p>Su Kesintileri</p></a></div> <div class="col-md-4 col-lg-6 col-xl-6 col-sm-6 col-xs-12">
                </div>
            </div>

        </div>
    </div>
</div>
    </div>
<style>
    #botFrame.aktif {
        width: 380px !important;
        height: 600px !important;
    }
</style>

    

<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-5">
                <p>© <?php echo date("Y") ?> MASKİ - Malatya Büyükşehir Belediyesi Su ve Kanalizasyon İdaresi Genel
                    Müdürlüğü Bütün
                    hakları saklıdır. | Deniz KAYMAK
                    
            </div>
            <div class="col-3 text-center">
				<a class="sosyalag facebook" href="https://www.facebook.com/malatyamaski" target="_blank"> <i
                            class="fab fa-facebook"></i></a>
					<a class="sosyalag twitter" href="https://twitter.com/44maski" target="_blank"> <i
                            class="fab fa-twitter"></i></a>
				<a class="sosyalag instagram" href="https://www.instagram.com/malatyamaski/" target="_blank"> <i
                            class="fab fa-instagram"></i></a>
				<a class="sosyalag youtube" href="https://www.youtube.com/channel/UCoIT43Ow3tnqIo66c8rHr-w" target="_blank"> <i
                            class="fab fa-youtube"></i></a>
				</div>
				<div class="col-4 text-right">
                <a href="#"> <i
                            class="icon-attention-filled"></i> KVKK AYDINLATMA METNİ</a>
                <a href="https://www.cimer.gov.tr/?bim=CfDJ8CLd_u-3vtlEmchj_bWBwBejhqFgk4PBkBL0Deop5LeFEieq6CqtzvYV6L8dwYXFLCMaEVkJ296BIoOFZVgUpNxSwCDfkdW1PgtSYUN93e5ILFycGjbb1VLHbbsgghJZsU7ru0NCD58z44KPPAdCBfYaq9-_vLKbV7gpFlHVPIhaK-gSnbB9adfuKl_dpeiCnw"> <i
                class="icon-attention-filled"></i> Bilgi Edinme Başvurusu</a>
                <a href="mailto:info@maski.gov.tr"> <i class="icon-mail"></i> info@maski.gov.tr </a>
            </div>
        </div>
    </div>
</div>


             
            </form>
        </div>
    </div>
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




	
	
	<script src="ajax1/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
            
    <script src="ajax2/libs/wow/1.1.2/wow.min.js"></script>
    <script src="ajax2/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script type="text/javascript" src="Tasarim/assets/js/bootstrap.min.js"></script>
    <script>
    
    </script>
    
    
        <script src="Tasarim/assets/js/jquery.mask.min.js"></script>
        
    <script src="Tasarim/assets/js/kaski8fa7.js?v=18"></script>
    
    </body>


</html>
	




