<?php 
    
    $bag=mysqli_connect("localhost","root","","maski");
    if(!$bag)die("baglantı kurulamadı...".mysqli_error());
    mysqli_query($bag,"set names'utf8'");

    $s=$_GET["sid"];

    $sql="select *from haberler where Id=$s";
    $kayitlar=mysqli_query($bag,$sql);
    
    ?>	
<!DOCTYPE html>
<html lang="tr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
     <title>MASKİ - Malatya Büyükşehir Belediyesi Su ve Kanalizasyon İdaresi Genel Müdürlüğü - MASKİ,YUKARIÖRÜKÇÜ’NÜN İÇME SUYU SORUNU ÇÖZÜLÜYOR</title><meta name="description" content=""/><meta name="robots" content="index, follow"/><meta name="copyright" content="wicyo.com"><meta name="language" content="tr"><link rel="shortcut icon" href="Cdn/fav.html"/><meta property="og:image" content="Cdn/WhatsApp_Image_2022-08-02_at_13.42.24.jpg">
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
    <link rel="stylesheet" media="only screen and (max-device-width:1198px)" type="text/css" href="Tasarim/assets/css/kaski.webc164.css?v=9">
    <link rel="stylesheet" media="only screen and (max-device-width:1198px)" type="text/css" href="Tasarim/assets/css/bootstrap.min.mobile5bf.css?v=12">
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
                                        <div class="dropdown-menu"><a class="dropdown-item"  href="tum-haberler..php">Tüm Haberler</a><a class="dropdown-item"  href="#">Malatya Su</a>
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
    </div><div class="container-fluid"><link rel="stylesheet" type="text/css" href="../cdn.jsdelivr.net/npm/slick-carousel%401.8.1/slick/slick.css"/>
<link rel="stylesheet" href="ajax2/libs/slick-carousel/1.9.0/slick-theme.min.css"
      integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY=" crossorigin="anonymous"/>
<style>
    .slick-dots{
        background-color: white;
    }
    .slick-next:before, .slick-prev:before{
        color: #134f91;
    }

</style>

<div class="container-fluid">
<div class="row">
<div class="col-md-9 col-12">

<div class="icsayfa" style="min-height: 500px;">
	
<?php   while ($satir=mysqli_fetch_array($kayitlar)){
    
    foreach($kayitlar as $value ) 
        ?>
<?php echo '<div class="sayfaust">'.$value["Baslik"]; ?>

<?php echo '<p><small class="haberTarih">' .$value["Tarih"].'    </small></p></div>  
<img src="'. $value["Foto"].'" class="manset_image" align="left" >
<div class="kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q" style="overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: " segoe="" 
ui="" historic",="" "segoe="" ui",="" helvetica,="" arial,="" sans-serif;="" color:="" rgb(5,="" 5,="" 5);="" font-size:="" 15px;"="">
<div dir="auto" style="font-family: inherit;"><br></div></div><div class="cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q"
 style="overflow-wrap: break-word; margin: 0.5em 0px 0px;" segoe="" ui="" historic",="" "segoe="" ui",="" helvetica,="" arial,="" sans-serif;=""
  color:="" rgb(5,="" 5,="" 5);="" font-size:="" 15px;"=""><div dir="auto" style=""><span style="white-space: pre-wrap;">
 <strong>'. $value["Haber_On"].'</strong> <br>'. $value["Haber"].'

</span><br></div></div></div></div>'; ?>
<?php 

}
?>

        </div></div></div></div>
        <div class="social">
			<h4>SOSYAL MEDYA</h4>
								<a title="facebook" href="malatyamaski.html"><i class="fab fa-facebook-f"></i></a>					
								<a title="telegram" href="https://twitter.com/44maski"><i class="fab fa-twitter"></i></a>				
								<a title="instagram" href="https://instagram.com/malatyamaski"><i class="fab fa-instagram"></i></a>
								<a title="youtube" href="https://www.youtube.com/channel/UCoIT43Ow3tnqIo66c8rHr-w"><i class="fab fa-youtube"></i></a>		
			</div>
	</div>

		

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
        crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>
<script src="ajax2/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $('.center').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

</script><script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e4990b92ef827d2"></script>
    </div>
<style>
    #botFrame.aktif {
        width: 380px !important;
        height: 600px !important;
    }
</style>


                
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
    
    <script src="Tasarim/assets/lightbox/js/lightbox-plus-jquery.min.js"></script>
        <script src="Tasarim/assets/js/jquery.mask.min.js"></script>
        
    <script src="Tasarim/assets/js/kaski8e5e.js?v=15"></script>
    
    </body>
</html>
	




