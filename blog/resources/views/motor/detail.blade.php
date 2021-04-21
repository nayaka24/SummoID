<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- title -->
	<title>Lebih Detail</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image" href="{{asset ('assets/img/summo2.png')}}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset ('assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset ('assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset ('assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset ('assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset ('assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset ('assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset ('assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset ('assets/css/responsive.css')}}">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="home.html">
								<img src="{{asset ('assets/img/summo1.png')}}" alt="" width="25%" height="25%">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
						<ul>
								<li><a href="{{url ('/home')}}">Beranda</a></li>
								<li><a href="{{url ('/abouts')}}">Tentang Kami</a></li>
								<li><a href="{{url ('/booking_hotel')}}">Booking Hotel</a></li>
								<li><a href="{{url ('/paket_wisata')}}">Paket Wisata</a></li>
								<li><a href="{{url ('/news')}}">Berita</a></li>
								<li><a href="{{url ('/contact')}}">Kontak</a></li>
								
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="{{ url('/keranjang') }}"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
										<a class="login" href="{{ url('/login') }}"><i class="fas fa-sign-in-alt">  Masuk</i></a>
										<a class="register" href="{{ url('/register') }}"><i class="fas fa-user-plus">  Daftar</i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Pencarian:</h3>
							<input type="text" placeholder="">
							<button type="submit">Cari <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Summo</p>
						<h1>Detail Kendaraan Sewa</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="{{asset ('bike/'.$Motor->gambar)}}" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3>{{$Motor->nama}}</h3>
						<p class="single-product-pricing"><span>Per Hari</span>{{$Motor->harga}}</p>
						<p>{{$Motor->deskripsi}}</p>
						<div class="single-product-form">
							<form action="index.html">
								<input type="number" placeholder="0">
							</form>
							<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Sewa Sekarang</a>
							<p><strong>Kategori: </strong>{{$Motor->kategori}}</p>
						</div>
						<h4>Share:</h4>
						<ul class="product-share">
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div><br><br><br>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="{{url ('/motor')}}" class="boxed-btn">Lihat Kendaraan Lainnya</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->


	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Tentang Kami</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box contact">
						<h2 class="widget-title">Kontak</h2>
						<ul>
							<li><a href="#"> <i class="fas fa-map-marker-alt"></i> Jl.Pangeran Antasari, Gg.Mangga Besar No.24 Lk.III Tanjung Baru, Kedamaian</a></li>
							<li><a href="#"> <i class="fa fa-envelope"></i> Summo.lpg@gmail.com</a></li>
							<li><a href="#"> <i class="fa fa-phone"></i> +62895640472784</a></li>
							<li><a href="#"> <i class="fa fa-phone"></i> +6287899585498</a></li>
							<li><a href="https://www.instagram.com/summoid/"> <i class="fab fa-instagram"> @summoid</i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Halaman</h2>
						<ul>
							<li><a href="{{ url('/home') }}">Beranda</a></li>
							<li><a href="{{ url('/abouts') }}">Tentang Kami</a></li>
							<li><a href="{{ url('/booking_hotel') }}">Booking Hotel</a></li>
							<li><a href="{{ url('/paket_wisata') }}">Paket Wisata</a></li>
							<li><a href="{{ url('/news') }}">Berita</a></li>
							<li><a href="{{ url('/contact') }}">Kontak</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="home.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://summoin.com/">Summo</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="{{asset ('assets/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset ('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset ('assets/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset ('assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset ('assets/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset ('assets/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset ('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset ('assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset ('assets/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset ('assets/js/main.js')}}"></script>

</body>
</html>