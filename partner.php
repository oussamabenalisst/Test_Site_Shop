<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
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
    </head>
    <style>
        body {
            background-color: #3a4649;
        }

        label {
            color: #fff;
        }
    </style>
    <?php
    require "./connection.php";
    ?>

    <body>
        <div class="ex-basic-1 pt-3 pb-5">
            <div class="container">
                <form method="post" action="./ajouP.php" target="arr">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">name-dis</label>
                        <input type="text" name="n" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">link</label>
                        <input type="text" name="link" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-2">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <input type="submit" class="btn btn-success" value="add">
                            <input type="reset" class="btn btn-danger" value="reset">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="ex-basic-1 pt-3 pb-5">
            <div class="container">
                <table class="table table-hover">
                    <tr>
                        <td>name-dis</td>
                        <td>Action</td>

                    </tr>
                    <?php
                    $q = "SELECT  `nom`, `id` FROM `part` WHERE 1";
                    $r = mysqli_query($conn, $q);
                    while ($row = mysqli_fetch_array($r)) {
                        ?>
                        <tr>
                            <td><?php echo $row[0] ?></td>
                            <td><?php echo "<a href='./suppp.php?th=" . $row[1] . "' target='arr'>supp</a> " ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        <iframe src="" frameborder="0" name="arr"></iframe>
    </body>

    </html>
</body>

</html>