<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dairy Product</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" />

  <style>
        .hi-slide .hi-next,
    .hi-slide .hi-prev {
      top: 56%;
      height: 40px;
      margin-top: -40px;
      border-radius: 50px;
      line-height: 42px;
      background-color: #f82249;
      font-size: 30px;
    }

    .hover-underline-animation {
      display: inline-block !important;
      position: relative !important;
      color: #ffffff !important;
    }

    .hover-underline-animation:after {
      content: '' !important;
      position: absolute !important;
      width: 100% !important;
      transform: scaleX(0) !important;
      height: 3px !important;
      bottom: 0 !important;
      left: 0 !important;
      background-color: #f82249 !important;
      transform-origin: bottom right !important;
      transition: transform 0.25s ease-out !important;
    }

    .hover-underline-animation:hover:after {
      transform: scaleX(1) !important;
      transform-origin: bottom left !important;
    }

    .hover-underline-animation:hover {
      color: #f82249 !important;
    }

    .tug-1 {
      text-underline-offset: 3px !important;
    }

    .tug-2 {
      text-underline-offset: 6px !important;
    }

    .tug-3 {
      text-underline-offset: 9px !important;
    }
  </style>

  <!-- =======================================================
  * Template Name: TheEvent - v4.8.0
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body onload="myFunction()">

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center header-inner">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="index.html" class="scrollto"><img src="assets/img/logonew.png" alt="" title=""></a>
      </div>

      <a class="rounded-0 btn btn-sm btn-danger shadow-none" data-bs-toggle="offcanvas" href="#offcanvasExample"
        role="button" aria-controls="offcanvasExample"><i class="bi bi-list"></i></a>

    </div>
  </header>
  <!-- End Header -->

  <div class="offcanvas offcanvas-end w-auto" data-bs-scroll="true" tabindex="-1" id="offcanvasExample"
  aria-labelledby="offcanvasExampleLabel" style="background: rgba(6, 12, 34, 0.4);">
  <div class="offcanvas-header">
    <!-- <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5> -->
    <!-- <button type="button" class="btn-close text-reset shadow-none" data-bs-dismiss="offcanvas"
      aria-label="Close"></button> -->
  </div>
  <div class="offcanvas-body pt-0">
    <div class="container-fluid mb-4 text-center">
      <img src="assets/img/logonew.png" alt="" class="img-fluid" width="200">
    </div>
    <ul class="navbar-nav text-center">
    <li class="nav-item d-block">
        <a class="nav-link hover-underline-animation active fs-4 text-start" aria-current="page" href="userhome.php">Home</a>
      </li>
      <li class="nav-item d-block">
        <a class="nav-link hover-underline-animation active fs-4 text-start" aria-current="page"
          href="prodlist.php">Products List</a>
      </li>
      <li class="nav-item d-block">
        <a class="nav-link hover-underline-animation active fs-4 text-start" aria-current="page"
          href="cart.php">Cart</a>
      </li>
      <li class="nav-item d-block">
        <a class="nav-link hover-underline-animation active fs-4 text-start" aria-current="page"
          href="login.html">Logout</a>
      </li>
    </ul>
  </div>
</div>

  <main id="main" class="main-page">

    <!-- ======= Speaker Details Sectionn ======= -->
    
        <section id="hotels" class="section-with-bg">

<div class="container" data-aos="fade-up">
  <div class="section-header">
    <h2>Our Store Dairy Products</h2>
  </div>
  <input type="text" id="prod" placeholder="Search keyword" class="form-control col-lg-3" style="float:left;" />
  <?php
                              include('config.php');

                                  ?>

  <input type="button" value="Fetch" onclick="loaddata()"  class="form-control  btn btn-primary col-lg-3" style="float:left;margin-top:10px;" />
  <script>
    function loaddata()
    {
      var menu=document.getElementById('prod').value;
      window.location='searchlist.php?prod='+menu;
    }
    </script>
  <div class="row" data-aos="fade-up" data-aos-delay="100">



    <?php
    $query="";
    if(isset($_GET['prod']))
    {
      $cat=$_GET['prod'];
      $query="SELECT * FROM products where Pname like '%$cat%'";
     
    }
    else{
      $query="SELECT * FROM products";
    }
                                $result = mysqli_query($db,$query)or die(mysqli_error());
                                while($row = mysqli_fetch_array( $result ))
                                {
                                  
                                  echo '<div class="col-lg-3 col-md-6">
                                  <div class="hotel">
                                    <div class="hotel-img">
                                      <img src="./uploads/'.$row['Filename'] .'" alt="Hotel 1" class="img-fluid" style="height:200px;" />
                                    </div>
                                    <h3><a href="viewprod.php?id='.$row['Pid'].'">'.$row['Pname'].'</a></h3>                                    
                                    <p>₹ '.$row['Cost'].'</p>
                                    <p>'.$row['Descr'].'</p>
                                  </div>
                                </div>';
                                  
                                }?>

  </div>
</div>

</section><!-- End  Section -->

            

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Dairy Product</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.js"></script>

  <script>
    $(function(){
      $(".lb-details").addClass("text-center")
    })

    function myFunction()
		{
		debugger;
		document.getElementById('uname').value="User"+Math.floor((Math.random() * 1234) + 1);
		}
  </script>

</body>

</html>