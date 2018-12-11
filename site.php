<?php
session_start();
include 'config/config.php';

if($_SESSION['nama']=="")
{
	header('location:login/');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Budo Academy Tanjungpinang">
    <meta name="author" content="BudoLabs">
    <meta name="keyword" content="Karate, Aikido, Tanjungpinang, Tee Tanjungpinang, Tee Academy, Budo Academy, Aikido Tanjungpinang">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Sistem Informasi Manajemen Dojo Budo Academy Tanjungpinang</title>

    <!--DataTables CSS-->
    <link href="DataTables/datatables.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">

    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!--link javascript-->
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>

    <script type="text/javascript" src="DataTables/DataTables-1.10.16/js/dataTables.bootstrap.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->

      <header class="header white-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="?hal=" class="logo">Budo<span class="lite">Academy</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">           
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    
                    
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" <?php echo 'src="images/common/'; echo $_SESSION['pic']; echo '.jpeg"'?> width="40">
                            </span>
                            <span class="username"><?php echo $_SESSION['nama'];?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="?hal=users"><i class="icon_profile"></i> Profile</a>
                            </li>
                            </li>

                            <?php

                            if ($_SESSION['role']=='admin')
                            {
                            	echo '<li>
                                <a href="?hal=admin"><i class="icon_profile"></i> Tambah Pengguna</a>
                            </li>';
                            }

                            ?>
                            
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class=<?php if(@$_GET['hal']=='utama')
                  					{
                  						echo '"active"';
                  					}else
                  					{
                  						echo '""';
                  						}?>>
                      <a class="" href="?hal=utama">
                          <i class="icon_house_alt"></i>
                          <span>Utama</span>
                      </a>
                  </li>
                  <li class=<?php if(@$_GET['hal']=='siswa')
                  					{
                  						echo '"active"';
                  					}else
                  					{
                  						echo '""';
                  						}?>>
                      <a class="" href="?hal=siswa">
                          <i class="icon_desktop"></i>
                          <span>Siswa Didik</span>
                      </a>
                  </li>
                  <li class=<?php if(@$_GET['hal']=='iuran')
                            {
                              echo '"active"';
                            }else
                            {
                              echo '""';
                              }?>>
                      <a class="" href="?hal=iuran">
                          <i class="icon_currency"></i>
                          <span>Iuran</span>
                      </a>
                  </li>
                  <li class=<?php if(@$_GET['hal']=='ujian')
                            {
                              echo '"active"';
                            }else
                            {
                              echo '""';
                              }?>>
                      <a class="" href="?hal=riwayat">
                          <i class="icon_profile"></i>
                          <span>Riwayat Ujian</span>
                      </a>
                  </li>
                  <li class=<?php if(@$_GET['hal']=='program')
                            {
                              echo '"active"';
                            }else
                            {
                              echo '""';
                              }?>>
                      <a class="" href="?hal=program">
                          <i class="icon_check"></i>
                          <span>Daftar Program</span>
                      </a>
                  </li>
                  <li class=<?php if(@$_GET['hal']=='laporan')
                            {
                              echo '"active"';
                            }else
                            {
                              echo '""';
                              }?>>
                      <a class="" href="?hal=laporan">
                          <i class="icon_piechart"></i>
                          <span>Laporan</span>
                      </a>
                  </li>
                  
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->

              <?php
              	if(@$_GET['hal']=='utama' || @$_GET['hal']=="")
              	{
              		include 'utama.php';
              	}
              if(@$_GET['hal']=='siswa')
              	{
              		include 'daftar.php';
              	}
                if(@$_GET['hal']=='edit')
              	{
              		include 'edit.php';
              	}
                if(@$_GET['a'] != NULL)
                {
                  include 'change.php';
                }
                if(@$_GET['hal']=='riwayat')
                {
                  include 'riwayat.php';
                }
                if(@$_GET['hal']=='users')
                {
                  include 'users.php';
                }
                if(@$_GET['hal']=='admin')
                {
                  include 'admin.php';
                }
                if(@$_GET['hal']=='program')
                {
                  include 'program.php';
                }
               if(@$_GET['hal']=='laporan')
                {
                  include 'laporan.php';
                } if(@$_GET['hal']=='iuran')
                {
                    include 'iuran.php';
                }
               if(@$_GET['edit']=='program')
                {
                    include 'editprog.php';
                }
                

              ?>
              
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>

  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
