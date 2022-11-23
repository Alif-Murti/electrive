<?php
include "../koneksi.php";
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
                        alert('Tolong tambahkan gambar')  
                  </script>";
            return false;
        }



        if (!in_array($ext, $fileValidExtensions)) {
            echo "<script>
                    alert('format file gambar salah')  
                </script>";
            return false; 
        }


        // check if the file/image size exceeds certain amount
        if ( $fileSize > 10000000 ) {
            echo "<script>
                    alert('Ukuran gambar maksimal 10MB')  
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
			Berhasil mengirimkan jasa, menunggu persetujuan admin.
		  </div>
		<meta http-equiv='refresh' content='1; url= ./'/>  ";
		} else { 
echo mysqli_error($conn);
		}
		
	};
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="icon"
      href="https://i.gyazo.com/477daeffb5d7302c0e698a4b15cd6d8c.png"
    />
    <link rel="stylesheet" href="gaya.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <title>Electrive - Jasa</title>
  </head>
  <body>
    <div>
      <!-- navbar -->
      <div>
        <nav class="navbar navbar-expand-lg bg-light mt-2">
          <div class="container-fluid">
            <a class="navbar-brand text-xxl" href="../">
              <img
                style="width: 100px; height: 50px; object-fit: cover"
                src="../img/frontend/logo3.png"
              />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link" href="../">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../motor/">Motor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../mobil/">Mobil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./">Konversi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../spklu/">Charging Station</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- navbar -->
      <!-- form tambah jasa -->
      <div class="m-3">
        <div class="row align-items-center">
          <div class="col-0 col-md-6">
            <div class="m-3">
              <img
                src="../img/frontend/banner_jasa1.png"
                class="img-fluid rounded shadow"
                alt="jasa konversi"
              />
            </div>
          </div>
          <div class="container-fluid col-0 col-md-6 pe-5">
            <form class="border-2" method="post" action="" enctype="multipart/form-data" form="tambahjasa">
              <h2 class="text-center">Ayo Dukung Indonesia Lebih Sehat</h2>
              <p class="my-4">
                Jika kamu dapat melakukan konversi listrik terhadap kendaraan
                konvensional, silahkan isi form berikut agar jasa kamu dapat
                dilihat oleh publik
              </p>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold"
                  >Nama Jasa Kamu</label
                >
                <input
                  type="text"
                  name="nama_jasa"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold"
                  >Nama Penyedia</label
                >
                <input
                  type="text"
                  name="penyedia_jasa"
                  class="form-control"
                  id="exampleInputPassword1"
                />
              </div>
              <div class="mb-3">
                <label for="gambar" class="form-label fw-bold">Gambar Promosi Jasamu</label><br />
                <input type="file" name="gambar_jasa" id="gambar" required />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold"
                  >Alamat Bengkel / Workshop</label
                >
                <input
                  type="text"
                  name="alamat_jasa"
                  class="form-control"
                  id="exampleInputPassword1"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold"
                  >No Telpon </label
                >
                <input
                  type="number"
                  name="kontak_jasa"
                  class="form-control"
                  id="exampleInputPassword1"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-bold"
                  >Deskripsikan Jasa Kamu</label
                >
                <textarea
                  name="desk_jasa"
                  class="form-control"
                  id="tambahjasa"
                ></textarea>
              </div>
              <button
                type="submit"
                name="submit"
                class="btn btn-primary py-3 px-4"
              >
                Kirim
              </button>
            </form>
          </div>
        </div>
      </div>
      <!-- form tambah jasa -->
      <!-- form collapse jasa -->
      <div class="m-3 mt-md-5 mb-md-3">
        <p class="text-center">
          <a
            class="btn btn-primary py-3 px-5"
            data-bs-toggle="collapse"
            href="#collapseExample"
            role="button"
            aria-expanded="false"
            aria-controls="collapseExample"
          >
            Lihat Jasa Yang Tersedia
          </a>
        </p>
        <div class="collapse" id="collapseExample">
          <div>
      <!-- card jasa -->
      <div class="mx-lg-5 my-5">
        <div class="row justify-content-start gx-3">
          <?php
              $profile=mysqli_query($conn,"SELECT * from jasa where status_jasa=1");
              while($p=mysqli_fetch_array($profile)){
                  ?>
          <div class="col-md-4 col-lg-3">
            <div class="card mb-3 mobil_listrik font-membesar" style="width: 18rem; height:30rem">
              <img
                src="../img/jasa/<?php echo $p['gambar_jasa'] ?>"
                class="card-img-top mx-auto mt-3"
                style="width: 250px; height: 250px; object-fit: cover"
                alt="..."
              />
              <div class="card-body">
                <h4 class="card-title"><?php echo $p['nama_jasa'] ?></h4>
                <h6><?php echo $p['penyedia_jasa'] ?></h6>
                <p class="card-text"><?php echo substr_replace($p['desk_jasa'],"...",100); ?></p>
                <div class="card-footer text-center">
                <a href="jasapilih.php?id_jasa=<?php echo $p['id_jasa'] ?>" class="btn btn-primary glow-on-hover">Lihat lebih lanjut</a>
                </div>
              </div>
            </div>
          </div>        
          <?php
              }
           ?>
        </div>
      </div>
      <!-- card jasa -->
          </div>
        </div>
      </div>
      <!-- form collapse jasa -->
      <!-- footer -->
      <div class="bg-dark mb-n4">
        <div class="text-center">
          <img
            style="width: 200px; height: 100px; object-fit: cover"
            src="../img/frontend/logo2.png"
          />
          <h5 class="mb-3 fw-bold text-light">Stay In Touch With Us</h5>
          <div class="mb-5">
            <a>
              <button
                class="btn btn-primary mx-1"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                data-bs-title="Coming Soon"
                data-bs-custom-class="custom-tooltip"
                disabled
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-facebook"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                  />
                </svg>
              </button>
              <button
                class="btn btn-primary mx-1"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                data-bs-title="Coming Soon"
                data-bs-custom-class="custom-tooltip"
                disabled
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-instagram"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                  />
                </svg>
              </button>
              <button
                class="btn btn-primary mx-1"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                data-bs-title="Coming Soon"
                data-bs-custom-class="custom-tooltip"
                disabled
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-twitter"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                  />
                </svg>
              </button>
            </a>
          </div>

          <p class="text-light mt-n2">
            Copyright ©2022 All rights reserved | This website is made by
            LazyDino
          </p>
        </div>
      </div>
      <!-- footer -->
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
