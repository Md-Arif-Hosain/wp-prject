<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRADE.</title>
    <!-- Font Awsome CDn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- <link rel="stylesheet" href="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA=="> -->
  
  <!-- Link Bootstarp Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Link Custom Css -->
    <link rel="stylesheet" href="style.css">
    <!-- Link Responsive Css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<section class="bg-dark">
    <div class="top-header">
        <div class="container">
            <div class="d-flex justify-content-between">
                  <div class="d-flex gap-2 text-light pt-2">
                    <p><i class="bi bi-geo-alt-fill text-danger"></i> 1375 Ash Avenue</p>
                    <p><i class="bi bi-envelope-heart text-danger"></i> info@example.com</p>
                    <p><i class="bi bi-telephone-fill text-danger"></i> 314-326-2990</p>
                  </div> 

                  <div class="d-flex gap-2 text-light">
                      <p class="pt-2">Follow Us:</p>
                      <a href="https://www.facebook.com/" class="pt-2 text-light"><i class="bi bi-facebook"></i></a><a href="http://"  class="pt-2 text-light"><i class="bi bi-twitter"></i></a><a href="http://"  class="pt-2 text-light"><i class="bi bi-linkedin"></i></a></p>
                      <button class="btn btn-primary ps-3">Get A Quat</button>
                  </div>   
                  
            </div>
        </div>
    </div>
</section>
<!-- End Top bar -->

<!-- Start Header -->
<section class="p-2">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
      <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
        <li class="nav-item fw-bold">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <li class="nav-item fw-bold">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item fw-bold">
          <a class="nav-link active" aria-current="page" href="#">Blog</a>
        </li>
        
        <li class="nav-item fw-bold">
          <a class="nav-link active" aria-current="page" href="#">Services</a>
        </li>

        <li class="nav-item dropdown fw-bold">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Portfolio</a></li>
            <li><a class="dropdown-item" href="#">404</a></li>
            <li><a class="dropdown-item" href="#">Contact</a></li>
          </ul>
        </li>

        <li class="nav-item fw-bold">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>

      </ul>
      <form class="d-flex">
        <button class="border-0 bg-light" type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </div>
</nav>
</div>
</section>

<!-- Start Slider -->
<section>
  <div class="">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-primary" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="bg-primary" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="bg-primary" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active slider-bg">
      <img src="img/slider1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-light">Meet with us to</h1>
        <h1 class="text-light">success dream <span class="text-primary">business</span></h1>
        <p class="pt-3 pb-3 text-light">There are many variations of passages of Lorem Ipsum available but the majority have sufered alteration<br>
          in some form by injected humour randomised</p>
          <button class="btn btn-primary">Get Started</button>
      </div>
    </div>
    <div class="carousel-item slider-bg">
      <img src="img/slider2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-light">Meet with us to</h1>
        <h1 class="text-light">success dream <span class="text-primary">business</span></h1>
        <p class="pt-3 pb-3 text-light">There are many variations of passages of Lorem Ipsum available but the majority have sufered alteration<br>
          in some form by injected humour randomised</p>
          <button class="btn btn-primary">Get Started</button>
      </div>
    </div>
    <div class="carousel-item slider-bg">
      <img src="img/slider3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-light">Meet with us to</h1>
        <h1 class="text-light">success dream <span class="text-primary">business</span></h1>
        <p class="pt-3 pb-3 text-light">There are many variations of passages of Lorem Ipsum available but the majority have sufered alteration<br>
          in some form by injected humour randomised</p>
          <button class="btn btn-primary">Get Started</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
</section>

<!-- About Section -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
         <h2 class="pt-80 text-dark fw-bold">About Us</h1>
           <div class="bb"></div>
         <p class="pt-5 text-secondary">Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, 
          nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit.<br><br>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
         parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
        </p>
      </div>

      <div class="col-md-3 col-sm-6 col-12 text-center pb-60 pt-60">
         <img src="img/about1.jpg" class="py-5" alt="">
      </div>
      <div class="col-md-3 col-sm-6 col-12 text-center pb-60 pt-60">
         <img src="img/about2.jpg" class="py-5" alt="">
      </div>
    </div>
  </div>
</section>

