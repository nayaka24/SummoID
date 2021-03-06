<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard Admin | Summo</title>
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
    <link rel="stylesheet" href="{{asset ('assets/dashboard/dashboard/css/morrisjs/morris.css')}}">
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
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="nalika-profile">
                    <div class="profile-dtl">
                        <a href="{{url ('/dashboard')}}"><img src="{{asset ('assets/dashboard/img/logo/summo1.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li><a href="{{url ('/dashboard')}}"><i class="fa fa-home"></i><span class="mini-click-non"> Dashboard</span></a></li>
                        <li id="removable">
                            <a class="has-arrow" href="index.html"><i class="fa fa-motorcycle"></i><span class="mini-click-non"> Kendaraan</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Daftar Kendaraan" href="{{url ('/motors-admin')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Kendaraan</span></a></li>
                                <li><a title="Daftar Hapus Kendaraan" href="{{url ('motors/hapus')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Hapus Kendaraan</span></a></li>
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="index.html"><i class="fa fa-building-o"></i><span class="mini-click-non"> Penginapan</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Daftar Penginapan" href="{{url ('/hotels-admin')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Penginapan</span></a></li>
                                <li><a title="Daftar Hapus Penginapan" href="{{url ('/hotels/hapus')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Hapus Penginapan</span></a></li>
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="index.html"><i class="fa fa-globe"></i><span class="mini-click-non"> Wisata</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Daftar Wisata" href="{{url ('/wisatas-admin')}}"><i class="fa fa-list"></i><span class="mini-sub-pro"> Daftar Wisata</span></a></li>
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">{{url ('/pengguna')}}
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
												<h2>DASHBOARD</h2>
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
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Jumlah Kendaraan</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">12</label>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 12%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Jumlah Penginapan</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">4</i></label>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 4%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Jumlah Paket Wisata</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 m ar-bot-15">
                                        <label class="label bg-blue">5</label>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 5%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Yearly Sales</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-purple">30</label>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 30%;" class="progress-bar bg-purple"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>Product Sales</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-grey active">
													<input type="radio" name="options" class="toggle" id="option1" checked="">Today</label>
                                                <label class="btn btn-grey">
													<input type="radio" name="options" class="toggle" id="option2">Week</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="curved-line-chart" class="flot-chart-sts flot-chart curved-chart-statistic"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="white-box analytics-info-cs mg-b-30 res-mg-t-30">
                            <h3 class="box-title">Total Visit</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">8659</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-30">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">7469</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs mg-b-30">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter sales-sts-ctn">6011</span></li>
                            </ul>
                        </div>
                        <div class="white-box analytics-info-cs">
                            <h3 class="box-title">Bounce Rate</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="sales-sts-ctn">18%</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="caption pro-sl-hd">
                                            <span class="caption-subject text-uppercase"><b>Order Statistic</b></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp">
                                            <a href="#" class="btn btn-dark-blue btn-circle active tip-top" data-toggle="tooltip" title="Upload">
													<i class="fa fa-cloud-download" aria-hidden="true"></i>
												</a>
                                            <a href="#" class="btn btn-dark btn-circle active tip-top" data-toggle="tooltip" title="Refresh">
													<i class="fa fa-reply" aria-hidden="true"></i>
												</a>
                                            <a href="#" class="btn btn-blue-grey btn-circle active tip-top" data-toggle="tooltip" title="Delete">
													<i class="fa fa-trash-o" aria-hidden="true"></i>
												</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="line-chart" class="flot-chart flot-chart-sts line-chart-statistic"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="analytics-rounded mg-b-30 res-mg-t-30">
                            <div class="analytics-rounded-content">
                                <h5>Percentage distribution</h5>
                                <h2><span class="counter">60</span>/20</h2>
                                <div class="text-center">
                                    <div id="sparkline51"></div>
                                </div>
                            </div>
                        </div>
                        <div class="analytics-rounded">
                            <div class="analytics-rounded-content">
                                <h5>Percentage division</h5>
                                <h2><span class="counter">150</span>/<span class="counter">54</span></h2>
                                <div class="text-center">
                                    <div id="sparkline52"></div>
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
</body>

</html>