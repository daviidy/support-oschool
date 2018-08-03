<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="codepixer">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Support Oschool</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="/callcenter/css/linearicons.css">
    <link rel="stylesheet" href="/callcenter/css/font-awesome.min.css">
    <link rel="stylesheet" href="/callcenter/css/bootstrap.css">
    <link rel="stylesheet" href="/callcenter/css/magnific-popup.css">
    <link rel="stylesheet" href="/callcenter/css/nice-select.css">
    <link rel="stylesheet" href="/callcenter/css/animate.min.css">
    <link rel="stylesheet" href="/callcenter/css/owl.carousel.css">
    <link rel="stylesheet" href="/callcenter/css/main.css">
  </head>
  <body>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

      <header id="header" id="home">
        <div class="container">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="index.html"><img width="100" src="/img/oschool-support-logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="#home">Accueil</a></li>
                <li><a href="#feature">Caractéristiques</a></li>
                <li><a href="#offres">Nos offres</a></li>
                <li><a href="#contact">Contactez-nous</a></li>
              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </div>
      </header><!-- #header -->

      @yield('content')

      <!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4 class="text-white">Ou appelez le</h4>
								<p class="number">
									+225 21-37-12-77 <br>
									+225 48-45-98-68
								</p>
							</div>
						</div>

					</div>
					<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<div class="footer-social d-flex align-items-center">
							<a href="https://www.facebook.com/Oschool.ci/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/DavidYao3"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="/callcenter/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="/callcenter/js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="/callcenter/js/easing.min.js"></script>
			<script src="/callcenter/js/hoverIntent.js"></script>
			<script src="/callcenter/js/superfish.min.js"></script>
			<script src="/callcenter/js/jquery.ajaxchimp.min.js"></script>
			<script src="/callcenter/js/jquery.magnific-popup.min.js"></script>
			<script src="/callcenter/js/owl.carousel.min.js"></script>
			<script src="/callcenter/js/jquery.sticky.js"></script>
			<script src="/callcenter/js/jquery.nice-select.min.js"></script>
			<script src="/callcenter/js/waypoints.min.js"></script>
			<script src="/callcenter/js/jquery.counterup.min.js"></script>
			<script src="/callcenter/js/parallax.min.js"></script>
			<script src="/callcenter/js/mail-script.js"></script>
			<script src="/callcenter/js/main.js"></script>
		</body>
	</html>
