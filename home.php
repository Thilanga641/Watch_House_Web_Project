<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location:index.php"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizon Watch</title>

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Example</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Black Navbar Example</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top bg-dark navbar-dark" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="Logo" width="60" height="30" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#customers">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallary">Store</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Sign Out</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS (includes Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
    <!-- Home Section Start -->
    <div class="home" id="home">
      
        <div class="content">

          <video autoplay loop muted plays-inline class="back-video">
            <source src="2.mp4" type="video/mp4">
          </video>
            <h5>Welcome To <span>Horizon watchs</span></h5><Br><br>
            <h1>Buy <span class="changecontent"></span> watch</h1>
            <p>Elevate your style with our curated collection of iconic timepieces. <br>
              Discover the perfect blend of luxury and precision craftsmanship that defines Horizon watch.<br> 
              Explore now and make every moment count.</p>
            <a href="#Products">View Products</a>
           
        </div>
        
    </div>
    <!-- Home Section End -->




<!-- product Section -->
<section class="product" id="Products">
<div class="container" id="watch">
  <div class="main-txt">
  <h1><span>P</span>roducts</h1></div>


  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="images/1.jpg" class="card-img-top" alt="watch 1">
        <div class="card-body">
          <h3>Rolex Watch</h3>
          <p>The Rolex collection offers a wide range of prestigious, high-precision timepieces, 
            from Professional to Classic models to suit any wrist.</p>
          <div class="star">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
          </div>
          <h6>Price: <strong>$999</strong></h6>
          <a href="#" class="btn btn-primary">BOOK Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="images/2.jpg" class="card-img-top" alt="watch 2">
        <div class="card-body">
          <h3>Omega Watch</h3>
          <p>Elevate your style with Omega watches—timeless elegance, precision, and luxury since 1848. 
            Discover innovation and sophistication.</p>
          <div class="star">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star "></i>
          </div>
          <h6>Price: <strong>$850</strong></h6>
          <a href="#" class="btn btn-primary">BOOK Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="images/3.jpg" class="card-img-top" alt="watch 3">
        <div class="card-body">
          <h3>Patek Philippe</h3>
          <p>Patek Philippe watches: epitome of luxury, craftsmanship, and heritage, 
            symbolizing sophistication and status since inception.</p>
          <div class="star">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star "></i>
            <i class="fa-solid fa-star "></i>
          </div>
          <h6>Price: <strong>$650</strong></h6>
          <a href="#" class="btn btn-primary">BOOK Now</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="cardnoshow">
        <img src="images/4.jpg" class="card-img-top" alt="watch 1">
        <div class="card-body">
          <h3>TAG Heuer</h3>
          <p>Precision Swiss timepieces blending luxury and performance for discerning watch enthusiasts.</p>
          <div class="star">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star "></i>
            <i class="fa-solid fa-star "></i>
          </div>
          <h6>Price: <strong>$450</strong></h6>
          <a href="#" class="btn btn-primary">BOOK Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="cardnoshow">
        <img src="images/5.jpg" class="card-img-top" alt="watch 2">
        <div class="card-body">
          <h3>Breitling</h3>
          <p>Iconic Swiss watches merging aviation heritage with elegance, crafted for style and precision.</p>
          <div class="star">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star "></i>
            <i class="fa-solid fa-star "></i>
          </div>
          <h6>Price: <strong>$750</strong></h6>
          <a href="#" class="btn btn-primary">BOOK Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="cardnoshow">
        <img src="images/11.jpg" class="card-img-top" alt="watch 3">
        <div class="card-body">
          <h3>Omega Watch</h3>
          <p>Elevate your style with Omega watches—timeless elegance, precision, and luxury since 1848. 
         </p>
          <div class="star">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star "></i>
            <i class="fa-solid fa-star "></i>
          </div>
          <h6>Price: <strong>$500</strong></h6>
          <a href="#" class="btn btn-primary">BOOK Now</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="cardnoshow">
        <img src="images/7.jpg" class="card-img-top" alt="watch 1">
        <div class="card-body">
          <h3>Hublot</h3>
          <p>Fusion of innovation and luxury, creating exceptional Swiss timepieces with contemporary design and craftsmanship.</p>
          <div class="star">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star "></i>
            <i class="fa-solid fa-star "></i>
          </div>
          <h6>Price: <strong>$350</strong></h6>
          <a href="#" class="btn btn-primary">BOOK Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="cardnoshow">
        <img src="images/8.jpg" class="card-img-top" alt="watch 2">
        <div class="card-body">
          <h3>Jaeger-LeCoultre
          </h3>
          <p>
            Jaeger-LeCoultre: Swiss excellence in elegant, innovative timepieces blending craftsmanship</p>
          <div class="star">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star "></i>
            <i class="fa-solid fa-star "></i>
          </div>
          <h6>Price: <strong>$500</strong></h6>
          <a href="#" class="btn btn-primary">BOOK Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="cardnoshow">
        <img src="images/9.jpg" class="card-img-top" alt="watch 3">
        <div class="card-body">
          <h3>IWC Schaffhausen</h3>
          <p>Exceptional Swiss watches embodying precision engineering, timeless design, and luxurious craftsmanship seamlessly</p>
          <div class="star">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star "></i>
            <i class="fa-solid fa-star "></i>
          </div>
          <h6>Price: <strong>$780</strong></h6>
          <a href="#" class="btn btn-primary">BOOK Now</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="cardnoshow">
        <img src="images/10.jpg" class="card-img-top" alt="watch 1">
        <div class="card-body">
          <h3>Rolex Watch</h3>
          <p>The Rolex collection offers a wide range of prestigious, high-precision timepieces, 
            from Professional to Classic models to suit any wrist.</p>
          <div class="star">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star "></i>
            <i class="fa-solid fa-star "></i>
          </div>
          <h6>Price: <strong>$1050</strong></h6>
          <a href="#" class="btn btn-primary">BOOK Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="cardnoshow">
        <img src="images/12.jpg" class="card-img-top" alt="watch 2">
        <div class="card-body">
          <h3>Breitling</h3>
          <p>Iconic Swiss watches merging aviation heritage with elegance, crafted for style and precision.</p>
          <div class="star">
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star checked"></i>
            <i class="fa-solid fa-star "></i>
            <i class="fa-solid fa-star "></i>
          </div>
          <h6>Price: <strong>$360</strong></h6>
          <a href="#" class="btn btn-primary">BOOK Now</a>
        </div>
    </div>
    
  </div>
  

  </div>
  <!--loadmore button-->
  <div class="col-md-12 text-center morebtn">
    <button class="btn btn-warning btn-lg" id="ldmore">Load more<i class="bi bi-chevron-double-down"></i></button>
  </div>
