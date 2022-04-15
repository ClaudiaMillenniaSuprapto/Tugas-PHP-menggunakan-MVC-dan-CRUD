<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../public/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/main.css">
</head>

<body>
  <!-- rumah -->
  <header id="header" class="vh-100 carousel slide" data-bs-ride="carousel" style="padding-top: 104px;">
    <div class="container h-100 d-flex align-items-center carousel-inner">
      <div class="text-center carousel-item active">
        <h2 class="text-capitalize text-black">Selamat Datang!</h2>
        <h2 class="text-uppercase py-2 fw-bold text-black">Halo, nama saya <?= $data['nama']; ?></h2>
        <a href="#special" class="btn mt-3 text-uppercase">mentor</a>
      </div>
    </div>
  </header>

  <section id="special" class="py-5">
    <div class="container">
      <div class="title text-center py-5">
        <h2 class="position-relative d-inline-block">Daftar Mentor Terpopular</h2>
      </div>

      <div class="special-list row g-0">
        <div class="col-md-6 col-lg-4 col-xl-3 p-2">
          <div class="special-img position-relative overflow-hidden">
            <!-- <img src="../public/img/mentor3.jpg" class="w-100"> -->
            <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
            </span>
          </div>
          <div class="text-center">
            <p class="text-capitalize mt-3 mb-1">Webservice API</p>
            <p class="card-text mt-3 text-muted" style="font-size: 10px;">Web API adalah aplikasi atau antarmuka untuk menghubungkan aplikasi satu dengan aplikasi yang lain pada sebuah sistem berbasis website. Sedangkan web service adalah bentuk layanan yang diberikan melalui platform berbasis website untuk menghubungkan aplikasi yang berbeda.</p>
            <br>
            <span class="fw-bold d-block">Muhamad Machfur</span>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3 p-2">
          <div class="special-img position-relative overflow-hidden">
            <!-- <img src="../public/img/mentor4.jpg" class="w-100"> -->
            <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
            </span>
          </div>
          <div class="text-center">
            <p class="text-capitalize mt-3 mb-1">Pemrograman Mobile</p>
            <p class="card-text mt-3 text-muted" style="font-size: 10px;">Mobile app developer adalah para programmer yang telah terbiasa dan terlatih membangun produk berupa aplikasi berbasis mobile. Pekerjaan yang mereka lakukan didasarkan pada ide-ide desain serta penerapan rekayasa perangkat lunak.</p>
            <br>
            <br>
            <span class="fw-bold d-block">Moh. Anshiru Aris</span>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3 p-2">
          <div class="special-img position-relative overflow-hidden">
            <!-- <img src="../public/img/mentor1.jpg" class="w-100"> -->
            <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
            </span>
          </div>
          <div class="text-center">
            <p class="text-capitalize mt-3 mb-1">Pemrograman Web Berbasis MVC</p>
            <p class="card-text mt-3 text-muted" style="font-size: 10px;">MVC yang merupakan singkatan dari Model View Controller adalah satu software design pattern yang sekarang banyak dipergunakan dalam pengembangan sebuah aplikasi maupun situs web. Design pattern ini sekarang banyak dimanfaatkan pada PHP Framework populer di dunia seperti Laravel, Symfony, Code Igniter, maupun Yii.</p>
            <span class="fw-bold d-block">Eko Wahyu</span>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 col-xl-3 p-2">
          <div class="special-img position-relative overflow-hidden">
            <!-- <img src="../public/img/mentor2.jpg" class="w-100"> -->
            <span class="position-absolute d-flex align-items-center justify-content-center text-primary fs-4">
            </span>
          </div>
          <div class="text-center">
            <p class="text-capitalize mt-3 mb-1">Sistem Informasi Eksekutif</p>
            <p class="card-text mt-3 text-muted" style="font-size: 10px;">Sistem informasi eksekutif merupakan salah satu sistem yang digunakan untuk membantu kegiatan manusia menjadi lebih fleksibel dan mampu memberikan keputusan dalam proses pengambilan keputusan yang dibutuhkan oleh tim eksekutif. Komponen utama dari EIS terdiri atas hardware, software, basis data, dan user interface.</p>
            <br>
            <span class="fw-bold d-block">Chandra Sukma Anugrah</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- about us -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row gy-lg-5 align-items-center">
        <div class="col-lg-6 order-lg-1 text-center text-lg-start">
          <div class="title pt-3 pb-5">
            <br>
            <br>
            <br>
            <br>
            <h2 class="position-relative d-inline-block ms-4">About Me</h2>
          </div>
          <p class="lead text-muted">A little story of my life.</p>
          Hi my name is <?= $data['nama']; ?>, you can call me Claudia. I am a student from Pembangunan Nasional Veteran Jawa Timur University.
          I am currently studying in semester 6.</p>
          <p>In this semester I took part in an internship at PT. Disty Teknologi Indonesia and attend one of the classes on campus.</p>
          <p>By joining the internship program I hope I can follow well and get good results.</p>
        </div>
        <div class="col-lg-6 order-lg-0">
          <img src="<?= BASEURL; ?>/img/profile.jpg" alt="" class="img-fluid" width="450" class="rounded-circle shadow">
        </div>
      </div>
    </div>
  </section>

  <!-- jquery -->
  <script src="js/jquery-3.6.0.js"></script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
  <!-- bootstrap js -->
  <script src="../public/css/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <!-- custom js -->
  <script src="../public/css/js/script.js"></script>
</body>