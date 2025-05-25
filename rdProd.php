<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <?php
    require "./connection.php";
    $up = $_POST["sh"];
    if (strlen($up) > 4) {
        $ff = "SELECT * FROM `prod` WHERE `nomP`='$up'";
        $exf = mysqli_query($conn, $ff);
        if (mysqli_affected_rows($conn) == 0) {
            ?>
            <script>
                alert("<?php echo $up ?> not found")
            </script>
            <?php
            die("");
        }
        $tt = mysqli_fetch_array($exf);
        $up = $tt[0];
    }
    $p = "SELECT * FROM `prod` WHERE `idP`=$up";
    $q = mysqli_query($conn, $p);
    if (mysqli_affected_rows($conn) == 0) {
        ?>
        <script>
            alert("<?php echo $up ?> not found")
        </script>
        <?php
        die("");
    }
    $t = mysqli_fetch_array($q);
    ?>
    <style>
        table {
            text-align: center;
            border-radius: 15px;
        }

        h1 {
            text-align: center;
        }

        body {
            background-color: #3a4649;
        }
    </style>
    <br>
    <h1> Prod [<?php echo $t[1] . "-" . $t[0] ?>]</h1>
    <br>
    <div class="ex-basic-1 pt-3 pb-5">
        <div class="container">
            <table class="table table-hover">
                <tr>
                    <td>id Prod</td>
                    <td><?php echo $t[0] ?></td>
                </tr>
                <tr>
                    <td>name Prod</td>
                    <td><?php echo $t[1] ?></td>
                </tr>
                <tr>
                    <td>prix</td>
                    <td><?php echo $t[4] ?></td>
                </tr>
                <tr>
                    <td colspan="2"><?php echo "<a href='./supgp.php?th=" . $t[0] . "' target='arr'>supp</a> " ?></td>
                </tr>
            </table>
        </div>
    </div>
    <iframe src="" frameborder="0" name="arr" hidden></iframe>

</body>

</html>