</div>
<!--make border-->
<div class=" borderw" id="review" ></div>

</section>








<!-- Section Services Start -->
    <section class="services" id="services">
      <div class="container">

        <div class="main-txt">
          <h1><span>S</span>ervices</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fa-solid fa-hand-holding-dollar"></i>
              <div class="card-body">
                <h3>Selling Watch</h3>
                <p>We sell the most famouse watchs in the world in cheap Price.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fa-solid fa-screwdriver-wrench"></i>
              <div class="card-body">
                <h3>Watch Repair</h3>
                <p> Professional servicing to keep your timepiece running smoothly.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fa-brands fa-intercom"></i>
              <div class="card-body">
                <h3>Watch Customization</h3>
                <p>Personalize your watch with unique dials, straps, and engravings.</p>
              </div>
            </div>

          </div>



        </div>


        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fa-solid fa-person-chalkboard"></i>
              <div class="card-body">
                <h3>Watch Appraisals</h3>
                <p>Accurate valuations and appraisal services for your timepieces.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fa-solid fa-broom"></i>
              <div class="card-body">
                <h3>Watch Cleaning</h3>
                <p>Restore the shine and luster of your watches with professional cleaning.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fa-solid fa-repeat"></i>
              <div class="card-body">
                <h3>Strap Replacement: </h3>
                <p>Wide selection of high-quality straps to refresh the look of your watch.</p>
              </div>
            </div>

          </div>
 </div>

      </div>
    </section>
    <!-- Section Services End -->








    <!-- Section Our Store Start -->
    <section class="gallary" id="gallary">
      <div class="container">

        <div class="main-txt">
          <h1><span>O</span>ur <span>S</span>tores</h1>
        </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/England.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/Ausi.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/japan.jpg" alt="" height="230px">
            </div>
          </div>
        </div>


        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/uk.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/usa.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./images/canada.jpg" alt="" height="230px">
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Section Store End -->




    <!--Review Section-->
    <br><br><br>

    <section class="customer" id="customers">
      <div class="main-txt">
        <h1><span>O</span>ur <span>B</span>est <span>C</span>ustomers</h1>
      </div>
  <div class="custo" id="custo">


        <div class="col-md-4" style="width: 17rem;">
        <img src="10.jpg" class="card-img-top" alt="Customer 1">
            <div class="card-body">
              <h5 class="card-title">Amara Chethani</h5>
                   <p class="card-text">Amara Chethani,  a discerning customer,  recently purchased a  graphic card from our store. 
                     Her choice reflects her commitment to   enhancing her computer's performance.
                     We're thrilled to have served her and    look forward to meeting her future tech needs thanks mis for come our store. <br>
                    
                    </p>
          </div>
        </div>


        <div class="col-md-4" style="width: 17rem;">
          <img src="11.jpg" class="card-img-top" alt="Customer 1">
              <div class="card-body">
                <h5 class="card-title">Sampath Rajapaksha</h5>
                     <p class="card-text">Sampath Rajapaksha,a discerning young man,recently acquired a laptop from our store. 
                      His decision underscores a commitment to staying connected.
                       We're honored to have assisted Amara in finding the perfect laptop to meet his needs.
                      </p>
            </div>
          </div>

          <div class="col-md-4" style="width: 17rem;">
            <img src="12.jpg" class="card-img-top" alt="Customer 1">
                <div class="card-body">
                  <h5 class="card-title">Sunimala Sewwandhi</h5>
                       <p class="card-text">Sunimala Sewwandhi, a female customer, recently purchased a PC from our store.
                         Her decision reflects a commitment to technological advancement. We're pleased to have provided her with a quality computing solution,
                         ensuring her productivity and satisfaction.
                        </p>
              </div>
            </div>


            <div class="col-md-4" style="width: 17rem;">
              <img src="13.jpg" class="card-img-top" alt="Customer 1">
                  <div class="card-body">
                    <h5 class="card-title">Sanduni Nethmini</h5>
                         <p class="card-text">Sanduni Nethmini,a discerning female customer,recently invested in a gaming laptop from our store. 
                          Her choice underscores a dedication to immersive gaming experiences. 
                          We're thrilled to have provided her with a gaming solution, ensuring endless excitement.
                </div>
              </div>

              <div class="col-md-4" style="width: 17rem;">
                <img src="14.jpg" class="card-img-top" alt="Customer 1">
                    <div class="card-body">
                      <h5 class="card-title">Thilanga Ruwinath</h5>
                           <p class="card-text">Thilanga Ruwinath, a tech-savvy young man, recently purchased a gaming laptop and tablet from our store.
                             His choice reflects a passion for both gaming and versatile computing.
                             We're proud to have provided him with top-notch devices to fuel his digital adventures.
                            </p>
                  </div>
                </div>

                <div class="col-md-4" style="width: 17rem;">
                  <img src="15.jpg" class="card-img-top" alt="Customer 1">
                      <div class="card-body">
                        <h5 class="card-title">kumar senarathna</h5>
                             <p class="card-text">Kumar Senarathna, a savvy male customer, recently invested in a hard drive (HDD) and solid-state drive. 
                              His choice demonstrates a commitment to enhancing storage and performance.
                               We're pleased to have supplied him with reliable storage solutions for his computing needs.
                              </p>
                      </div>
                </div>
          </div>
  </section>



    <!-- About Start -->
    <section class="about" id="about">
      <div class="container">

        <div class="main-txt">
          <h1>About <span>Us</span></h1>
        </div>

        <div class="row" style="margin-top: 50px;">

          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="./images/about.png" alt="">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">
            <h2>How Work with You</h2>
            <p>At Horizon, we believe that time is not just a measure of moments but a gateway to endless possibilities. 
              Our journey began with a simple yet profound vision: to craft timepieces that transcend boundaries, inspire exploration,
               and accompany individuals on their unique odysseys through life. Rooted in the spirit of adventure, each Horizon watch embodies
                the essence of discovery and wanderlust. </p>
                <button id="about-btn">Read More...</button>

                <script>
                        document.getElementById('about-btn').addEventListener('click', function() {
                        window.location.href = 'ContactSection.php';
                       });
                </script>
            </div>

        </div>

      </div>
    </section>
    <!-- About End -->








    <!-- Footer Start -->
    <footer id="footer">
      <h1><span>H</span>orizon Watch</h1>
      <p>Rooted in the spirit of adventure, each Horizon watch embodies
        the essence of discovery and wanderlust..</p>
      <div class="social-links">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-pinterest-p"></i>
      </div>
      <div class="credit">
        <p>Designed By <a href="#">Team Horizon</a></p>
      </div>
      <div class="copyright">
        <p>&copy;Copyright Team Horizon. All Rights Reserved</p>
      </div>
    </footer>
    <!-- Footer End -->







    


<!-- Bootstrap JS and dependencies -->
<script src="home.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
