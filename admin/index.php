<?php 
	session_start();
	include '../koneksi.php';
    if ( !isset($_SESSION["login"]) ) {
        header("Location: ../login.php");
    }

		
	$staff = mysqli_query($conn,"select count(id_pesan) as jumlahpesan from pesan");
	$staff2 = mysqli_fetch_assoc($staff);
	$staff3 = $staff2['jumlahpesan'];
	
	 $itungmobil = mysqli_query($conn,"select count(id_mbl) as jumlahmobil from mobil");
	 $itungmobil2 = mysqli_fetch_assoc($itungmobil);
	 $itungmobil3 = $itungmobil2['jumlahmobil'];

     $itungmotor = mysqli_query($conn,"select count(id_mtr) as jumlahmotor from motor");
	 $itungmotor2 = mysqli_fetch_assoc($itungmotor);
	 $itungmotor3 = $itungmotor2['jumlahmotor'];

     $itungkonversi = mysqli_query($conn,"select count(id_jasa) as jumlahkonversi from jasa");
	 $itungkonversi2 = mysqli_fetch_assoc($itungkonversi);
	 $itungkonversi3 = $itungkonversi2['jumlahkonversi'];

     $itungspklu = mysqli_query($conn,"select count(id_spklu) as jumlahspklu from spklu");
	 $itungspklu2 = mysqli_fetch_assoc($itungspklu);
	 $itungspklu3 = $itungspklu2['jumlahspklu'];
	?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
							<li><a href="index.php"><span>Home</span></a></li>
                            <li><a href="../index.html"><span>Lihat Homepage</span></a></li>
							<li><a href="pesan.php"><span>Pesan</span></a></li>
							<li><a href="mobil.php"><span>Mobil</span></a></li>
							<li><a href="motor.php"><span>Motor</span></a></li>
                            <li><a href="jasa.php"><span>Jasa</span></a></li>
                            <li><a href="spklu.php"><span>SPKLU</span></a></li>
                            <li><a href="logout.php"><span>Logout</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
								<script type='text/javascript'>
						
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
			
			
			<!-- header area end -->            
            <!-- page title area end -->
            <div class="main-content-inner">  
                <div class="sales-report-area mt-5 mb-5">
                    <div class="row">
                        <div class="col">
                            <div class="single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-book"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Pesan</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h1><?php echo $staff3 ?></h1>
                                    </div>
									</div>
                            </div>
                        </div>
                         <div class="col">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-book"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Mobil</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                          <h1><?php echo $itungmobil3 ?></h1> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-book"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Motor</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                          <h1><?php echo $itungmotor3 ?></h1> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-book"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Jasa Konversi</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                          <h1><?php echo $itungkonversi3 ?></h1> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-book"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">SPKLU</h4>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                          <h1><?php echo $itungspklu3 ?></h1> 
                                    </div>
                                </div>
                            </div>
                        </div>
					
                    </div>
                </div>
                <!-- overview area end -->
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Selamat Datang</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    Anda masuk sebagai <strong><?php echo $_SESSION['username'] ?></strong>
									<br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Plat Biru Admin Pane</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
