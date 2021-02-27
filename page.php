<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal | Page details</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>
<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->

<!--Header-->
<?php include('includes/header.php');?>
                      <?php
$pagetype=$_GET['type'];
$sql = "SELECT type,detail,PageName from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1><?php   echo htmlentities($result->PageName); ?></h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li><?php   echo htmlentities($result->PageName); ?></li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<section class="about_us section-padding">
  <div class="container">
    <div class="section-header text-center">


      <h2><?php   echo htmlentities($result->PageName); ?></h2>
      <p><?php  echo $result->detail; ?> </p>
    </div>
   <?php } }?>
  </div>
</section>
<!-- /About-us-->
<div class="py-5 text-center text-info background-info" style="background:rgb(120, 195, 213)">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-md-12">
                <h1 class="mb-3" contenteditable="true">Meet our team</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 p-4">
							<img class="img-fluid d-block mb-3 mx-auto rounded-circle" alt="Card image cap" src="assets/images/kx.jpg" width="200">
                <a href="member1.php"><h4> <b>Cheah Kah Xuan</b> </h4></a>
                <p class="mb-0">Leader</p>
            </div>
            <div class="col-lg-4 col-md-6 p-4">
							<img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="assets/images/zy.jpg" alt="Card image cap" width="200">
                <a href="member4.php"><h4> <b>Lai Zhi Yuan</b> </h4></a>
                <p class="mb-0">Asst Leader</p>
            </div>
            <div class="col-lg-4 p-4">
							<img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="assets/images/ch.jpg" width="200">
                <a href="member2.php"><h4> <b>Chong Hong Loke</b> </h4></a>
                <p class="mb-0">Programmer</p>
            </div>
        </div>
				<div class="row">
            <div class="col-lg-4 col-md-6 p-4">
							<img class="img-fluid d-block mb-3 mx-auto rounded-circle" alt="Card image cap" src="assets/images/ed.jpg" width="200">
                <a href="member3.php"><h4> <b>Edison Tea</b> </h4></a>
                <p class="mb-0">Type Writter</p>
            </div>
            <div class="col-lg-4 col-md-6 p-4">
							<img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="assets/images/foong.jpg" alt="Card image cap" width="200">
                <a href="member5.php"><h4> <b>Foong Zhuang Hoong</b> </h4></a>
                <p class="mb-0">Research</p>
            </div>

        </div>
    </div>
</div>

<<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top-->

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form -->

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form -->

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form -->

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>
<!--Slider-JS-->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:12 GMT -->
</html>
