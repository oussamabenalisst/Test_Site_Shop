<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <?php
  require "./connection.php";
  $loc = require("./selectIP.php");
  $ty = $_GET["th"];
  $q = "SELECT * FROM `pagep` WHERE 1";
  $r = mysqli_query($conn, $q);
  $pp = mysqli_fetch_array($r);
  ?>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="author" content="oussama benali" />
  <meta property="og:site_name" content="<?php echo $pp[0] ?>" />
  <meta property="og:site" content="./index.php" />
  <meta property="og:image" content="" />

  <!-- Webpage Title -->
  <title><?php echo $pp[0] ?></title>

  <!-- Styles -->
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap"
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
      <a class="navbar-brand logo-image" href="./index.php">
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
        </ul>
        <span class="nav-item social-icons">
          <span class="fa-stack">
            <a href="https://www.facebook.com/profile.php?id=100077578128844">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="http://oussamabenalitn.great-site.net/oussama%20%20benali.html"">
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
  <header class="ex-header bg-dark-blue">
    <div class="container">
      <div class="row">
        <div class="col-xl-10 offset-xl-1">
          <?php
          $p = "SELECT `nameP` FROM `typep` WHERE `idP`=$ty";
          $q = mysqli_query($conn, $p);
          $tn = mysqli_fetch_array($q);
          ?>
          <h1 id="tit1"><?php echo $tn[0] ?></h1>

        </div>

      </div>

    </div>
    <!-- end of container -->
  </header>
  <!-- end of ex-header -->
  <!-- end of header -->

  <!-- Basic -->
  <div class="ex-basic-1 pt-5 pb-5">
    <div class="container">
    </div>
  </div>
  <!-- Basic -->
  <div class="ex-basic-1 pt-3 pb-5">
    <div class="container">
      <table class="table table-dark">
        <tr>
          <td colspan="3">
            <form name="f" method="post" action="./detS.php" onsubmit="return verific()">
              <div class="input-group">
                <div class="form-outline" data-mdb-input-init>
                  <input id="search-input" type="search" name="sh" id="ss" class="form-control" placeholder="search" />
                </div>
                <input type="submit" class="btn btn-danger" style="background-color: #ff5262" value=" 🔍 " />
              </div>
            </form>
          </td>
        </tr>
        <?php
        $p = "SELECT * FROM `prod` WHERE `type`=$ty";
        $q = mysqli_query($conn, $p) or die("error");
        while ($row = mysqli_fetch_array($q)) {
          ?>
          <tr>
            <td><a href="./det.php?th=<?php echo $row[0] ?>"><img src="<?php echo $row[2] ?>" alt="..."
                  class="img-thumbnail"></a></td>
            <td>
              <a href="./det.php?th=<?php echo $row[0] ?>">
                <h3><?php echo $row[1] ?></h3>
              </a>
              <br>
              <a href="./det.php?th=<?php echo $row[0] ?>">
                <p><?php echo $row[3] ?></p>
              </a>
            </td>
            <td>
              <p><?php echo $row[4] . " DT" ?></p>
              <p>

                <a href="./addPAN.php?id=<?php echo $row[0] ?>&ip=<?php echo $loc_o->query ?>"
                  class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                  target="err"><i class="bi bi-bag-plus"></i> Add </a>
              </p>
            </td>

          </tr>
          <?php
        }
        ?>
      </table>
    </div>
    <!-- end of col -->
  </div>
  <!-- end of row -->
  <!-- end of container -->
  <!-- end of ex-basic-1 -->
  <!-- end of basic -->
  <iframe src="" frameborder="0" name="err" hidden></iframe>
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


    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="js/replaceme.min.js"></script>
    <!-- ReplaceMe for rotating text -->
    <script>
      <?php require "./js/scripts.js" ?>
    </script>

    <!-- alert scripts -->



</body>
<style>

</style>

</html>