<section class="area-bg">
  <div class="container">
    <div class="row pb-80">
      <div class="col-12 text-center">
      <h2 class="sec-title">Our Services </h2>
      <div><span class="bb"></span></div>
      <p class="py-5 text-secondary">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in<br>
       some form,words which don't look even slightly believable.</p>
      </div>

    <div class="row ">
      <div class="col-md-4 col-sm-6 col-12 text-center pt-80 p-3">
       <div class="border rounded-3">
        <img src="img/layer-group-solid.svg" class="w-25 pt-5" alt="">
        <h5 class="py-2 sec-title2">Designs & interfaces</h5>
        <p class="p-4 text-secondary">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
        <button class="btn1 btn-secondery py-4 bg-light" >Read More</button>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-12 text-center pt-80 p-3">
       <div class="border rounded-3">
        <img src="img/algolia-brands.svg" class="w-25 pt-5" alt="">
        <h5 class="py-2 sec-title2">Designs & interfaces</h5>
        <p class="p-4 text-secondary">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
        <button class="btn1 btn-secondery py-4 bg-light" >Read More</button>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-12 text-center pt-80 p-3">
       <div class="border rounded-3">
        <img src="img/air-freshener-solid.svg" class="w-25 pt-5" alt="">
        <h5 class="py-2 sec-title2">Designs & interfaces</h5>
        <p class="p-4 text-secondary">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
        <button class="btn1 btn-secondery pt-4 py-4 bg-light" >Read More</button>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-12 text-center pt-80 p-3">
       <div class="border rounded-3">
        <img src="img/ambulance-solid.svg" class="w-25 pt-5" alt="">
        <h5 class="py-2 sec-title2">Designs & interfaces</h5>
        <p class="p-4 text-secondary">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
        <button class="btn1 btn-secondery py-4 bg-light" >Read More</button>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-12 text-center pt-80 p-3">
       <div class="border rounded-3">
        <img src="img/american-sign-language-interpreting-solid.svg" class="w-25 pt-5" alt="">
        <h5 class="py-2 sec-title2">Designs & interfaces</h5>
        <p class="p-4 text-secondary">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
        <button class="btn1 btn-secondery py-4 bg-light" >Read More</button>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-12 text-center pt-80 p-3">
       <div class="border rounded-3">
        <img src="img/address-card-solid.svg" class="w-25 pt-5" alt="">
        <h5 class="py-2 sec-title2">Designs & interfaces</h5>
        <p class="p-4 text-secondary">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
        <button class="btn1 btn-secondery pt-4 py-4 bg-light" >Read More</button>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>

<!--Start Counter -->
<section class="counter">
  <div class="container">
    <div class="row text-center pt-80 pb-80">
      <div class="col-md-3 col-sm-6 col-12">
      <i class="bi bi-people-fill fs-5 text-primary fs-1"></i>
      <h2 class="text-light">5780</h2>
      <h4 class="text-light">Happy Customers</h4>
      </div>

      <div class="col-md-3 col-sm-6 col-12">
      <i class="bi bi-hand-thumbs-up fs-5 text-primary fs-1"></i>
      <h2 class="text-light">4920</h2>
      <h4 class="text-light">Project Complete</h4>
      </div>

      <div class="col-md-3 col-sm-6 col-12">
      <i class="bi bi-buildings fs-5 text-primary fs-1"></i>
      <h2 class="text-light">1760 </h2>
      <h4 class="text-light">World Wide Branch</h4>
      </div>

      <div class="col-md-3 col-sm-6 col-12">
      <i class="bi bi-printer fs-5 text-primary fs-1"></i>
      <h2 class="text-light">2738</h2>
      <h4 class="text-light">Digital Instrument</h4>
      </div>
    </div>
  </div>
</section>
<!-- End Counter -->

<!--Start Project -->
<section class="bg-light">
  <div class="container">
    <div class="row pb-80">
      <div class="col-12 text-center">
      <h2 class="sec-title">Our Services</h2>
      <div><span class="bb"></span></div>
      <p class="py-5 text-secondary">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in<br>
       some form,words which don't look even slightly believable.</p>
      </div>

    <div class="row ">
      <div class="col-md-4 col-sm-6 col-12 text-center pt-80 p-3 overly">
       <div class="border rounded-3">
        <img src="img/1.jpg" class="image" alt="">
        <div class="middle">
          <div class="text">
        <h5 class="py-2">Finance Consultancy</h5>
        <p class="p-4">supporting text</p>
      </div>
        </div>
        </div>
      </div>

     <div class="col-md-4 col-sm-6 col-12 text-center pt-80 p-3 overly">
       <div class="border rounded-3">
        <img src="img/2.jpg" class="image" alt="">
        <div class="middle">
          <div class="text">
        <h5 class="py-2">Finance Consultancy</h5>
        <p class="p-4">supporting text</p>
      </div>
        </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-12 text-center pt-80 p-3 overly">
       <div class="border rounded-3">
        <img src="img/3.jpg" class="image" alt="">
        <div class="middle">
          <div class="text">
        <h5 class="py-2">Finance Consultancy</h5>
        <p class="p-4">supporting text</p>
      </div>
        </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-12 text-center pt-80 p-3 overly">
       <div class="border rounded-3">
        <img src="img/4.jpg" class="image" alt="">
        <div class="middle">
          <div class="text">
        <h5 class="py-2">Finance Consultancy</h5>
        <p class="p-4">supporting text</p>
      </div>
        </div>
        </div>
      </div>
      
      <div class="col-md-4 col-sm-6 col-12 text-center pt-80 p-3 overly">
       <div class="border rounded-3">
        <img src="img/5.jpg" class="image" alt="">
        <div class="middle">
          <div class="text">
        <h5 class="py-2">Finance Consultancy</h5>
        <p class="p-4">supporting text</p>
      </div>
        </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-12 text-center pt-80 p-3 overly">
       <div class="border rounded-3">
        <img src="img/6.jpg" class="image" alt="">
        <div class="middle">
          <div class="text">
        <h5 class="py-2">Finance Consultancy</h5>
        <p class="p-4">supporting text</p>
      </div>
        </div>
        </div>
      </div>

    </div>

    </div>
  </div>
