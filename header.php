<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRADE.</title>
    <link rel="stylesheet" href="style.css">
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
  <!--Start Topbar -->
<section class="bg-dark">
    <div class="top-header">
        <div class="container">
            <div class="d-flex justify-content-between flex-md-row flex-column">
                  <div class="d-flex gap-2 text-light pt-2 flex-wrap">
                    <p class="text-light"><i class="bi bi-geo-alt-fill text-primary"></i> 1375 Ash Avenue</p>
                    <p class="text-light"><i class="bi bi-envelope-at-fill text-primary"></i> info@example.com</p>
                    <p class="text-light"><i class="bi bi-telephone-fill text-primary"></i> 314-326-2990</p>
                  </div> 

                  <div class="d-flex gap-2 text-light flex-wrap">
                      <p class="pt-2 text-light">Follow Us:</p>
                      <a href="https://www.facebook.com/" class="pt-2 text-light"><i class="bi bi-facebook"></i></a><a href="http://"  class="pt-2 text-light"><i class="bi bi-twitter"></i></a><a href="http://"  class="pt-2 text-light"><i class="bi bi-linkedin"></i></a></p>
                      <button class="btn btn-primary ps-3" onclick="openForm()"><a href="popupform.php" class="link">Get A Quat </a></button>
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item fw-bold">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>
        <li class="nav-item fw-bold">
          <a class="nav-link active" aria-current="page" href="blog.php">Blog</a>
        </li>
        
        <li class="nav-item fw-bold">
          <a class="nav-link active" aria-current="page" href="services.php">Services</a>
        </li>

        <li class="nav-item dropdown fw-bold">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="404.php">404</a></li>
            <li><a class="dropdown-item" href="https://arifcv.netlify.app/">Portfolio</a></li>
            <li><a class="dropdown-item" href="contactus.php">Contact</a></li>
          </ul>
        </li>

        <li class="nav-item fw-bold">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
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
<!-- End Header -->