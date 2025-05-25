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
    $ti = $_POST["titer"];
    $name = $_POST["n"];
    $li = $_POST["link"];
    $q = "INSERT INTO `links`(`titre`, `link`, `name`) VALUES ('$ti','$li','$name')";
    $r = mysqli_query($conn, $q);
    ;
    ?>
    <script>
        alert(" ajoute  gode")
    </script>
    <?php
    mysqli_close($conn);

    ?>
</body>

</html>