</section>
<!-- End Project -->

<!-- Slider Testmonial -->
<section>
 <div class="container">
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/s1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/s2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/s3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 </div>

</section>
<!-- End SLider Testmonial -->

<!--Start Our Team -->
<section class="area-bg">
  <div class="container">
    <div class="row pb-80">
      <div class="col-12 text-center">
      <h2 class="sec-title">Our Team </h2>
      <div class="">
      <span class="bb"></span>
      </div>
      <p class="py-5 text-secondary">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in<br>
       some form,words which don't look even slightly believable.</p>
      </div>

    <div class="row ">
      <div class="col-md-3 col-sm-6 col-12 text-center pt-80 p-3 overly">
       <div class="border rounded-3">
        <img src="img/01.jpg" class="" alt="">
        <div class="middle">
          <div class="text">
        <h5 class="py-2">Arif Raihan</h5>
        <p class="p-4">Web Designer</p>
      </div>
        </div>
        </div>
      </div>

     <div class="col-md-3 col-sm-6 col-12 p-3 overly">
       <div class="border rounded-3">
        <img src="img/02.jpg" class="image" alt="">
        <div class="arifa">
          <div class="arif">
        <h5 class="py-2">Finance Consultancy</h5>
        <p class="p-4">supporting text</p>
      </div>
        </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-12 p-3 overly">
       <div class="border rounded-3">
        <img src="img/03.jpg" class="image" alt="">
        <div class="middle">
          <div class="text">
        <h5 class="py-2">Finance Consultancy</h5>
        <p class="p-4">supporting text</p>
      </div>
        </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-12 p-3 overly">
       <div class="border rounded-3">
        <img src="img/04.jpg" class="image" alt="">
        <div class="middle">
          <div class="text">
        <h5 class="py-2">Finance Consultancy</h5>
        <p class="p-4">supporting text</p>
      </div>
        </div>
        </div>
      </div>
      
     
    </div>

    </div>
  </div>
</section>

<!-- Watch Vedio -->
<section class="vedio" style="background-image: url('img/cta1.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12 text-center text-light pb-80">
       <h2 class="pt-80 pb-5">Developing first class solutions<br>for our clients.</h2>
       <a href="https://www.youtube.com/watch?v=uxZR17y9xzQ&ab_channel=JamunaTV" target="_blank"><button class="btn btn-primary rounded-pill">WATCH VIDEO</button></a>
      </div>
    </div>
  </div>
</section>
<!-- End Vedio Section -->

<!--Start Latest Blog -->
<section class="area-bg">
  <div class="container">
    <div class="row pb-80">
      <div class="col-12 text-center">
      <h2 class="sec-title">Latest Blog </h2>
      <div class="">
      <span class="bb"></span>
      </div>
      <p class="py-5 text-secondary">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in<br>
       some form,words which don't look even slightly believable.</p>
      </div>

      <div class="row row-cols-1 row-cols-md-3 g-4">

      <div class="col shadow-lg">
    <div class="card h-100 border-0">
      <img src="img/03 (1).jpg" class="card-img-top p-3" alt="...">
      <div class="card-body">
        <p class="card-text">08 APRIL 2019</p>
        <h5 class="card-title text-dark pt-3 pb-3">Welcome to Jekyll! Go ahead and edit</h5>
        <a href="blog.php"><button class="btn1 btn-secondery bg-white" >Read More</button></a>
      </div>
    </div>
  </div>

  <div class="col shadow-lg">
    <div class="card h-100 border-0">
      <img src="img/09.jpg" class="card-img-top p-3" alt="...">
      <div class="card-body">
        <p class="card-text">10 MARCH 2019</p>
        <h5 class="card-title text-dark pt-3 pb-3">WordPress hostin manage your growth Nullam non nisi est</h5>
        <a href="blog.php"><button class="btn1 btn-secondery bg-white" >Read More</button></a>
      </div>
    </div>
  </div>

  <div class="col shadow-lg">
    <div class="card h-100 border-0">
      <img src="img/05.jpg" class="card-img-top p-3" alt="...">
      <div class="card-body">
        <p class="card-text">09 MARCH 2019</p>
        <h5 class="card-title text-dark pt-3 pb-3">html5 Static Site Generator For All amet facilisis</h5>
        <a href="blog.php"><button class="btn1 btn-secondery bg-white" >Read More</button></a>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
</section>

<!-- Bootstarp Jave script link -->
<script src="js/bootstrap.bundle.min.js"></script>
  <!-- JS link -->
  <script src="js/script.js"></script>
  <!-- Footer Link End -->
</body>
</html>