<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $loc_o = require("./selectIP.php");
  $q = "SELECT * FROM `vu` WHERE `ip`='$loc_o->query'";
  $r = mysqli_query($conn, $q);
  $date = date("Y-m-d");
  if (mysqli_affected_rows($conn) == 0) {
    $ch = $loc_o->regionName . " - " . $loc_o->city;
    $pos = $loc_o->lat . "," . $loc_o->lon;
    $q = "INSERT INTO `vu`(`ip`, `vile`, `position`, `typeNT`,`NVu`,`datevu`) VALUES ('$loc_o->query','$ch','$pos','$loc_o->isp',1,'$date')";
    $r = mysqli_query($conn, $q);
  } else {
    $q = "SELECT  `NVu` FROM `vu` WHERE `ip`='$loc_o->query'";
    $r = mysqli_query($conn, $q);
    $num = mysqli_fetch_array($r);
    $nv = $num[0] + 1;
    $q = "UPDATE `vu` SET `NVu`=$nv  WHERE `ip`='$loc_o->query'";
    $r = mysqli_query($conn, $q);
  }
  $q = "SELECT * FROM `pagep` WHERE 1";
  $r = mysqli_query($conn, $q);
  $pp = mysqli_fetch_array($r);
  ?>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description"
    content="A web page mo5tasa bi mabi3at wo tnajem tkalemna n7otolk ay produit t7b 3alih mahma kon inti charika 3abd 3adi mayhmch " />
  <meta name="author" content="OUSSAMA BENALI" />
  <meta property="og:site_name" content="<?php echo $pp[0] ?>" />
  <meta property="og:title" content="<?php echo $pp[0] ?>" />
  <meta property="og:description"
    content="A web page mo5tasa bi mabi3at wo tnajem tkalemna n7otolk ay produit t7b 3alih mahma kon inti charika 3abd 3adi mayhmch " />
  <meta property="og:site" content="./index.php" />
  <meta property="og:image" content="./image/1.png" />
  <meta name="keywords" content="Tunisian,oppshop,OppShop,OPP,opp,SHOP,shop,produit" />
  <meta property="og:image:width" content="500" />
  <meta property="og:image:height" content="500" />
  <meta property="og:image:url" content="./image/1.png" />

  <!-- Webpage Title -->
  <title><?php echo $pp[0] ?></title>

  <!-- Styles -->
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/fontawesome-all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="css/swiper.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />

  <!-- Favicon  -->
  <link rel="icon" href="./image/2.jpg" />
</head>

