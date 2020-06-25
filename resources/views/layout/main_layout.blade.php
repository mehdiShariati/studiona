<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Minimal &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">


	<!-- Animate.css -->
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/icomoon.css">

	<style>
	    .swiper-container-2 {
      width: 100%;
	  padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide-2 {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;

    }
	</style>
	</head>
	<body>

	<nav id="fh5co-main-nav" role="navigation">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		<div class="js-fullheight fh5co-table">
			<div class="fh5co-table-cell js-fullheight">
				<ul>
					<li><a href="/">خانه</a></li>
					<li><a href="work.html">ثبت سفارش</a></li>
					<li><a href="/portfolios">نمونه کار ها</a></li>
					<li><a href="/about">درباره ی ما</a></li>
					<li><a href="/contact">تماس با ما</a></li>
				</ul>
				<p class="fh5co-social-icon">
					<a href="#"><i class="icon-twitter2"></i></a>
					<a href="#"><i class="icon-facebook2"></i></a>
					<a href="https://www.instagram.com/narges.photoo"><i class="icon-instagram"></i></a>
					<a href="#"><i class="icon-dribbble2"></i></a>
					<a href="#"><i class="icon-youtube"></i></a>
				</p>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<h1 class="text-center"><a class="fh5co-logo" href="/">گروه هنری نرگس</a></h1>
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				</div>
            </div>
            <nav>
                <ul class="nav-dynamic">
                    <li><a href="/blog">وبلاگ</a></li>
                    <li><a href="#">ثبت سفارش</a></li>
                    <li><a href="/about">درباره ی ما</a></li>
                    <li><a href="/contact">تماس با ما</a></li>
                </ul>
            </nav>
		</header>
        @yield("content")
	
        <footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4" dir="rtl">
							<h3 class="section-title">گرو هنری نرگس</h3>
							<p dir="rtl">همواره مفتخر به مشتری مداری و ثبت لحظات خاص زندگی شما هستیم.</p>
						</div>
						
						<div class="col-md-4 col-md-push-1" dir="rtl">
							<h3 class="section-title">خدمات ما</h3>
							<ul dir="rtl">
								<li><a href="/about">درباره ی ما</a></li>
								<li><a href="#">ثبت سفارش</a></li>
								<li><a href="#">تدوین فیلم و عکس</a></li>
								<li><a href="#">وبلاگ</a></li>
								<li><a href="#">ثبت سفارش</a></li>
								<li><a href="#">پرسش های متداول</a></li>
							</ul>
						</div>

						<div class="col-md-4" dir="rtl">
							<h3 class="section-title">Information</h3>
							<ul>
								<li><a href="#">Terms &amp; Condition</a></li>
								<li><a href="#">License</a></li>
								<li><a href="#">Privacy &amp; Policy</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icon">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="https://www.instagram.com/narges.photoo"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p> <i class="icon-heart3" style="color:red"></i>طراحی شده با   <a href="http://freehtml5.co/" target="_blank">  </a> </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	</div>


	<!-- Main JS -->
    <script src="/js/all.js"></script>
    <script>
    
		   var sw=new Swiper('#sw-first', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      }
    });
	var swip=new Swiper('#sw-sec', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      }
    });
    </script>
	@yield("extra_js")

	</body>
</html>
