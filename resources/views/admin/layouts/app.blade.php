<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="zxx"> <!--<![endif]-->

<!-- Mirrored from demo.xpeedstudio.com/html/beautypress/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 12:50:57 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>სილამაზის სალონი ნატალი</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700%7CNiconne" rel="stylesheet">
<link rel="icon" type="image/png" href="img/logo.png">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/xs-icon.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">

<link rel="stylesheet" href="css/themeSwither.css">

<link rel="stylesheet" href="css/isotope.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/plugins.css" />

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/responsive.css" />
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body >
<!--[if lt IE 8]>
				<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

<div id="preloader">
<div class="preloader-window left-window"></div>
<div class="preloader-window right-window"></div>
<div class="preloader-content">
<img src="img/preloader-logo2.png" alt="preloader">

<h2>სილამაზის სალონი <br> ნატალი</h2>

</div>
<div class="spinner-block">
<div class="spinner-eff spinner-eff-3">
<div class="circle circle-1"></div>
<div class="circle circle-2"></div>
<div class="circle circle-3"></div>
</div>
</div>
<div class="preloader-cancel-btn-wraper">
</div>
</div>


<main class="xs-main-content">

<header  class="beautypress-header-section beautypress-version-1 beautypress-extra-css menu-skew bg-color-purple header-height-calc-minus navbar-fixed">
<div class="container">
<div class="beautypress-logo-wraper">
<a href="{{ route('customer.orders') }}" class="beautypress-logo beautypress-version-2  beautypress-version-4">
<img src="img/logo3.png" id="logoclass" alt="logo">
</a>
</div>
</div>
<div class="beautypress-header-top">
<div class="container">
<ul class="beautypress-simple-iocn-list beautypress-version-1">
<li>ადმინის გვერდი</li>
<li><a id="main_page_link" href="{{ url('') }}">მთავარ საიტზე გადასვლა</a></li>
</ul>
</div>
</div>
<div class="beautypress-main-header color-white">
<div class="container">
<nav class="xs_nav beautypress-nav beautypress-mega-menu">
<div class="nav-header">
<div class="nav-toggle"></div>
</div>
<div class="nav-menus-wrapper">
<ul class="nav-menu">

<li><a id="headertxt" href="{{ route('student.orders') }}">მოსწავლეების ცხრილი</a></li>


        <li class="nav-item dropdown">
          <a style="font-size: 15px;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            სერვისები
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a style="font-size: 15px;" class="dropdown-item" href="{{ route('customer.services') }}">კლიენტის სერვისები</a></li>
            <li><a style="font-size: 15px;" class="dropdown-item" href="{{ route('student.services') }}">მოსწავლის სერვისები</a></li>
          </ul>
        </li>





<li><a id="headertxt" href="{{ route('photos') }}">პორთფოლიოს დამატება</a></li>

<li><form method="post" action="{{ route('logout') }}">
    @csrf
        <button style="font-size: 15px;" type="submit">გასვლა</button>
    </form>
    </li>


</ul>
</div>
</nav>
</div>
</div>
</header>

@yield('content')





<footer style="background-color: #590D88; color:white;" class="beautypress-footer-section-v3">
	<div  class="container">
	<div class="beautypress-footer-details">
	<div class="row">
	<div class="col-md-12 col-lg-4">
	<div class="beautypress-single-footer-details">
	<div class="beautypress-footer-details-icon beautypress-red">
	<i class="xsicon icon-map-marker"></i>
	</div>
	<div class="beautypress-footer-details-text beautypress-red">
	<h5>Location</h5>
	<p style="font-size: 20px;">ლუკა ასათიანის 45<br>ბათუმი</p>
	</div>
	</div>
	</div>
	<div class="col-md-12 col-lg-4">
	<div class="beautypress-single-footer-details">
	<div class="beautypress-footer-details-icon beautypress-blue">
	<i class="xsicon icon-phone3"></i>
	</div>
	<div class="beautypress-footer-details-text beautypress-blue">
	<h5>მობილური</h5>
	<p style="font-size:20px;">+995 593 50 50 41</p>
	</div>
	</div>
	</div>
	<div class="col-md-12 col-lg-4">
	<div class="beautypress-single-footer-details">
	<div class="beautypress-footer-details-icon beautypress-green">
	<i class="xsicon icon-clock"></i>
	</div>
	<div class="beautypress-footer-details-text beautypress-green">
	<h5>სამუშაო საათები</h5>
	<p style="font-size:20px;">ორშაბათი - კვირა: <br>9:00 - 21:00</p>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div class="container">
	<div class="beautypress-footer-v3">
	<div class="row">
	<div class="col-md-6 col-lg-4">
	<div class="beautypress-single-footer-v2">
	<div class="beautypress-footer-logo-v2">
	<a href="{{ route('main.index') }}">
	<img src="img/logo-footer-v5-1.png" alt="">
	</a>
	</div>
	<ul class="beautypress-social-list beautypress-version-6">
	<li><a href="https://www.facebook.com/natali.bolqvadze.12" class="beautypress-facebook"><i class="fa fa-facebook"></i></a></li>
	<li><a href="#" class="beautypress-twitter"><i class="fa fa-twitter"></i></a></li>
	<li><a href="#" class="beautypress-pinterest"><i class="fa fa-pinterest-p"></i></a></li>
	<li><a href="#" class="beautypress-dribbble"><i class="fa fa-dribbble"></i></a></li>
	<li><a href="#" class="beautypress-instagram"><i class="fa fa-instagram"></i></a></li>
	<li><a href="#" class="beautypress-google-plus"><i class="fa fa-google-plus"></i></a></li>
	</ul>
	</div>
	</div>
	<div class="col-md-6 col-lg-6">
	<div class="beautypress-single-footer-v2">
	 <div class="beautypress-footer-heading ">
	<h3>Our Services</h3>
	</div>
	<ul class="beautypress-footer-link beautypress-version-3">
	<li><a href="#">თავის დაბანა</a></li>
	<li><a href="#">ბრჩხილები</a></li>
	<li><a href="#">Waxing + Threading</a></li>
	<li><a href="#">თმის შეჭრა</a></li>
	</ul>
	</div>
	</div>
	<!-- <div class="col-md-6 col-lg-2">
	<div class="beautypress-single-footer-v2">
	<div class="beautypress-footer-heading beautypress-blue">
	<h3>Pages</h3>
	</div>
	<ul class="beautypress-footer-link beautypress-version-3 beautypress-blue">
	<li><a href="#">Home</a></li>
	<li><a href="#">About</a></li>
	<li><a href="#">Services</a></li>
	<li><a href="#">Payments</a></li>
	<li><a href="#">Terms & Conditions</a></li>
	</ul>
	</div>
	</div> -->


	</div>
	</div>
	</div>
	</footer>

</main>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.2.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/spectragram.min.js"></script>
<script src="js/themeSwither.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from demo.xpeedstudio.com/html/beautypress/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 12:51:32 GMT -->
</html>
