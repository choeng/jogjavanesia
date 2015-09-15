<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>{!!isset($pageTitle) ? $pageTitle : 'Home'!!}</title>
	<meta name="description" content="Jogjavanesia, Jogja City Tourism and Culture Official Site">
	<meta name="author" content="choeng">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.ico">
	
	<!-- Web Fonts -->
	{!! HTML::style('/assets/fonts/lato-latin/css/latolatinfonts.css') !!}
	{!! HTML::style('http://fonts.googleapis.com/css?family=Raleway:700,400,300') !!}

	<!-- Bootstrap core CSS -->
	{!! HTML::style('/assets/bootstrap/css/bootstrap.css') !!}

	<!-- Font Awesome CSS -->
	{!! HTML::style('/assets/fonts/font-awesome/css/font-awesome.css') !!}

	<!-- Plugins -->
	{!! HTML::style('/assets/css/animations.css') !!}
	{!! HTML::style('/assets/css/bootstrap-dropdownhover.css') !!}

	<!-- Worthy core CSS file -->
	{!! HTML::style('/assets/css/style.css') !!}

	<!-- Custom css --> 
	{!! HTML::style('/assets/css/custom.css') !!}

	{!! HTML::script('/assets/plugins/jquery.min.js') !!}
	<!-- Slippry javascript -->
	{!! HTML::script('/assets/plugins/slippry.js')!!}
	{!! HTML::style('/assets/css/slippry.css')!!}
	{!! HTML::script('/assets/plugins/pace.min.js') !!}
	{!! HTML::style('/assets/css/pace.css') !!}

</head>

<body class="no-trans">
	<div id="loader"></div>
	<!-- header start -->
	<!-- ================ --> 
	<header class="header fixed clearfix navbar navbar-fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-md-4">

					<!-- header-left start -->
					<!-- ================ -->
					<div class="header-left clearfix">

						<!-- logo -->
						<div class="logo smooth-scroll">
							<a href="/"></a>
						</div>

						<!-- name-and-slogan -->
						<div class="site-name-and-slogan smooth-scroll">
							<div class="site-name"><a href="/">Jogjavanesia</a></div>
							<div class="site-slogan">Jogja City Tourism and Culture</div>
						</div>

					</div>
					<!-- header-left end -->

				</div>
				<div class="col-md-8">

					<!-- header-right start -->
					<!-- ================ -->
					<div class="header-right clearfix">

						<!-- main-navigation start -->
						<!-- ================ -->
						<div class="main-navigation animated">

							<!-- navbar start -->
							<!-- ================ -->
							<nav class="navbar navbar-default" role="navigation">
								<div class="container-fluid">

									<!-- Toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
										<ul class="nav navbar-nav navbar-right">
											<li class="active"><a href="/">Home</a></li>
											<li><a href="/tourism/">Tourism</a></li>
											<li><a href="/tourism-attraction/">Tourism Attraction</a></li>
											<li><a href="/tourism-facilities/">Tourism Facilities</a></li>
										</ul>
									</div>

								</div>
							</nav>
							<!-- navbar end -->

						</div>
						<!-- main-navigation end -->

					</div>
					<!-- header-right end -->

				</div>
			</div>
		</div>
	</header>
	<!-- header end -->

	
	@yield('content')

	<div id="main">
		<!-- footer start -->
		<!-- ================ --> 
		<footer role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-8">
						<nav>
							<ul>
								<li><a href="/about-us">About Us</a></li>
								<li><a href="/credits">Credits</a></li>
								<li><a href="/sitemap">Sitemap</a></li>
							</ul>
						</nav>
						<div class="trademark">
							<img class="trademark-logo" src="/assets/images/jogja-istimewa.svg" alt="Jogja Istimewa">
							<img class="trademark-logo" src="/assets/images/wonderful-indonesia.svg" alt="Wonderful Indonesia">
							<img class="trademark-logo" src="/assets/images/kota-jogja.svg" alt="Dinas Kota Jogja">
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="widget-contact">
							<h5>Main Office</h5>

							<address>
								<strong>Yogyakarta Tourism and Culture City Government Office</strong><br>
								Jalan Suroto 11 Kotabaru<br>
								Yogyakarta 55224<br>
								Phone: (+62 274) 588025
							</address>

							<address>
								<strong>Email</strong><br>
								<a href="mailto:admin@jogjavanesia.com">admin@jogjavanesia.com</a>
							</address>	

						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>Copyright &copy; 2015 - Jogjavanesia. Designed by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a> Edited by Choeng. Released under <a href="https://opensource.org/licenses/MIT">MIT</a> and <a href="http://www.gnu.org/licenses/gpl-3.0.en.html">GPL V3</a> license.</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer start -->
	</div>
	<a href="#0" class="cd-top">Top</a>

<!-- JavaScript files placed at the end of the document so the pages load faster
	================================================== -->
	<!-- Jquery and Bootstap core js files -->
	{!! HTML::script('/assets/bootstrap/js/bootstrap.min.js') !!}

	<!-- Modernizr javascript -->
	{!! HTML::script('/assets/plugins/modernizr.js') !!}

	<!-- Isotope javascript -->
	{!! HTML::script('/assets/plugins/isotope/isotope.pkgd.min.js') !!}

	<!-- Backstretch javascript -->
	{!! HTML::script('/assets/plugins/jquery.backstretch.min.js') !!}

	<!-- Appear javascript -->
	{!! HTML::script('/assets/plugins/jquery.appear.js') !!}

	<!-- Bootstrap dropdownhover javascript -->
	{!! HTML::script('/assets/plugins/bootstrap-dropdownhover.js') !!}

	<!-- Initialization of Plugins -->
	{!! HTML::script('/assets/js/template.js') !!}

	<!-- Custom Scripts -->
	{!! HTML::script('/assets/js/custom.js') !!}

</body>
</html>