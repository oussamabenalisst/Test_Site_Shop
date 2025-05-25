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
$q = "SELECT * FROM `pagep` WHERE 1";
$r = mysqli_query($conn, $q);
$t = mysqli_fetch_array($r);
?>

<body>
    <div class="ex-basic-1 pt-3 pb-5">
        <div class="container">
            <form method="post" action="./modifP.php" target="arr">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">titre</label>
                    <input type="text" name="titer" class="form-control" id="exampleFormControlInput1"
                        value="<?php echo $t[0] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">bio</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="bio"
                        rows="3"><?php echo $t[1] ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">IMPORTANT</label>
                    <textarea name="i1" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"><?php echo $t[2] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">IMPORTANT2</label>
                    <textarea name="i2" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"><?php echo $t[4] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">About Website</label>
                    <textarea name="AW" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $t[5];
                    mysqli_close($conn) ?></textarea>
                </div>
                <div class="mb-2">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <input type="submit" class="btn btn-success" value="modifier">
                        <input type="reset" class="btn btn-danger" value="reset">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <iframe src="" frameborder="0" name="arr"></iframe>
</body>

</html>