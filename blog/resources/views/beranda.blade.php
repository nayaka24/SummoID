<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Beranda</title>

	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{asset('assets/img/summo2.png')}}">
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
							<a href="{{ url('/') }}">
								<img src="{{asset('assets/img/summo1.png') }}" alt="" width="25%" height="25%">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item mx-1 active"><a href="{{ url('/') }}">Beranda</a></li>
								<li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
								<li><a href="#">Kebutuhan Perjalananmu!</a>
									<ul class="sub-menu">
										<li><a href="{{url ('/motor')}}">Sewa Kendaraan</a></li>
										<li><a href="{{ url('/booking_hotel') }}">Booking Penginapan</a></li>
										<li><a href="{{ url('/paket_wisata') }}">Paket Wisata</a></li>
									</ul>
								</li>
								<li><a href="{{ url('/news') }}">Peluang Menjadi Mitra</a></li>

								<li>
									<div class="header-icons">
										
										@guest
										<a class="login" href="{{ url('/login') }}"><i class="fas fa-sign-in-alt">  Masuk</i></a>
										<a class="register" href="{{ url('/register') }}"><i class="fas fa-user-plus">  Daftar</i></a>
										@else
										<a href="{{url ('/profiluser')}}" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }} <span class="caret"></span>
										</a>
										<a onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">Keluar
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
											</form>
										</a>
										<a class="shopping-cart" href="{{ url('/keranjang') }}"><i class="fas fa-shopping-cart"></i></a>
										

										@endguest
									</div>
								</li>
							</ul>
						</nav>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
	<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<h1>Make It Your Journey!</h1>
							<div class="hero-btns">
								<a href="{{url ('/motor')}}" class="boxed-btn">Sewa Kendaraan</a>
								<a href="{{ url('/booking_hotel') }}" class="booking-btn">Booking Penginapan</a>
								<a href="{{ url('/paket_wisata') }}" class="bordered-btn">Paket Wisata</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Kendaraan</span> yang Disewakan</h3>
						<h4><span class="orange-text">Matic</span> dan <span class="orange-text">Manual</span></h4>
					</div>
				</div>
			</div>

			<div class="row">
			@foreach($Motor as $result =>$hasil)
				@if($hasil->verifikasi == '1')
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{url ('/motors/'.$hasil->id_motor)}}"><img src="{{asset ('bike/'.$hasil->gambar)}}" alt=""></a>
						</div>
						<h3>{{$hasil->nama}}</h3>
						<p class="product-price"><span>Per Hari</span> {{$hasil->harga}} </p>
						<a href="{{ url ('/keranjang') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Sewa Sekarang</a>
					</div>
				</div>
				@endif
				@endforeach
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="{{url ('/motor')}}" class="boxed-btn">Lihat Selengkapnya</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">	
					<h3><span class="orange-text">Paket</span> Sewa</h3>
					<p>Pilih paket sewa kamu dan mulailah berkeliling dengan kendaraan kami. Keliling suka-suka, di <span style="color: #F28123">#summo</span> aja</p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-box"></i>
						</div>
						<div class="content">
							<h3>Paket Backpaker</h3>
							<p>Pilih paket personal untuk kamu yang membutuhkan kendaraan sebagai transportasi harian.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-box"></i>
						</div>
						<div class="content">
							<h3>Paket Corporate</h3>
							<p>Pilih paket usaha buat memudahkan karyawan kamu dalam menjalankan usaha kamu.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-box"></i>
						</div>
						<div class="content">
							<h3>Paket Honeymoon</h3>
							<p>Pilih paket wisata buat kamu yang sedang jalan-jalan santuy menikmati liburan ya.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end features list section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
	<div class="row">
		<div class="col-lg-8 offset-lg-2 text-center">
			<div class="section-title">	
				<h3><span class="orange-text"></span>Testimonial</h3>
			</div>
		</div>
	</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Saira Hakim <span>Karyawati</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar2.png" alt="">
							</div>
							<div class="client-meta">
								<h3>David Niph <span>Karyawan</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Jacob Sikim <span>Mahasiswa</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="abt-section mb-140">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="hero-bg-2">
										<img src="assets/img/summo2.png" alt="">
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="abt-text">
										<h2>Apa itu<span class="orange-text"> Summo?</span></h2>
										@foreach($About as $result)
										@if($result->judul == 'Profil')
										<p class="top-sub">{!!$result->isi!!}</p>
										@endif
										@endforeach
										<a href="{{ url('/tentang') }}" class="boxed-btn mt-4"> Lihat Selengkapnya </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br><br><br><br><br><br>
	<!-- end logo carousel -->

	<!-- features list section counter -->
	<div class="containercounter">
		<div class="row">
				<div class="section-counter">
					<div class="list-box d-flex align-items-center">
						<div class="contentc">
							<h4>1153</h4>
							<p>Orang Penyewa</p>
						</div>
					</div>
				</div>

				<div class="section-counter">
					<div class="list-box d-flex align-items-center">
						<div class="contentc">
							<h4>31</h4>
							<p>Mitra</p>
						</div>
					</div>
				</div>
		</div>
	</div>	
	<!-- end features list section counter -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						@foreach($About as $About)
						@if($About->judul == 'Profil')
						<h2 class="widget-title">Tentang Kami</h2>
						{!!$About->isi!!}
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box contact">
						<h2 class="widget-title">Kontak</h2>
						<ul>
						@elseif($About->judul == 'Alamat')
							<li><a href="#"> <i class="fas fa-map-marker-alt"></i> {!!$About->isi!!}</a></li>
						@elseif($About->judul == 'Kontak')
							<li><a href="#"> <i class="fa fa-phone"></i> {!!$About->isi!!}</a></li>
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
							<li><a href="{{ url('/') }}">Beranda</a></li>
							<li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
							<li><a href="{{url ('/motor')}}">Sewa Kendaraan</a></li>
							<li><a href="{{ url('/booking_hotel') }}">Booking Penginapan</a></li>
							<li><a href="{{ url('/paket_wisata') }}">Paket Wisata</a></li>
							<li><a href="{{ url('/news') }}">Peluang Menjadi Mitra</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Kirimkan e-mail anda untuk mendapatkan pembaruan terkini.</p>
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
							<li><a href="https://www.facebook.com/Sumolpg-Sewa-Motor-105318157607120/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/summoid/"  target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
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
</body>
</html>