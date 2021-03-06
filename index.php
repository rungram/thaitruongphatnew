<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED); //bo thonng bao khi cac file chua dinh nghia
	session_start();
	$session=session_id();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	@define ( _upload_folder , './media/upload/' );

	if(!isset($_SESSION['lang2']))
	{
	$_SESSION['lang2']='vi';
	}
	
	$lang=$_SESSION['lang2']; //Lấy ngỗn ngữ
	require_once _source."lang_$lang.php";	//Lấy các Hằng.

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	include_once _source."counter.php";
	include_once _source."useronline.php";	
	
	
	include_once _lib."functions_giohang.php";
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
	
	$pid=$_REQUEST['productid'];	
	$_SESSION['size'.$pid]=$_REQUEST['spsize']; 
	$_SESSION['mau'.$pid]=$_REQUEST['spmau']; 
	$q=isset($_GET['quality']) ? (int)$_GET['quality'] : "1";
	addtocart($pid,$q);
	redirect("http://$config_url/gio-hang.html");
	}
	$config_url='localhost:81/thaitruongphatnew';
?>
<!DOCTYPE html>
<html lang="en">
<base href="http://<?=$config_url?>/"	/>
<head>
<meta charset="utf-8">
<title>XƯỞNG SỬA CHỮA Ô TÔ PHẠM CHƯƠNG</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<meta name="author" content="#" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
<link href="css/cubeportfolio.min.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<!-- Theme skin -->
<link id="t-colors" href="skins/default.css" rel="stylesheet" />
<!-- boxed bg -->
<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<link href="css/vantam.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
  <!-- start header -->
  <?php include _template."layout/header.php"; ?>
  <!-- end header -->
  <section id="featured" class="bg">
    <!-- start slider -->
    <!-- start slider -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Slider -->
          <div id="main-slider" class="main-slider flexslider">
            <ul class="slides">
              <li> <img src="img/slides/flexslider/banner-slide-phamchuong-1.jpg" alt="" />
                <div class="flex-caption">
                  <h3>Fully Responsive</h3>
                  <p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p>
                  <a href="#" class="btn btn-theme">Learn More</a> </div>
              </li>
              <li> <img src="img/slides/flexslider/banner-slide-phamchuong-2.jpg" alt="" />
                <div class="flex-caption">
                  <h3>Clean & Fast</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p>
                  <a href="#" class="btn btn-theme">Learn More</a> </div>
              </li>
            </ul>
          </div>
          <!-- end slider -->
        </div>
      </div>
    </div>
  </section>
  <section id="content">
    <!-- end divider -->
    <div class="container">
      <div class="col-lg-12">
        <div class="row">
          <?php include _template.$template."_tpl.php"; ?>
          <?php include _template."layout/right.php"; ?>
        </div>
      </div>
    </div>
    <!-- divider -->
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-6">
          <div class="widget">
            <h4>Liên hệ với chúng tôi</h4>
            <address>
            <strong>XƯỞNG SỬA CHỮA Ô TÔ PHẠM CHƯƠNG </strong><br>
            Địa chỉ: 100 Đào Sư Tích, ấp 3, phường Phước Kiểng, huyện NHà Bè, Tp.HCM
            </address>
            <p> <i class="icon-phone"></i>Điện thoại: 0909 718 872<br>
              <i class="icon-envelope-alt"></i>Email: huutan.vo@gmail.com </p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-6">
          <div class="widget">
            <h4>Văn phòng giao dịch</h4>
            <address>
            <strong>XƯỞNG SỬA CHỮA Ô TÔ PHẠM CHƯƠNG </strong><br>
            Địa chỉ: 100 Đào Sư Tích, ấp 3, phường Phước Kiểng, huyện NHà Bè, Tp.HCM
            </address>
            <p> <i class="icon-phone"></i>Điện thoại: 0909 718 872<br>
              <i class="icon-envelope-alt"></i>Email: huutan.vo@gmail.com </p>
          </div>
        </div>
        
      </div>
    </div>
    <div id="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="copyright">
              <p> <span>&copy; 2017 All right reserved. <a href="#/"></a>
                <!-- 
                                All links in the footer should remain intact. 
                                Licenseing information is available at: http://bootstraptaste.com/license/
                                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Sailor
                            -->
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="social-network">
              <li><a href="https://www.facebook.com/GaragePhamChuong/" data-placement="top" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
              <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="plugins/flexslider/flexslider.config.js"></script>
<!--<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/jquery.easing.1.3.js"></script>

<script src="js/custom.js"></script>-->
</body>
</html>
