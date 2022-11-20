<?php
include "koneksi.php";
if (isset($_POST["submit"])) {
  $email=$_POST["email"];
  $isi_pesan=$_POST["isi_pesan"];
  date_default_timezone_set('Asia/Jakarta');
  $tanggal=date('Y-m-d H:i:s');
  mysqli_query($conn,"INSERT INTO pesan values ('','$email','$isi_pesan','$tanggal')");
  echo "<script>
          alert('Sukses memberikan saran!');
        </script>";
}
else {
  echo mysqli_error($conn);
}
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
    <title>Electrive - Home</title>
  </head>
  <body>
    <div>
      <!-- navbar -->
      <div>
        <nav class="navbar navbar-expand-lg bg-light mt-2">
          <div class="container-fluid">
            <a class="navbar-brand text-xxl" href="../skripsi/">
              <img
                style="width: 100px; height: 50px; object-fit: cover"
                src="./img/frontend/logo3.png"
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
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./motor/">Motor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./mobil/">Mobil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./jasa/">Konversi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./spklu/">Charging Station</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- navbar -->
      <!-- banner -->
      <div>
        <img
          src="./img/frontend/banner_bawah3.jpg"
          class="img-fluid mb-4"
          alt="banner_motor"
        />
      </div>
      <!-- banner -->
      <div class="mt-4 mx-5 mb-5">
        <div class="row gx-5">
          <div class="col-5 my-auto">
            <h1 class="revealUp hover-1">Lebih Hemat, Lebih Hebat</h1>
            <p
              class="mt-5 d-none d-sm-none d-md-block align-bottom fs-5"
              style="text-align: justify"
            >
              Kendaraan listrik merupakan pilihan terbaik untuk lebih hemat dan
              melindungi lingkungan secara bersamaan. Anda dapat mengendarai
              mobil listrik tanpa harus khawatir tentang harga bahan bakar, atau
              berapa biaya yang dibutuhkan untuk mengisi bahan bakar.
            </p>
          </div>
          <div class="col-7">
            <img
              class="img-fluid rounded hover-4 shadow-lg"
              src="https://awsimages.detik.net.id/community/media/visual/2020/02/10/a3506daf-3eda-440a-80a6-2804dc45a11e.jpeg?w=700&q=90"
            />
          </div>
        </div>
        <div class="row">
          <p class="mt-5 d-block d-sm-block d-md-none fs-5">
            Kendaraan listrik merupakan pilihan terbaik untuk lebih hemat dan
            melindungi lingkungan secara bersamaan. Anda dapat mengendarai mobil
            listrik tanpa harus khawatir tentang harga bahan bakar, atau berapa
            biaya yang dibutuhkan untuk mengisi bahan bakar.
          </p>
        </div>
        <div class="row gx-5 mt-5">
          <div class="col-5">
            <img class="img-fluid rounded hover-4" src="./img/frontend/mobil2.jpg" />
          </div>
          <div class="col-7 my-auto">
            <h1 class="revealUp hover-1">Lebih Efisien, Lebih Efektif</h1>
            <p
              class="mt-5 d-none d-sm-none d-md-block align-bottom fs-5"
              style="text-align: justify"
            >
              Dunia telah berubah, dan inilah saatnya untuk bersiap-siap. Mobil
              listrik adalah masa depan dan mereka telah hadir. Sekarang Anda
              tahu cara mengisi daya mobil listrik Anda saat Anda tidur di malam
              hari. Tidak ada lagi antrian di stasiun pengisian bahan bakar
              terdekat!
            </p>
          </div>
        </div>
        <div class="row">
          <p class="mt-5 d-block d-sm-block d-md-none fs-5">
            Dunia telah berubah, dan inilah saatnya untuk bersiap-siap. Mobil
            listrik adalah masa depan dan mereka telah hadir. Sekarang Anda tahu
            cara mengisi daya mobil listrik Anda saat Anda tidur di malam hari.
            Tidak ada lagi antrian di stasiun pengisian bahan bakar terdekat!
          </p>
        </div>
      </div>
      <!-- maps -->
      <div class="text-center jarak_section">
        <h1 class="my-4 mx-5 map-title">Perjalanan Jauh? Tidak Perlu Khawatir</h1>
        <iframe
          class="border-2 shadow-md"
          src="https://www.google.com/maps/d/u/0/embed?mid=1HWJwHpfbe3H3Uzv5a6F8fr-HvFpZWEA&ehbc=2E312F"
          width="100%"
          height="480"
        ></iframe>
        <p class="my-md-4 my-2 mx-5 fs-5">
          Pemerintah telah menyiapkan fasilitas charging station yang telah
          tersebar di beberapa kota besar di Indonesia. Beberapa charging
          station juga telah mendung fitur fast charging untuk mengisi kendaraan
          listrik lebih cepat, tentunya apabila kendaraan tersebut harus
          didukung oleh fitur fast charging juga
        </p>
      </div>
      <!-- maps -->
      <!-- produk indo -->
      <div class="jarak_section text-center mx-5">
        <h1 class="my-4 mx-5">Indonesia Turut Hadir</h1>
        <p class="mx-5 fs-5">
          Selain menyediakan fasilitas bagi konsumen kendaraan listrik, beberapa
          produsen kendaraan juga ikut meramaikan pasar kendaraan listrik dalam
          negeri. Produk kendaraan listrik Indonesia juga dapat bersaing secara
          kualitas dengan produk kendaraan listrik luar negeri. Produk ini juga
          bekerja sama dengan layanan transportasi umum seperti Gojek dan
          layanan logistik seperti Si Cepat.
        </p>
        <div class="row gx-5 gx-md-0">
          <div class="col">
            <a href="https://www.selis.co.id/">
              <div
                class="card rounded border-2 shadow mb-4 card-animate"
                style="width: 18rem"
              >
                <img
                  src="https://www.sepeda.me/wp-content/uploads/2018/10/Logo-Selis.jpg"
                  class="card-img-top p-3"
                  alt="selis"
                />
              </div>
            </a>
          </div>
          <div class="col">
            <a href="http://viarmotor.com/">
              <div
                class="card rounded border-2 shadow mb-4 card-animate"
                style="width: 18rem; height: 18rem"
              >
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Viar_Motor_Indonesia_logo.svg/1200px-Viar_Motor_Indonesia_logo.svg.png"
                  class="card-img-top p-3"
                  alt="viar"
                />
              </div>
            </a>
          </div>
          <div class="col ">
            <a href="https://gesitsmotors.com/">
              <div
                class="card rounded border-2 shadow mb-4 card-animate"
                style="width: 18rem"
              >
                <img
                  src="https://gesitsmotors.com/wp-content/uploads/2020/07/pp.jpg"
                  class="card-img-top p-3"
                  alt="gesits"
                />
              </div>
            </a>
          </div>
          <div class="col">
            <a href="https://charged.co.id/">
              <div
                class="card rounded border-2 shadow mb-4  card-animate"
                style="width: 18rem; height: 18rem"
              >
                <img
                  src="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/825952b7ba2c01c4665e5a9af1af7070.png"
                  class="card-img-top p-3"
                  alt="charged"
                />
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- produk indo -->
      <!-- keuntungan -->
      <div class="mx-5 jarak_section">
        <div class="row">
          <div class="col">
            <h1 class="my-4 mb-5 untung">Banyak Untungnya</h1>
          </div>
          <div class="col"></div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6">
            <p class="home-title fs-5">
              Selain berperan dalam mengurangi pencemaran di lingkungan, dengan
              menggunakan kendaraan listrik, pengendara juga mendapatkan banyak
              keuntungan. Hal ini disebabkan dengan adanya dukungan dan peran
              pemerintah dalam mendorong masyarkat untuk lebih memilih kendaraan
              listrik dibanding kendaraan konvensional
            </p>
          </div>
          <div class="col-12 col-md-6">
            <div>
              <ul class="w-90">
                <li>
                  <div class="row align-items-center font-membesar">
                    <div class="col-1">
                      <i>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="30"
                          height="30"
                          fill="currentColor"
                          class="bi bi-check-circle-fill"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"
                          />
                        </svg>
                      </i>
                    </div>
                    <div class="col-11">
                      <h3>Pajak kendaraan yang lebih rendah</h3>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row gy-2 align-items-center font-membesar">
                    <div class="col-1">
                      <i>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="30"
                          height="30"
                          fill="currentColor"
                          class="bi bi-check-circle-fill"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"
                          />
                        </svg>
                      </i>
                    </div>
                    <div class="col-11">
                      <h3>Bebas aturan ganjil genap</h3>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row gy-2 align-items-center font-membesar">
                    <div class="col-1">
                      <i>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="30"
                          height="30"
                          fill="currentColor"
                          class="bi bi-check-circle-fill"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"
                          />
                        </svg>
                      </i>
                    </div>
                    <div class="col-11">
                      <h3>Biaya operasional lebih rendah</h3>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row gy-2 align-items-center font-membesar">
                    <div class="col-1">
                      <i>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="30"
                          height="30"
                          fill="currentColor"
                          class="bi bi-check-circle-fill"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"
                          />
                        </svg>
                      </i>
                    </div>
                    <div class="col-11">
                      <h3>Hanya membutuhkan sedikit perawatan rutin</h3>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row gy-2 align-items-center font-membesar">
                    <div class="col-1">
                      <i>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="30"
                          height="30"
                          fill="currentColor"
                          class="bi bi-check-circle-fill"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"
                          />
                        </svg>
                      </i>
                    </div>
                    <div class="col-11">
                      <h3>Memiliki sedikit fast moving parts</h3>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- keuntungan -->
      <!-- pesan -->
      <div class="bagian-pesan py-5 mt-5 bg-dark">
        <p class="container text-start text-white fs-5">
          Electrive adalah website yang bertujuan untuk memberikan informasi dan
          mempromosikan produk kendaraan listrik serta fasilitas pendukung
          berupa charging station yang ada di Indonesia. Dengan adanya website
          ini diharapkan agar masyarakat lebih memilih menggunakan kendaraan
          listrik yang lebih ramah lingkungan dibanding kendaraan konvensional.
          Sampaikan pesanmu kepada kami melalui form di bawah ini mengenai kesan
          kamu saat mengunjungi website ini.
        </p>
        <div class="container">
          <div class="row align-items-start">
            <div class="col-4">
            </div>
            <div class="col-4 mx-auto">
              <form method="POST" action="">
                <div class="mb-3">
                  <p for="exampleInputEmail1" class="form-label text-white fs-5 text-center"
                    >Email
                  </p>
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                  />
                </div>
                <div class="mb-3">
                  <p
                    for="exampleInputPassword1"
                    class="form-label text-white fs-5 text-center"
                    >Pesan</
                  >
                  <input
                    type="text"
                    name="isi_pesan"
                    class="form-control"
                    id="floatingTextarea2"
                    style="height: 100px"
                  />
                </div>
                <p class="text-center">
                  <button
                  type="submit"
                  name="submit"
                  class="btn btn-primary mb-3 px-4 py-2"
                >
                  Kirim
                  </button>
                </p>
                
              </form>
            </div>
            <div class="col-4"></div>
          </div>
        </div>
      </div>
      <!-- pesan -->
      <!-- back to top button -->
      <button
        id="btn-back-to-top"
        class="btn-back-to-top bg-light rounded-circle"
      >
        <svg
          classs="icon_up"
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-arrow-up-circle"
          viewBox="0 0 16 16"
        >
          <path
            fill-rule="evenodd"
            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"
          />
        </svg>
      </button>
      <!-- back to top button -->
      <!-- footer -->
      <div class="bg-dark mb-n4">
        <div class="text-center">
          <img
            style="width: 200px; height: 100px; object-fit: cover"
            src="./img/frontend/logo2.png"
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
    <script>
      //Get the button
      let mybutton = document.getElementById("btn-back-to-top");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 700
        ) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      // When the user clicks on the button, scroll to the top of the document
      mybutton.addEventListener("click", backToTop);

      function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
  </body>
</html>