<body>
  <!-- Navigation -->
  <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
    <div class="container">
      <!-- Image Logo -->
      <a class="navbar-brand logo-image" href="index.php">
        <h5><?php echo $pp[0] ?></h5>
      </a>

      <!-- Text Logo - Use this if you don't have a graphic logo -->
      <!-- <a class="navbar-brand logo-text" href="index.html">Leno</a> -->

      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ms-auto navbar-nav-scroll">
          <?php
          $p = "SELECT * FROM `typep` WHERE 1";
          $q = mysqli_query($conn, $p);
          while ($row = mysqli_fetch_array($q)) {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="./prod.php?th=<?php echo $row[0] ?>"><?php echo $row[1] ?></a>
            </li>
            <?php
          }
          ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
              aria-expanded="false">mods-wid</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li>
                <a class="dropdown-item" href="./tel_graph.html">Graphics games</a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="./tel_wep.html">skins Weapons</a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="./tel_map.html">Furniture and map</a>
              </li>
            </ul>
          </li>
        </ul>
        <span class="nav-item social-icons">
          <span class="fa-stack">
            <a href="https://www.facebook.com/profile.php?id=100077578128844">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="http://oussamabenalitn.great-site.net/oussama%20%20benali.html">
              <i class=" fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-google fa-stack-1x"></i>
            </a>
          </span>
          <!-- pan pan pan pan pan pan -->
          <span class="fa-stack">
            <a href="./pan.php">
              <span class="fa-stack fa-lg"> <i class="fas fa-circle fa-stack-2x"></i> <i style="font-size:15px;"
                  class="bi bi-truck fa-stack-1x fa-inverse"></i></span>
            </a>
          </span>
        </span>
      </div>
      <!-- end of navbar-collapse -->
    </div>
    <!-- end of container -->
  </nav>
  <!-- end of navbar -->
  <!-- end of navigation -->

  <!-- Header -->
  <header id="header" class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="text-container">
            <h1 id="t1" class="h1-large">
              PRIVATE STORE <br />FOR
              <span id="tt1" class="replace-me">Clothes,Bags,Accessories,Advertising
              </span>
            </h1>
            <p id="p-large" class="p-large"><?php echo $pp[1] ?>
            </p>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
        <div class="col-lg-6">
          <img id="imgR" class="img-fluid" src="./image/2.jpg" alt="" />
          <style>
            #imgR {
              border-radius: 250px;
            }
          </style>
        </div>

        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </header>
  <!-- end of header -->
  <!-- end of header -->

  <!-- Testimonials -->
  <div class="slider-1 bg-dark-blue">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Card Slider -->
          <div class="slider-container">
            <div class="swiper-container card-slider">
              <div class="swiper-wrapper">
                <?php
                $q = "SELECT * FROM `part` WHERE 1";
                $r = mysqli_query($conn, $q);
                while ($row = mysqli_fetch_array($r)) {
                  ?>
                  <!-- Slide -->
                  <div class="swiper-slide">
                    <div class="card">
                      <img class="card-image" src="<?php echo $row[0] ?>" alt="alternative" />
                      <div class="card-body">
                        <p class="testimonial-author"><?php echo $row[1] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card">
                      <img class="card-image" src="<?php echo $row[0] ?>" alt="alternative" />
                      <div class="card-body">
                        <p class="testimonial-author"><?php echo $row[1] ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="card">
                      <img class="card-image" src="<?php echo $row[0] ?>" alt="alternative" />
                      <div class="card-body">
                        <p class="testimonial-author"><?php echo $row[1] ?></p>
                      </div>
                    </div>
                  </div>
                  <?php
                }
                ?>
                <!-- end of slide -->
              </div>
              <!-- end of swiper-wrapper -->

              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <!-- end of add arrows -->
            </div>
            <!-- end of swiper-container -->
          </div>
          <!-- end of slider-container -->
          <!-- end of card slider -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <div class="basic-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 id="h2-heading" class="h2-heading">IMPORTANT</h2>
          <div id="t3" class="p-heading">
            <?php echo $pp[2] ?>
          </div>
        </div>
        <!-- end of col -->
      </div>
    </div>
  </div>

  <!-- Statistics -->
  <div class="counter bg-dark-blue">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Counter -->
          <?php
          $q = "SELECT SUM(`NVu`) FROM `vu` WHERE 1";
          $r = mysqli_query($conn, $q);
          $row = mysqli_fetch_array($r)
            ?>
          <div class="counter-container">
            <div class="counter-cell">
              <i class="fas fa-users"></i>
              <div data-purecounter-start="0" data-purecounter-end="<?php echo $row[0] ?>" data-purecounter-duration="3"
                class="purecounter">
              </div>
              <div class="counter-info">Visitors</div>
            </div>
            <!-- end of counter-cell -->
          </div>
          <!-- end of counter-container -->
          <!-- end of counter -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of counter -->
  <!-- end of statistics -->

  <!-- Screenshots -->
  <div class="slider-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 id="t4" class="h2-heading">PHOTOS</h2>
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
      <div class="row">
        <div class="col-lg-12">
          <!-- Image Slider -->
          <div class="slider-container">
            <div class="swiper-container image-slider">
              <div class="swiper-wrapper">
                <!-- Slide -->
                <?php
                $q = "SELECT * FROM `imgpg` WHERE 1";
                $r = mysqli_query($conn, $q);
                while ($row = mysqli_fetch_array($r)) {
                  ?>
                  <div class="swiper-slide">
                    <a href="./det.php?th=<?php echo $row[2] ?>"><img id="i1" class="img-fluid"
                        src="<?php echo $row[1] ?>" alt="alternative" /></a>
                  </div>
                  <?php
                }
                ?>
                <!-- Add Arrows -->
                <!-- end of add arrows -->
              </div>
              <br>
              <!-- end of swiper-container -->
            </div>
            <!-- end of slider-container -->
            <!-- end of image slider -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of slider-2 -->
    <!-- end of screenshots -->

    <!-- Download -->
    <div class="basic-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="text-container">
              <h4 id="t6">
                <?php echo $pp[4] ?>
              </h4>
            </div>
            <!-- end of text-container -->
          </div>
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>
    <!-- end of basic-4 -->
    <!-- end of download -->

    <!-- Footer -->
    <div class="footer bg-dark-blue">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer-col first">
              <h6>About Website</h6>
              <p class="p-small">
                <?php echo $pp[5] ?>
              </p>
            </div>
            <!-- end of footer-col -->
            <div class="footer-col second">
              <h6>Links</h6>

              <ul class="list-unstyled li-space-lg p-small">
                <?php
                $q = "SELECT * FROM `links` WHERE 1";
                $r = mysqli_query($conn, $q);
                while ($row = mysqli_fetch_array($r)) {
                  ?>
                  <li>
                    <?php echo $row[1] ?>: <a href="<?php echo $row[2] ?>"><?php echo $row[3] ?></a>
                  </li>
                  <?php
                }
                mysqli_close($conn);
                ?>
                <li>
              </ul>
            </div>
            <!-- end of footer-col -->
            <div class="footer-col third">
              <span class="fa-stack">
                <a href="https://www.facebook.com/profile.php?id=100077578128844">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
              </span>
              <span class="fa-stack">
                <a href="http://oussamabenalitn.great-site.net/oussama%20%20benali.html">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-google fa-stack-1x"></i>
                </a>
              </span>
              <span class="fa-stack">
                <a href="https://www.instagram.com/opp_shop_a2z?igsh=MWZwMnhreW1rMWoybg==">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x"></i>
                </a>
              </span>
            </div>
            <!-- end of footer-col -->
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- end of container -->
    </div>

    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="js/replaceme.min.js"></script>
    <!-- ReplaceMe for rotating text -->
    <script src="js/scripts.js"></script>
    <!-- Custom scripts -->
</body>

</html>