<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="css/index.css">

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
    <img src="{{ asset('img/B1.jpg') }}" alt="Your Image Description">
    <div class="overlay">
      <center>
        <div class="overlay-text">  UNIT PELAKSANAAN TEKNIS PERLINDUNGAN PEREMPUAN DAN ANAK</div>
      </center>
    </div>
  </div>

  <div class="about-section">
    <div class="about-container text-center">
      <div class="about-title mt-5">ABOUT</div>
      <div class="about-text mt-3">
        UPTD PPA di Dinas P3AP2KB merupakan sebuah organisasi yang bertanggung jawab untuk melaksanakan kegiatan teknis operasional dalam memberikan pelayanan 
        kepada perempuan dan anak yang menjadi korban kekerasan dan diskriminasi, serta anak-anak yang terlibat dalam masalah hukum di wilayah tersebut.
      </div>
      <button type="button" class="btn btn-outline-secondary mt-3">Learn More</button>
    </div>
  </div>

  <div class="information-section">
    <div class="information-title mt-5 mb-">INFORMATION</div>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                  <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($posts as $key => $post)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                          <img src="{{ asset('storage/public/images-post/' . $post->image_url) }}" class="img-fluid rounded-start" alt="...">
                                          <div class="card-body">
                                                <h4 class="card-title">{{ $post->title }}</h4>
                                                <p class="card-text">{{ $post->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </section>
</div>


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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 

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
