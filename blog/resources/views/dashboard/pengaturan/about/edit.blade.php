<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Tentang  | Summo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- favicon============================================ -->
    <link rel="shortcut icon" type="image" href="{{asset ('assets/dashboard/img/logo/summo.png')}}">
    <!-- Google Fonts============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/font-awesome.min.css')}}">
	<!-- nalika Icon CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/nalika-icon.css')}}">
    <!-- owl.carousel CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/owl.transitions.css')}}">
    <!-- animate CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/animate.css')}}">
    <!-- normalize CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/normalize.css')}}">
    <!-- meanmenu icon CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/meanmenu.min.css')}}">
    <!-- main CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/main.css')}}">
    <!-- morrisjs CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/style.css')}}">
    <!-- responsive CSS============================================ -->
    <link rel="stylesheet" href="{{asset ('assets/dashboard/css/responsive.css')}}">
    <!-- modernizr JS============================================ -->
    <script src="{{asset ('assets/dashboard/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!-- CKEditor============================================ -->
    <script src="{{asset ('assets/ckeditor/ckeditor.js')}}"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="nalika-profile">
                    <div class="profile-dtl">
                        <a href="index.html"><img src="{{asset ('assets/dashboard/img/logo/summo1.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li><a href="{{url ('/dashboard')}}"><i class="fa fa-home"></i><span class="mini-click-non"> Dashboard</span></a></li>
                        <li id="removable">
                            <a class="has-arrow" href="index.html"><i class="fa fa-motorcycle"></i><span class="mini-click-non"> Kendaraan</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Daftar Kendaraan" href="{{url ('/motors')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Kendaraan</span></a></li>
                                <li><a title="Daftar Hapus Kendaraan" href="{{url ('motors/hapus')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Hapus Kendaraan</span></a></li>
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="index.html"><i class="fa fa-building-o"></i><span class="mini-click-non"> Penginapan</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Daftar Penginapan" href="{{url ('/hotels')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Penginapan</span></a></li>
                                <li><a title="Daftar Hapus Penginapan" href="{{url ('/hotels/hapus')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Hapus Penginapan</span></a></li>
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="index.html"><i class="fa fa-globe"></i><span class="mini-click-non"> Wisata</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Daftar Wisata" href="{{url ('/wisatas')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Wisata</span></a></li>
                                <li><a title="Daftar Hapus Wisata" href="{{url ('/wisatas/hapus')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Hapus Wisata</span></a></li>
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="index.html"><i class="fa fa-handshake-o"></i><span class="mini-click-non"> Transaksi</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Pembayaran" href="{{url ('/confPembayaran')}}"><i class="fa fa-money"></i><span class="mini-sub-pro"> Pembayaran</span></a></li>
                                <li><a title="Selesai" href="{{url ('/confTransaksi')}}"><i class="fa fa-check-circle"></i><span class="mini-sub-pro"> Selesai Transaksi</span></a></li>
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="index.html" aria-expanded="false"><i class="fa fa-group"></i><span class="mini-click-non"> Pengguna</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Daftar Pengguna" href="{{url ('/admin')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Pengguna</span></a></li>
                                <li><a title="Daftar Hapus Pengguna" href="{{url ('/admin/hapus')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Hapus Pengguna</span></a></li>
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="index.html"><i class="fa fa-cog"></i><span class="mini-click-non"> Pengaturan</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Tentang" href="{{url ('/about')}}"><i class="fa fa-info-circle"></i><span class="mini-sub-pro"> Tentang</span></a></li>
                                <li><a title="Gambar" href="{{url ('/gambar')}}"><i class="fa fa-image"></i><span class="mini-sub-pro"> Gambar</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    </nav>
                </div>
            </nav>
        </div>
     <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-12 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
														<span>{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></span>
													</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="{{url ('/profilAdmin')}}"><span class="fa fa-user-o"></span> Profil Saya</a></li>
                                                        <li><a onclick="event.preventDefault();
												            document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"
                                                            >
                                                        </span> Keluar
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													    @csrf
												        </form>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-ctn">
												<h2>EDIT TENTANG</h2>
											</div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description">Tentang</a></li>
                                </ul>
                                <form action="{{url ('/about/'.$About->id_about)}}" method="post">
                                @csrf
                                @method('PATCH')
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                           
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                                                        <select class="form-control" name="judul">
                                                        @if($About->judul == 'Alamat')
                                                            <option value="Alamat" selected>Alamat</option>
                                                            <option value="Tentang">Tentang</option>
                                                            <option value="Visi">Visi</option>
                                                            <option value="Misi">Misi</option>
                                                            <option value="Kontak">Kontak</option>
                                                            <option value="Jam Kantor">Jam Kantor</option>
                                                            <option value="Profil">Profil</option>
                                                        @elseif($About->judul == 'Tentang')
                                                            <option value="Alamat" >Alamat</option>
                                                            <option value="Tentang" selected>Tentang</option>
                                                            <option value="Visi">Visi</option>
                                                            <option value="Misi">Misi</option>
                                                            <option value="Kontak">Kontak</option>
                                                            <option value="Jam Kantor">Jam Kantor</option>
                                                            <option value="Profil">Profil</option>
                                                        @elseif($About->judul == 'Visi')
                                                            <option value="Alamat">Alamat</option>
                                                            <option value="Tentang">Tentang</option>
                                                            <option value="Visi" selected>Visi</option>
                                                            <option value="Misi">Misi</option>
                                                            <option value="Kontak">Kontak</option>
                                                            <option value="Jam Kantor">Jam Kantor</option>
                                                            <option value="Profil">Profil</option>
                                                        @elseif($About->judul == 'Misi')
                                                            <option value="Alamat">Alamat</option>
                                                            <option value="Tentang">Tentang</option>
                                                            <option value="Visi">Visi</option>
                                                            <option value="Misi" selected>Misi</option>
                                                            <option value="Kontak">Kontak</option>
                                                            <option value="Jam Kantor">Jam Kantor</option>
                                                            <option value="Profil">Profil</option>
                                                        @elseif($About->judul == 'Kontak')
                                                            <option value="Alamat">Alamat</option>
                                                            <option value="Tentang">Tentang</option>
                                                            <option value="Visi">Visi</option>
                                                            <option value="Misi">Misi</option>
                                                            <option value="Kontak" selected>Kontak</option>
                                                            <option value="Jam Kantor">Jam Kantor</option>
                                                            <option value="Profil">Profil</option>
                                                        @elseif($About->judul == 'Jam Kantor')
                                                            <option value="Alamat">Alamat</option>
                                                            <option value="Tentang">Tentang</option>
                                                            <option value="Visi">Visi</option>
                                                            <option value="Misi">Misi</option>
                                                            <option value="Kontak">Kontak</option>
                                                            <option value="Jam Kantor" selected>Jam Kantor</option>
                                                            <option value="Profil">Profil</option>
                                                        @elseif($About->judul == 'Profil')
                                                            <option value="Alamat">Alamat</option>
                                                            <option value="Tentang">Tentang</option>
                                                            <option value="Visi">Visi</option>
                                                            <option value="Misi">Misi</option>
                                                            <option value="Kontak">Kontak</option>
                                                            <option value="Jam Kantor" >Jam Kantor</option>
                                                            <option value="Profil" selected>Profil</option>
                                                            
                                                        @endif
                                                        </select>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-keyboard-o"></i></span>
                                                        <textarea name= "isi" placeholder="Deskripsi" class="form-control" id="isi" rows="10">{{$About->isi}}</textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="text-center custom-pro-edt-ds">
                                                            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Simpan
                                                            </button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div><br>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright ?? 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
        <script src="{{asset ('assets/dashboard/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/bootstrap.min.js')}}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/wow.min.js')}}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/jquery-price-slider.js')}}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/jquery.meanmenu.js')}}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/owl.carousel.min.js')}}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/jquery.sticky.js')}}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/jquery.scrollUp.min.js')}}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset ('assets/dashboard/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{asset ('assets/dashboard/js/metisMenu/metisMenu-active.js')}}"></script>
        <!-- sparkline JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset ('assets/dashboard/js/sparkline/jquery.charts-sparkline.js')}}"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/calendar/moment.min.js')}}"></script>
        <script src="{{asset ('assets/dashboard/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset ('assets/dashboard/js/calendar/fullcalendar-active.js')}}"></script>
        <!-- float JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/flot/jquery.flot.js')}}"></script>
        <script src="{{asset ('assets/dashboard/js/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset ('assets/dashboard/js/flot/curvedLines.js')}}"></script>
        <script src="{{asset ('assets/dashboard/js/flot/flot-active.js')}}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/plugins.js')}}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{asset ('assets/dashboard/js/main.js')}}"></script>
        <script>
            CKEDITOR.replace( 'isi' );
        </script>
</body>

</html>