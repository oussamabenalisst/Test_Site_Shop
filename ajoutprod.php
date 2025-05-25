<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require "./connection.php";
    $name = $_POST["np"];
    $li = $_POST["link"];
    $dit = $_POST["det"];
    $px = $_POST["pnx"];
    $ty = $_POST["ty"];
    $q = "INSERT INTO `prod`( `nomP`, `imgP`, `diP`, `prix`, `type`) VALUES ('$name','$li','$dit','$px','$ty')";
    $r = mysqli_query($conn, $q);
    ;
    ?>
    <script>
        alert("ajoute  gode")
    </script>
    <?php
    mysqli_close($conn);

    ?>
</body>

</html>