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
    $name = $_POST["n"];
    $li = $_POST["link"];
    $q = "INSERT INTO `part`(`linkimg`, `nom`) VALUES ('$li','$name')";
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