<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>gestion</title>
</head>

<body>
    <?php
    require "./connection.php";
    if (isset($_POST["u"])) {
        $u = $_POST["u"];
    } else {
        $u = "";
    }
    if (isset($_POST["p"])) {
        $p = $_POST["p"];
    } else {
        $p = "";
    }
    $q = "SELECT * FROM `admin` WHERE `user`='$u' and `password`='$p'";
    $ex = mysqli_query($conn, $q);
    if (mysqli_num_rows($ex) == 0) {
        ?>
        <script>
            swal("ERROR", "user not found", "error");
        </script>
        <?php
        die(file_get_contents("./admin.html"));
    }

    ?>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./admin.html">Gestion Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./pp.php" target="fram">G-PagePrancipal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./links.php" target="fram">G-links</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./Img.php"
                            target="fram">G-ProduitImpertant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./partner.php" target="fram">G-Partner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./tyP.php" target="fram">G-TyProd</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./ajoutP.php" target="fram">G-Produit</a>
                    </li>
                </ul>
                <form name="f" method="post" action="./rdProd.php" onsubmit="return verific()" target="fram">
                    <div class="input-group">
                        <div class="form-outline" data-mdb-input-init>
                            <input id="search-input" type="search" name="sh" id="ss" class="form-control"
                                placeholder="search" />
                        </div>
                        <input type="submit" class="btn btn-danger" value=" 🔍 " />
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- end of container -->
    <iframe src="" frameborder="0" name="fram"></iframe>
    <style>
        iframe {
            background-color: #3a4649;
            width: 100%;
            height: 100vh;
        }
    </style>
    <script>
        <?php require "./js/scripts.js" ?>
    </script>
</body>

</html>