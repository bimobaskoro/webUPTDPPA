<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="css/misi.css">

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
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/about')}}">ABOUT</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                VISI & MISI
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- Add dropdown items here -->
                <li><a class="dropdown-item" href="{{url('/visimisi')}}">Visi</a></li>
                <li><a class="dropdown-item" href="{{url('/misi')}}">Misi</a></li>
            </ul>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">INFORMATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('/contactUs')}}">CONTACT</a>
            </li>
        </li>
        </ul>
    
      </div>
    </div>
  </nav>
  <div class="hero-section">
    <img src="{{ asset('img/P1.jpg') }}" alt="Your Image Description">
    <div class="overlay">
      <div class="overlay-text">MISI</div>
    </div>
  </div>

  
  <div class="visi-section">
  <div class="row mb-5">
    <div class="col-md-3">
      <div class = container>
        <div class = card>
          <div class = image>
            <img class="ml-5" href = "#" src ="/img/1.png">
          </div>
          <div class = content>
            <h3>MISI</h3>
            <p>Menerima layanan pengaduan tentang permasalahan perempuan dan anak.</p>
          </div>
        </div>    
      </div>
    </div>
    <div class="col-md-3">
      <div class = container>
        <div class = card>
          <div class = image>
            <img class="ml-5" href = "#" src ="/img/2.png">
          </div>
          <div class = content>
            <h3>MISI</h3>
            <p> Memberikan layanan pendampingan hukum bagi perempuan dan anak yang mengalami permasalahan.</p>
          </div>
        </div>    
      </div>
    </div>
    <div class="col-md-3">
      <div class = container>
        <div class = card>
          <div class = image>
            <img class="ml-5" href = "#" src ="/img/3.png">
          </div>
          <div class = content>
            <h3>MISI</h3>
            <p> Memberikan layanan pendampingan psikologis bagi perempuan dan anak yang mengalami permasalahan.</p>
          </div>
        </div>    
      </div>
    </div>
    <div class="col-md-3">
      <div class = container>
        <div class = card>
          <div class = image>
            <img class="ml-5" href = "#" src ="/img/4.png">
          </div>
          <div class = content>
            <h3>MISI</h3>
            <p>Memberikan layanan pendampingan untuk mendapatkan restitusi bagi perempuan dan anak yang mengalami permasalahan.</p>
          </div>
        </div>    
      </div>
    </div>
  </div>

  <div class="row mb-5">
    <div class="col-md-4 d-flex align-items-center justify-content-start">
      <div class = container>
        <div class = card>
          <div class = image>
            <img class="ml-5" href = "#" src ="/img/5.png">
          </div>
          <div class = content>
            <h3>MISI</h3>
            <p>Memberikan layanan perlindungan khusus bagi anak.</p>
          </div>
        </div>    
      </div>
    </div>
    <div class="col-md-4">
      <div class = container>
        <div class = card>
          <div class = image>
            <img class="ml-5" href = "#" src ="/img/6.png">
          </div>
          <div class = content>
            <h3>MISI</h3>
            <p>Memberikan layanan perlindungan perempuan dan anak dari ancaman yang membahayakan diri dan jiwa korban.</p>
          </div>
        </div>    
      </div>
    </div>
    <div class="col-md-4">
      <div class = container>
        <div class = card>
          <div class = image>
            <img class="ml-5" href = "#" src ="/img/7.png">
          </div>
          <div class = content>
            <h3>MISI</h3>
            <p>Layanan pendampingan untuk mendapatkan restitusi diberikan kepada perempuan dan anak yang mengalami permasalahan karena korban selama ini tidak tahu akan haknya.</p>
          </div>
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
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
