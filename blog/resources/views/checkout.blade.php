<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- title -->
	<title>Periksa</title>

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
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">

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
								<img src="{{asset ('assets/img/summo1.png')}}" alt="" width="25%" height="25%">
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
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Summo</p>
						<h1>Periksa</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Rincian Anda
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form action="{{url ('/checkout')}}" method="post" enctype="multipart/form-data">
										@csrf
						        		<p>Nama Lengkap :<input type="text" name="nama" value="{{Auth::user()->name}}"></p>
						        		<p>E-Mail :<input type="email" name="email" value="{{Auth::user()->email}}"></p>
						        		<p>Tanggal Pinjam :<input type="date" name="tanggal_ambil" ></p>
						        		<p>Tanggal Kembali :<input type="date" name="tanggal_kembali" ></p>
						        		<p>Foto KTP :<input type="file" name="foto1" placeholder="pilih gambar..."/></p>
						        		<p>Foto diri dan KTP :<input type="file" name="foto2" placeholder="pilih gambar..."/></p>
						        		<p>Foto KK / BPJS / SIM / dll :<input type="file" name="foto3" placeholder="pilih gambar..."/></p>
						        		<p>Alamat :<textarea name="alamat" id="text" cols="30" rows="10"></textarea></p>
						        		<p>No.HP :<input type="telp" name="telp" value="{{Auth::user()->handphone}}"></p>
						        		<p>Catatan :<textarea name="catatan" id="text" cols="30" rows="10"></textarea></p>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th colspan="2" style="text-align: center;">Detail Sewa Kendaraan</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Nama Kendaraan</td>
									<td>Harga</td>
								</tr>
								<?php $total_amount =0; ?>
								@foreach($Cart as $result =>$hasil)
								@if($hasil->users_id == Auth::user()->id_user)
								<tr>
									<input type="hidden" name="id_cart" value="{{$hasil->id_cart}}">
									<td>{{$hasil->motors->nama}}</td>
									<td>RP.{{$hasil->motors->harga}}</td>
								</tr>
								@endif
								<?php $total_amount = $total_amount + ($hasil->motors->harga); ?>
								@endforeach
							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<td><input type="hidden" name="total" value= "{{$total_amount}}" >Rp.{{$total_amount}}</td>
								</tr>
							</tbody>
						</table>
						<button class="boxed-btn">Sewa
						</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

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

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$( function() {
		$( "#date" ).datepicker();
		$( "#date1" ).datepicker();
	} );
	</script>

</body>
</html>