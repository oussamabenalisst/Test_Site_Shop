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
    $q = "INSERT INTO `typep`(`nameP`) VALUES ('$name')";
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