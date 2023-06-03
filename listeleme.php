 <?php
 include "baglan.php"; 
if(isset($_GET['sil'])){
  $sqlsil= "DELETE FROM haberler WHERE `haberler`.`Id` = ?";
  $sorgusil=$baglan->prepare($sqlsil);
  $sorgusil->execute([$_GET['sil']]);
  header('Location:listeleme.php');
}
 $sql= "SELECT * FROM haberler";
 $sorgu=$baglan -> prepare($sql);
 $sorgu ->execute();
 ?>

<!DOCTYPE html>
   <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Yönetim Sistemi</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/to-do.css">
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
              
              	  <p class="centered"><a href="index.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
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
          	<h3><i class="fa fa-angle-right"></i> Tüm Habeler</h3>
          	<div class="row mt">
          		<div class="col-md-12">
          		</div>
          	</div>	
	
              <div class="row mt">
                  <div class="col-md-12">
                      <section class="task-panel tasks-widget">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h5><i class="fa fa-tasks"></i> Tüm Haberler</h5></div>
	                        <br>
	                 	</div>
                          <div class="panel-body">
                          <?php while($satir=$sorgu -> fetch(PDO::FETCH_ASSOC)){ ?>
                              <div class="task-content">
                            
                                  <ul class="task-list">
                                      <li>
                                          
                            <div class="task-title">
                            <span class="task-title-sp"><?=$satir['Id']?></span>
                            <span class="task-title-sp"><?=$satir['Baslik']?></span>
                            <div class="pull-right hidden-phone">
                                               
                            <td width="225">
                             <a style="width : 110px"  href="duzenleme.php?Id=<?=$satir['Id']?>"><i class="fa fa-pencil"></i> </a>
                            </td> <br>
                            <td width="225">
                            <a style="width : 110px"  href="?sil=<?=$satir['Id']?>" onclick="return confirm('Silmek istediğine emin misin?')" ><i class="fa fa-trash-o "></i> </a>
                            </td>
                            </div>
                            </div>  
                            </li>
                            <?php }?>
                                      
                                         

                              <div class=" add-task-row">
                                  <a class="btn btn-success btn-lg btn-block pull-left" href="haber-duzenle.php">Haber Ekle</a> <br>
                                 <br><br>
                                 <form class="btn btn-danger btn-lg btn-block pull-right" method="post">
                                 <input name="sil" type="submit"  > Haber Sil </form>

                                
                              </div> 
                          </div>
                      </section>
                  </div>
              </div>
		
		</section>
      </section>
      <footer class="site-footer">
          <div class="text-center">
              2022-Deniz Kaymak
              <a href="todo_list.html#" class="go-top">
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
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>    
    <script src="assets/js/tasks.js" type="text/javascript"></script>

    <script>
      jQuery(document).ready(function() {
          TaskList.initTaskWidget();
      });

      $(function() {
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
      });

    </script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>