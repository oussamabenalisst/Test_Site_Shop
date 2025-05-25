<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <?php
    require "./connection.php";
    $q = "SELECT * FROM `pagep` WHERE 1";
    $r = mysqli_query($conn, $q);
    $pp = mysqli_fetch_array($r);

    ?>
    <?php
    $up = $_GET["th"];
    $p = "SELECT * FROM `prod` WHERE `idP`=$up";
    $q = mysqli_query($conn, $p);
    $tn = mysqli_fetch_array($q);
    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?php echo $tn[3] ?>" />
    <meta name="author" content="OUSSAMA BENALI" />
    <meta property="og:site_name" content="<?php echo $pp[0] . "_" . $tn[1] ?>" />
    <meta property="og:title" content="<?php echo $pp[0] ?>" />
    <meta property="og:description" content="<?php echo $tn[3] ?>" />
    <meta property="og:site" content="./index.php" />
    <meta property="og:image" content="<?php echo $pp[2] ?>" />
    <meta name="keywords"
        content="oussama,oussama benali,Tunisian,benali,ben ali,benali oussama,benalioussama,oussamabenali,oppshop,OppShop,OPP,opp,SHOP,shop,produit" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="500" />
    <meta property="og:image:url" content="<?php echo $pp[2] ?>" />

    <!-- Webpage Title -->
    <title><?php echo $pp[0] ?></title>

    <!-- Styles -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="css/swiper.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Favicon  -->
    <link rel="icon" href="./images/images.jfif" />
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

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
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
                        <a href="https://www.facebook.com/oussama.benali.1656/">
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
                    <span class="fa-stack">
                        <a href="./pan.php">
                            <span class="fa-stack fa-lg"> <i class="fas fa-circle fa-stack-2x"></i> <i
                                    style="font-size:15px;" class="bi bi-truck fa-stack-1x fa-inverse"></i></span>
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
                    <h1 id="tit1"><?php echo $tn[1] ?></h1>
                </div>
            </div>

        </div>
        <!-- end of container -->
    </header>

    <img src="<?php echo $tn[2] ?>" class="rounded mx-auto d-block" alt="...">

    <div class="ex-basic-1 pt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="text-box mb-5">
                        <h3>id = <?php echo $tn[0] ?></h3>
                        <p>
                            <?php echo $tn[3] ?>
                        </p>
                        <h4><?php echo $tn[4] ?> DT</h4>
                    </div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- Basic -->
    <div class="ex-basic-1 pt-3 pb-5">
        <div class="container">
            <table class="table table-dark">
                <?php
                $p = "SELECT * FROM `prod` WHERE `type`=$up";
                $q = mysqli_query($conn, $p) or die("error");
                while ($row = mysqli_fetch_array($q)) {
                    ?>
                    <tr>
                        <td><a href="./det.php?th=<?php echo $row[0] ?>"><img src="<?php echo $row[0] ?>" alt="..."
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
                            <h2 class="pr"><?php echo $row[4] . " DT" ?></h2>
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
        <script src="js/scripts.js"></script>
        <!-- Custom scripts -->
</body>

</html>