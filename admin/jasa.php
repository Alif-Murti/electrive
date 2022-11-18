
<?php 
	session_start();
	include '../koneksi.php';
    if ( !isset($_SESSION["login"]) ) {
        header("Location: ../login.php");
    }
	function upload()
    {
        // this is the upload fucntion for images/files
        
        // we will store each value from $_FILES assoc array into variables
        $fileName = $_FILES['gambar_jasa']['name'];
        $fileSize = $_FILES['gambar_jasa']['size'];
        $fileError = $_FILES['gambar_jasa']['error']; // this will be use to check if the files has been uploaded or not
        $fileTempDir = $_FILES['gambar_jasa']['tmp_name'];
        $tipe_file = $_FILES['gambar_jasa']['type'];
        
        $fileValidExtensions = ['jpg', 'jpeg', 'png'];
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        $fileExtension = explode('.', $fileName);
        $userFileExtension = strtolower(end($fileExtension));
        
        
        // check if wether user uploaded file or not 
        if ($fileError === 4) {
            echo "<script>
                        alert('please upload the file/image!')  
                  </script>";
            return false;
        }



        if (!in_array($ext, $fileValidExtensions)) {
            echo "<script>
                    alert('file/image type wrong!')  
                </script>";
            return false; 
        }


        // check if the file/image size exceeds certain amount
        if ( $fileSize > 10000000 ) {
            echo "<script>
                    alert('file/image size is to big!')  
                </script>";
            return false;   
        }
        $random = uniqid();
        $newFileName = $random.'.'.$ext;
        $destPath = "../img/jasa/".$random.'.'.$ext;
        move_uploaded_file($fileTempDir, $destPath);
        return $newFileName;

    }	
	if(isset($_POST['submit']))
	{
		$nama_jasa = $_POST['nama_jasa'] ;
		$penyedia_jasa = $_POST['penyedia_jasa'];
        $gambar = upload(); 
        $alamat_jasa = $_POST['alamat_jasa'];
        $kontak_jasa = $_POST['kontak_jasa'];
        $desk_jasa = $_POST['desk_jasa'];
        $status_jasa = $_POST['status_jasa'];
			  
		$tambahjasa = mysqli_query($conn,"insert into jasa values('','$nama_jasa','$penyedia_jasa','$gambar',' $alamat_jasa','$kontak_jasa','$desk_jasa','$status_jasa')");
		if ($tambahjasa){
		echo " <div class='alert alert-success'>
			Berhasil menambahkan Artikel baru.
		  </div>
		<meta http-equiv='refresh' content='1; url= jasa.php'/>  ";
		} else { 
echo mysqli_error($conn);
		}
		
	};
    if(isset($_POST['update']))
	{
        $id_jasa = $_POST['id_jasa'];
        $nama_jasa = $_POST['nama_jasa'] ;
		$penyedia_jasa = $_POST['penyedia_jasa'];
        $gambarlama = $_POST['gambarlama'];
        $alamat_jasa = $_POST['alamat_jasa'];
        $kontak_jasa = $_POST['kontak_jasa'];
        $desk_jasa = $_POST['desk_jasa'];
        $status_jasa = $_POST['status_jasa'];

        if ( $_FILES['gambar_jasa']['error'] === 4 ) {
            $gambar = $gambarlama;
        } else {
            $gambar = upload();
        }
			  
		$updatejasa = mysqli_query($conn,"update jasa SET 
                                        nama_jasa='$nama_jasa',
                                        penyedia_jasa='$penyedia_jasa',
                                        gambar_jasa='$gambar',
                                        alamat_jasa='$alamat_jasa',
                                        kontak_jasa='$kontak_jasa',
                                        desk_jasa='$desk_jasa',
                                        status_jasa='$status_jasa'
                                        where id_jasa='$id_jasa' ");
		if ($updatejasa){
            echo ("<script> 
            alert ('Success to update data');
        </script>");
		
		} else { echo ("<script> 
            alert ('Failed to update data');
        </script>");
        echo mysqli_error($conn);
		 
		}
	}
	?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Halaman Jasa</title>
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
	<!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
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
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Daftar Jasa</h2>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Tambah Jasa
                                        </button>
									</div>
                                    <div class="data-tables datatable-dark">
										 <table id="dataTable3" style="width: 90%"><thead class="thead-dark">
											<tr>
												<th>No.</th>
                                                <th>Update</th>
                                                <th>Delete</th>
												<th>Nama</th>
												<th>Penyedia</th>
                                                <th>Gambar</th>
                                                <th>Alamat</th>
                                                <th>Kontak</th>
                                                <th>Deskripsi</th>
                                                <th>Status</th>
											</tr></thead><tbody>
											<?php 
											$brgs=mysqli_query($conn,"SELECT id_jasa, nama_jasa, penyedia_jasa, gambar_jasa, alamat_jasa, kontak_jasa, desk_jasa, status_jasa FROM jasa;");
											$no=1;
											while($p=mysqli_fetch_array($brgs)){

												?>
												
												<tr>
													<td><?php echo $no++ ?></td>
                                                    <td><a class="btn btn-info update_jasa" data-bs-toggle="modal" data-bs-target="#updatemodal" id="<?php echo $p['id_jasa']; ?>">Update</a></td>
                                                    <td><a class="btn btn-danger" href="deletejasa.php?id_jasa=<?php echo $p['id_jasa']; ?>">Delete</a></td>
													<td><?php echo $p['nama_jasa'] ?></td>
													<td><?php echo $p['penyedia_jasa'] ?></td>
                                                    <td><img src="../img/jasa/<?php echo $p['gambar_jasa']?>" alt="" width="100" height="100"></td>
                                                    <td><?php echo $p['alamat_jasa'] ?></td>
                                                    <td><?php echo $p['kontak_jasa'] ?></td>
                                                    <td><?php echo $p['desk_jasa'] ?></td>
                                                    <td><?php echo $p['status_jasa'] ?></td>
												</tr>		
												<?php 
											}
													
											?>
										</tbody>
										</table>
                                    </div>
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
                <p>Kophistory Admin Pane</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
	<!-- Modal Tambah Jasa -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Jasa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Jasa</label>
                    <input type="text" name="nama_jasa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Penyedia</label>
                    <input type="text" name="penyedia_jasa" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="gambar">Gambar</label><br>
                    <input type="file" name="gambar_jasa" id="gambar" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="text" name="alamat_jasa" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kontak</label>
                    <input type="text" name="kontak_jasa" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Deskripsi Jasa</label>
                    <textarea name="desk_jasa" class="form-control" id="exampleInputPassword1"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Status Konten</label>
                    <input type="text" name="status_jasa" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Update Artikel -->
    <div class="modal fade" id="updatemodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updatemodallabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatemodallabel">Update Jasa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="data_jasa">
            
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
	<script>
	$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	} );
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- Start datatable js -->
	 <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
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
	
    <script>
	// ini menyiapkan dokumen agar siap grak :)
	$(document).ready(function(){
		// yang bawah ini bekerja jika tombol lihat data (class="view_data") di klik
		$('.update_jasa').click(function(){
			// membuat variabel id, nilainya dari attribut id pada button
			// id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
			var id_jasa = $(this).attr("id");
			
			// memulai ajax
			$.ajax({
				url: 'updatejasa.php',	// set url -> ini file yang menyimpan query tampil detail data siswa
				method: 'post',		// method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
				data: {id_jasa:id_jasa},		// nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
				success:function(data){		// kode dibawah ini jalan kalau sukses
					$('#data_jasa').html(data);	// mengisi konten dari -> <div class="modal-body" id="data_siswa">
					$('#updatemodal').modal("show");	// menampilkan dialog modal nya
				}
			});
		});
	});
	</script>
</body>
</html>
