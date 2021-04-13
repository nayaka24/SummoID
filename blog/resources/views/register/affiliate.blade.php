<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Affiliate</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<!-- favicon -->
  <link rel="shortcut icon"href="assets/img/summo2.png">
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
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="{{asset ('assets/login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset ('assets/login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset ('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset ('assets/login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="{{asset ('assets/login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset ('assets/login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset ('assets/login/css/util.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset ('assets/login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="assets/login/images/summo.png" alt="IMG">
        </div>

        <form class="register100-form validate-form">
          <span class="register100-form-title">
            Ayo Gabung Menjadi Affiliate Kami!
          </span>
          <nav class="menu-daftar">
            <ul>
              <li><a href="{{ url('/register') }}"><u>Daftar Pengguna</u></a></li>
              <li><a href="{{url ('/mitra')}}"><u>Daftar Mitra</u></a></li>
            </ul>
          </nav>

          <div class="wrap-input100 validate-input" data-validate = "Nama Harus Diisi!">
            <input class="input100" type="text" name="nama" placeholder="Nama Lengkap">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fas fa-user-alt" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "E-mail yang valid: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="E-mail">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>


          <div class="wrap-input100 validate-input" data-validate = "No.HP Harus Diisi!">
            <input class="input100" type="text" name="nohp" placeholder="No.HP">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fas fa-phone" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password Harus Diisi!">
            <input class="input100" type="password" name="pass" placeholder="Password (6+ Karakter)">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fas fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Daftar
            </button>
          </div>

          <div class="text-center p-t-12">
            <a class="txt2" href="#">
              <i class="fas fa-sync"> Atur Ulang</i>
            </a>
          </div>

          <div class="text-center p-t-80">
            <a class="txt2" href="login.html">
              Sudah Punya Akun?
              <i class="fas fa-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
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
							<li><a href="{{ url('/about') }}">Tentang Kami</a></li>
							<li><a href="{{ url('/hotel') }}">Booking Hotel</a></li>
							<li><a href="{{ url('/wisata') }}">Paket Wisata</a></li>
							<li><a href="{{ url('/news') }}">Berita</a></li>
							<li><a href="{{ url('/contact') }}">Kontak</a></li>
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
  <script src="{{('assets/js/sticker.js')}}"></script>
  <!-- main js -->
  <script src="{{asset ('assets/js/main.js')}}"></script>
  
<!--===============================================================================================-->  
  <script src="{{asset ('assets/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset ('assets/login/vendor/bootstrap/js/popper.js')}}"></script>
  <script src="{{asset ('assets/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset ('assets/login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset ('assets/login/vendor/tilt/tilt.jquery.min.js')}}"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="{{asset ('assets/login/js/main.js'}}"></script>

</body>
</html>