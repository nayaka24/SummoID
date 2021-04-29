<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- title -->
	<title>Detail Hotel</title>

	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<!-- favicon -->
	<link rel="shortcut icon" type="image" href="{{asset('assets/img/summo2.png')}}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

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
								<li><a href="{{ url('/home') }}">Beranda</a></li>
								<li><a href="{{ url('/abouts') }}">Tentang Kami</a></li>
								<li><a href="{{ url('/booking_hotel') }}">Booking Hotel</a></li>
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
						<h1>Detail Hotel</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	
	<!-- single article section -->
	<div class="mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="single-article-section">
						<div class="single-article-text">
							<div class="single-artcile-bg3"></div>
							<p class="blog-meta">
								<span class="bed"><i class="fas fa-bed"></i> 1 Double Besar</span>
								<span class="bath"><i class="fas fa-bath"></i> 1</span>
								<span class="tv"><i class="fas fa-tv"></i> 1</span>
								<span class="ac"><i class="far fa-snowflake"></i> AC</span>
								<span class="wifi"><i class="fas fa-wifi"></i> Free Wifi</span>
							</p>
							<h2>{{$Hotel->name}}</h2>
							{!!$Hotel->deskripsi!!}
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="sidebar-section">
						<div class="recent-posts">
							<ul>
								
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
									        		<form action="index.html">
										        		<p>Nama Lengkap :<input type="text"></p>
										        		<p>Email :<input type="email"></p>
														<p>Foto KTP :<input type="file" name="foto" accept="image/jpeg, image/gif"/></p>
										        		<p>No.HP :<input type="telp"></p>
										        		<p>Catatan :<textarea name="bill" id="bill" cols="30" rows="10"></textarea></p>
									        		</form>
									        	</div>
									      	</div>
									    </div><br>

									    <div class="archive-posts">
											<ul>
												<div class="archive-posts">
													<ul>
														<div class="col-lg-4">
															<div class="order-details-wrap">
																<table class="order-details">
																	<thead>
																		<tr>
																			<th colspan="2" style="text-align: center;">Ringkasan Biaya</th>
																		</tr>
																	</thead>
																	<tbody class="order-details-body">
																		<tr>
																			<td>Nama Hotel</td>
																			<td>Harga</td>
																		</tr>
																		<tr>
																			<td>{{$Hotel->nama}}</td>
																			<td>{{$Hotel->harga}}</td>
																		</tr>
																	</tbody>
																	<tbody class="checkout-details">
																		<tr>
																			<td>Subtotal</td>
																			<td>RP. 250.000</td>
																		</tr>
																		<tr>
																			<td>Promo/Diskon</td>
																			<td>-</td>
																		</tr>
																		<tr>
																			<td>Total</td>
																			<td>RP. 250.000</td>
																		</tr>
																	</tbody>
																</table>
																<a href="#" class="boxed-btn">Pesan</a>
															</div><br>
														</div>
													</ul>
												</div>
											</ul>
										</div>

									</div>
								</div>
							</div>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
				

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