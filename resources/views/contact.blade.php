<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="css/contact.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <img class="logo" src="img/logo.png">
      <span class="navbar-text ml-3">
        UNIT PELAKSANAAN TEKNIS PERLINDUNGAN PEREMPUAN DAN ANAK
    </span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/about')}}">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/visimisi')}}">VISI</a>
          </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('/information')}}">INFORMATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('/contactUs')}}">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('/complain')}}">COMPLAIN</a>
            </li>
        </li>
        </ul>
    
      </div>
    </div>
  </nav>
  <div class="hero-section">
    <img src="{{ asset('img/Customer-Service.jpg') }}" alt="Your Image Description">
    <div class="overlay">
      <div class="overlay-text">CONTACT US</div>
    </div>
  </div>

   <div class="contact-section">
      <div class="row mt-5">
        <div class="col-md-6 d-flex align-items-center justify-content-end"> <!-- Tambahkan kelas d-flex, align-items-center, dan justify-content-center di sini -->
          <div class="card " style="width: 18rem;">
            <img src="/img/Kantor UPT.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title justify-content-center align-items-center d-flex">Location</h5>
              <p class="card-text justify-content-center align-items-center d-flex">
                DP3AP2KB <br>a
                UPTD PPA</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="d-flex align-items-center mt-3">
            <!-- Logo 1 -->
            <img class="icon" src="img/phone-call.png" alt="Logo 2">
            <div class="text-left">
              <h5>Telepon</h5>
              <p>085274342797</p>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <!-- Logo 2 -->
            <img class="icon" src="img/web.png" alt="Logo 2">
            <div class="text-left">
              <h5>Website</h5>
              <p>www.p3ap2kb.tanjabbarat.go.id</p>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <!-- Logo 3 -->
            <img class="icon" src="img/instagram (1).png" alt="Logo 2">
            <div class="text-left">
              <h5>Instagram</h5>
              <p> @dp3ap2kb.tanjabbarat & @upt_ppa_tanjabbarat</p>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <!-- Logo 4 -->
            <img class="icon" src="img/play (1).png" alt="Logo 4">
            <div class="text-left">
              <h5>Aplikasi</h5>
              <p> Aplikasi Sinpan</p>
            </div>
          </div>    
        </div>
      </div>
   </div>

  <div class="footer-section">
    <footer class="footer">
      <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
      </div>
      <ul class="social-icon">
        <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-google-playstore"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="globe-outline"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
            <ion-icon name="logo-instagram"></ion-icon>
          </a></li>
      </ul>
      <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
        <li class="menu__item"><a class="menu__link" href="#">About</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
  
      </ul>
      <p>&copy;2023 | All Rights Reserved</p>
    </footer>
  </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
    function showDescription(id) {
        // Mengambil elemen dengan id tertentu
        var descriptionElement = document.getElementById(id);

        // Menampilkan atau menyembunyikan deskripsi berdasarkan status saat ini
        if (descriptionElement.style.display === 'none') {
            descriptionElement.style.display = 'block';
        } else {
            descriptionElement.style.display = 'none';
        }
    }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", function () {
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });
  });
</script>
</body>

</html>
