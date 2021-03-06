<!DOCTYPE html>
<html lang="eng">
        <head>
        <title>Profil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        <!-- favicon -->
        <link rel="shortcut icon"href="{{asset ('assets/img/summo2.png')}}">
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
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="{{asset ('assets/login/css/profile.css')}}">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>

        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">Change Photo<input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>Kshiti Ghelani</h5><br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tentang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Affiliate</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="how-tab" data-toggle="tab" href="#how" role="tab" aria-controls="how" aria-selected="false">Tata Cara</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Akun Saya</p>
                            <a href="{{ url('/beranda') }}">Beranda</a><br/>
                            <a href="">Edit Profil</a><br/>
                            <a onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">Keluar
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
								</form>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Nama Lengkap</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti Ghelani</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>E-mail</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>kshitighelani@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>No. Hp</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Pekerjaan</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Mahasiswi</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">E-mail</th>
                                                        <th scope="col">Hadiah</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>kshitighelani@gmail.com</td>
                                                        <td>Rp. 50.000</td>
                                                        <td>Diterima</td>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>

                                        </div>
                            </div>
                            <div class="tab-pane fade" id="how" role="tabpanel" aria-labelledby="how-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Kode Unik</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p>kshitighelani123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Caranya :</h6>
                                            </div>
                                            <div class="col-md-11">
                                                <p>1. Cari Teman yang ingin menggunakan layanan Summo (Sewa Motor, Booking Hotel).</p>
                                                <p>2. Berikan <strong>kode unik</strong> untuk digunakan oleh mereka.</p>
                                                <p>3. Masukkan kode tersebut ketika sedang melakukan checkout layanan Summo.</p>
                                                <p>4. Admin akan mengkonfirmasi transaksi tersebut.</p>
                                                <p>5. Jika berhasil terkonfirmasi maka Affiliate akan ter-update pada tab <strong>Affiliate</strong></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

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
        <script src="{{asset ('assets/login/js/main.js')}}"></script>

    </body>
</html>