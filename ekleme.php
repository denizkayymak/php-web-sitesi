<?php if(isset($_POST["submit"]))
{
    include "baglan.php";
    $sql="INSERT INTO 'haberler' ('Baslik','Haber_On','Haber','Tarih','Foto')VALUES (NULL ,?,?,?,?,?);";
    $dizi=[
        $_POST['liste'],
        $_POST['metin'],
        $_POST['metin1'],
        $_POST['metin2'],
        $_POST['metin3'],
        $_POST['message']
    ];
    $sth=$baglan -> prepare($sql);
    $sonuc -> execute($dizi);
    header("Location:listeleme.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Yönetim Sistemi</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
              <a href="indexx.php" class="logo"><b>Yönetim Sistemi</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
               
                                    </div>
                            <div class="notify-arrow notify-arrow-green"></div>
                            
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="cikis.php">Çıkış</a></li>
            	</ul>
            </div>
        </header>
        <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="indexx.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Deniz Kaymak</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="indexx.php">
                          <i class="fa fa-dashboard"></i>
                          <span>İçerik Yönetim Sistemi</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Pop-Up Banner Ayarları</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                         <a class="dropdown-item"  href="listeleme.php">
                          <span>Habeler</span> 
                        
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>E-Posta Listesi</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Manşet Ayarları</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Galeri</span>
                      </a>
                      
                  </li>

              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Haber Düzenle</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel" style="height: 500px;">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Haber Ekle</h4>
                      <form class="form-horizontal style-form" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Haber Türü</label>
                              
                              <div class="col-sm-10">
                              <select name="liste">
						  <option value="Manşet">Manşet</option>
						  <option value="Duyuru">Duyuru</option>
						</select>
                                  
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Haberin Başlığı</label>
                              <div class="col-sm-10">
                                  <input  name="metin" type="text" class="form-control" value="" >
                                  
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Ön Açıklama</label>
                              <div class="col-sm-10">
                              <input  name="metin1" type="text" class="form-control round-form" value="">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Haber</label>
                              <div class="col-sm-10">
                              <input  name="metin2" type="text" class="form-control round-form" value="">
                              </div>
                                </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Fotoğraf</label>
                              <div class="col-sm-10">
                              

                        Gönderilecek Dosya_Adı:<br>

                        <input name="message" type="file" value=""><br>   
                           
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tarih</label>
                              <div class="col-sm-10">
                              <input  name="metin3" type="text" class="form-control round-form" value="">
                              </div>
                      <input name="submit" type="submit" >
                  </div> 
                  
                </form>
                </div>  	
          	</div>
          <a class="btn btn-theme btn-lg btn-block pull-left" href="#" >Haber Ekle</a> <br>     
      <footer class="site-footer"> 
          <div class="text-center">
         
              2022-Deniz Kaymak
              <a href="form_component.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
     
  </section>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <script src="assets/js/common-scripts.js"></script>

    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<script src="assets/js/bootstrap-switch.js"></script>
	

	<script src="assets/js/jquery.tagsinput.js"></script>
	

	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
