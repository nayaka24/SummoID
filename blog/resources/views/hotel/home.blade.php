<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- title -->
	<title>Booking Hotel</title>

	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<!-- favicon -->
	<link rel="shortcut icon" type="image" href="{{asset ('assets/img/summo2.png')}}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset ('assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset ('assets/bootstrap/css/bootstrap.min.css') }}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset ('assets/css/owl.carousel.css') }}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset ('assets/css/magnific-popup.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset ('assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset ('assets/css/meanmenu.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset ('assets/css/main.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset ('assets/css/responsive.css') }}">
	<!-- load stylesheets -->
    <link rel="stylesheet" href="{{asset ('assets/booking_hotel/font-awesome-4.7.0/css/font-awesome.min.css')}}">                <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset ('assets/booking_hotel/css/bootstrap.min.css')}}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/booking_hotel/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/booking_hotel/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/booking_hotel/css/datepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset ('assets/booking_hotel/css/tooplate-style.css')}}">

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
							<a href="{{ url('/home') }}">
								<img src="assets/img/summo1.png" alt="" width="25%" height="25%">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="{{ url('/home') }}">Beranda</a></li>
								<li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
								<li class="current-list-item mx-1 active"><a href="{{ url('/booking_hotel') }}">Booking Hotel</a></li>
								<li><a href="{{ url('/paket_wisata') }}">Paket Wisata</a></li>
								<li><a href="{{ url('/news') }}">Berita</a></li>
								<li><a href="{{ url('/contact') }}">Kontak</a></li>
								
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
	<div class="breadcrumb-section breadcrumb-bg1">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Summo</p>
						<h1>Booking Hotel</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- booking hotel -->
    <div class="list-section pt-80 pb-80">
		<div class="container">
			
			<div class="tm-bg-white ie-container-width-fix-2">
	        <div class="container ie-h-align-center-fix">
	            <div class="row">
	                <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
	                    <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
	                        <div class="form-row tm-search-form-row">
	                            <div class="form-group tm-form-element tm-form-element-100">
	                                <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
	                                    <input name="city" type="text" class="form-control" id="inputCity" placeholder="Tujuan atau Nama Hotel">
	                            </div>
	                        	<div class="form-group tm-form-element tm-form-element-50">
	                            	<i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
	                                    <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Check In">
	                            </div>
	                            <div class="form-group tm-form-element tm-form-element-50">
	                                <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
	                                    <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Check Out">
	                            </div>
	                        </div>
	                            <div class="form-row tm-search-form-row">
	                                <div class="form-group tm-form-element tm-form-element-2">                                            
	                                    <select name="adult" class="form-control tm-select" id="adult">
	                                        <option value="">Dewasa</option>
	                                        <option value="1">1</option>
	                                        <option value="2">2</option>
	                                        <option value="3">3</option>
	                                        <option value="4">4</option>
	                                        <option value="5">5</option>
	                                    </select>
	                                    <i class="fa fa-2x fa-user tm-form-element-icon"></i>
	                                </div>
	                                <div class="form-group tm-form-element tm-form-element-2">                                            
	                                    <select name="children" class="form-control tm-select" id="children">
	                                        <option value="">Anak-anak</option>
	                                        <option value="0">0</option>
	                                        <option value="1">1</option>
	                                        <option value="2">2</option>
	                                        <option value="3">3</option>
	                                        <option value="4">4</option>
	                                        <option value="5">5</option>
	                                    </select>
	                                    <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
	                                </div>
	                                <div class="form-group tm-form-element tm-form-element-2">
	                                    <select name="room" class="form-control tm-select" id="room">
	                                        <option value="">Tipe Ruangan</option>
	                                        <option value="1">Single Room</option>
	                                        <option value="2">Double Room</option>
	                                        <option value="3">Suite Room</option>
	                                    </select>
	                                    <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
	                                </div>
	                                <div class="form-group tm-form-element tm-form-element-2">
	                                    <a href="#"><button type="submit" class="btn btn-redd tm-btn-search">Cek Ketersediaan</button></a>
	                                </div>
	                            </div>
	                    </form>
	                </div>                        
	            </div>      
	        </div>
	    	</div>
		</div>
	</div><br><br><br>
	<!-- booking hotel -->	

	<!-- latest news -->
	<div class="latest-news mt-140 mb-150">
		<div class="container">
			<div class="row">
				@foreach($Hotel as $result =>$hasil)
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="{{asset ($hasil->gambar) }}"><div class="latest-news-bg news-bg-7"></div></a>
						<div class="news-text-box">
							<h3><a href="{{url ('/hotels/'.$hasil->id_hotel)}}">{{$hasil->nama}}</a></h3>
							<a href="{{url ('/hotels/'.$hasil->id_hotel)}}" class="read-more-btn">Lihat Selengkapnya <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end latest news -->

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
						@foreach($About as $About)
						@if($About->judul == 'Alamat')
							<li><a href="#"> <i class="fas fa-map-marker-alt"></i> {{$About->isi}}</a></li>
						@elseif($About->judul == 'Kontak')
							<li><a href="#"> <i class="fa fa-phone"></i> {{$About->isi}}</a></li>
						@endif
						@endforeach
							<li><a href="https://www.instagram.com/summoid/"> <i class="fab fa-instagram"> @summoid</i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Halaman</h2>
						<ul>
							<li><a href="{{ url('/home') }}">Beranda</a></li>
							<li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
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
						<form action="{{ url('/home') }}">
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
	<script src="{{asset ('assets/js/jquery-1.11.3.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{asset ('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- count down -->
	<script src="{{asset ('assets/js/jquery.countdown.js') }}"></script>
	<!-- isotope -->
	<script src="{{asset('assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
	<!-- waypoints -->
	<script src="{{asset ('assets/js/waypoints.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{asset ('assets/js/owl.carousel.min.js') }}"></script>
	<!-- magnific popup -->
	<script src="{{asset ('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- mean menu -->
	<script src="{{asset ('assets/js/jquery.meanmenu.min.js') }}"></script>
	<!-- sticker js -->
	<script src="{{asset ('assets/js/sticker.js') }}"></script>
	<!-- main js -->
	<script src="{{asset ('assets/js/main.js') }}"></script>

	<!-- load JS files -->
        <script src="{{asset ('assets/booking_hotel/js/jquery-1.11.3.min.js') }}"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="{{asset ('assets/booking_hotel/js/popper.min.js') }}"></script>                    <!-- https://popper.js.org/ -->       
        <script src="{{asset ('assets/booking_hotel/js/bootstrap.min.js') }}"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="{{asset ('assets/booking_hotel/js/datepicker.min.js') }}"></script>                <!-- https://github.com/qodesmith/datepicker -->
        <script src="{{asset ('assets/booking_hotel/js/jquery.singlePageNav.min.js') }}"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="{{asset ('assets/booking_hotel/slick/slick.min.js') }}"></script>                  <!-- http://kenwheeler.github.io/slick/ -->


        <script>
        	
        	$(document).ready(function(){

                // Date Picker
                const pickerCheckIn = datepicker('#inputCheckIn');
                const pickerCheckOut = datepicker('#inputCheckOut');                         
            });

        </script>

</body>
</html>