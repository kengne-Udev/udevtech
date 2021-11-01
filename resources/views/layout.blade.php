<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>UDev-Tech</title>
<!--Bootstrap-->
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
<!--Stylesheets-->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<!--Responsive-->
<!--Animation-->
<!--Prettyphoto-->
<!--Font-Awesome-->
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
<!--Owl-Slider-->

</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
<!--Preloader-->
<div id="preloader">
  <div id="pre-status">
    <div class="preload-placeholder"></div>
  </div>
</div>
<!--Navigation-->
<header id="menu">
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="#menu"><h2 id="brand">UNIVERSAL DEVELOPMENT TECHNOLOGY</h2> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a class="scroll" href="home">HOME</a></li>
            <li><a class="scroll" href="#">ABOUT</a></li>
            <li><a class="scroll" href="#">SERVICE</a></li>
            <li><a class="scroll" href="#">PORTFOLIO</a></li>
            <li><a class="scroll" href="#">FORMATIONS</a></li>
            <li><a class="scroll" href="client">CLIENTS</a></li>
            <li><a class="scroll" href="#">PRICING</a></li>
            <li><a class="scroll" href="#">TEAM</a></li>
            <li><a class="scroll" href="#">BLOG</a></li>
            <li><a class="scroll" href="#">CONTACT</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </div>
  </div>
</header>
<!--Slider-Start-->
<section id="slider">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div id="item-picture" class="item active" style="background-image:url({{asset('images/udevpic1.jpg')}}); background-attachment: fixed">
            <div class="carousel-caption container">
                <div class="row">
                  <div class="col-sm-4">
                    <h1 class="important">WE ARE A DIGITAL AGENCY</h1>
                    <p>UDev-Tech – A newly created digital agency for all purposes and needs</p>
                  </div>
                </div>
              </div>
        </div>
        </div>
        </div>
    </div>
  <!--/#home-carousel-->
</section>
@yield('content')
<footer id="footer">
  <div class="bg-sec">
    <div class="container">
      <h2>IN CASE OF PROBLEM<strong> PLEASE </strong>LET US KNOW.  YOUR SATISFACTION IS OUR PRIORITY</h2>
    </div>
  </div>
</footer>
<footer id="footer-down">
  <h2>Follow Us On</h2>
  <ul class="social-icon">
    <li class="facebook hvr-pulse"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
    <li class="twitter hvr-pulse"><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li class="youtube hvr-pulse"><a href="#"><i class="fa fa-youtube"></i></a></li>
    <li class="instagram hvr-pulse"><a href="#"><i class="fa fa-instagram"></i></a></li>
    <li class="instagram hvr-pulse"><a href="#"><i class="fa fa-whatsapp"></i></a></li>
  </ul>
  <p> &copy; Copyright 2021 UDev-Tech - Created By : <a href="http://Udevtech.io" target="_blank">UNIVERSAL DEVELOPMENT TECHNOLOGY</a> </p>
</footer>
<!--Jquery-->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<!--Boostrap-Jquery-->
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<!--Preetyphoto-Jquery-->
<!--Main-Scripts-->
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>

<!-- Hosting24 Analytics Code -->
<!-- End Of Analytics Code -->
