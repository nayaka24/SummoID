<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- title -->
	<title>Kontak</title>

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
								<img src="assets/img/summo1.png" alt="" width="25%" height="25%">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="{{ url('/beranda') }}">Beranda</a></li>
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
									<li><a href="{{url ('/profiluser')}}" aria-haspopup="true" aria-expanded="false" v-pre><span class="fas fa-user-alt"></span> {{ Auth::user()->name }}</a>
										<ul class="sub-menu">
											<li><a class="shopping-cart" href="{{ url('/keranjang') }}"><i class="fas fa-shopping-cart"></i> Keranjang</a></li>
											<li><a onclick="event.preventDefault();
												document.getElementById('logout-form').submit();"><span class="fas fa-sign-out-alt"></span> Keluar
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
												</form>
											</a></li>
										</ul>
									</li>

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

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg4">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Summo</p>
						<h1>Kontak</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Ada Pertanyaan?</h2>
						<p>Jika Anda memiliki pertanyaan, jangan ragu untuk menanyakannya kepada kami.</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<input type="text" placeholder="Nama" name="name" id="name">
								<input type="email" placeholder="E-mail" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="No HP" name="phone" id="phone">
								<input type="text" placeholder="Subjek" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Pesan"></textarea></p>
							<input type="hidden" name="token" value="" />
							<p><input type="submit" value="Kirim"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
					
					@foreach($About as $About)
						@if($About->judul == 'Alamat')
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Alamat</h4>
							{!!$About->isi!!}
						</div>
						
						@elseif($About->judul == 'Jam Kantor')
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Jam Kantor</h4>
							{!!$About->isi!!}
						</div>
						
						@elseif($About->judul == 'Kontak')
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Kontak</h4>
							{!!$About->isi!!}
						</div>
						@endif
					@endforeach
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Lokasi Kami</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3972.065940554278!2d105.27726609259844!3d-5.406927195371404!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dba802c7b077%3A0x9e8f438b237e7a04!2sJl.%20Mangga%20Besar%20No.24%2C%20Tj.%20Baru%2C%20Kedamaian%2C%20Kota%20Bandar%20Lampung%2C%20Lampung%2035122!5e0!3m2!1sen!2sid!4v1613569266012!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<!-- end google map section -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						@foreach($about as $hasil)
						@if($hasil->judul == 'Profil')
						<h2 class="widget-title">Tentang Kami</h2>
						<p>{<!DOCTYPE html>$hasil->isi!!}</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box contact">
					<h2 class="widget-title">Kontak</h2>
						<ul>
						@elseif($hasil ->judul == 'Alamat')
						<li><a href="#"> <i class="fas fa-map-marker-alt"></i> {!!$hasil->isi!!}</a></li>
						@elseif($hasil->judul == 'Kontak')
						<li><a href="#"> <i class="fa fa-phone"></i> {!!$hasil->isi!!}</a></li>
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