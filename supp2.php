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
    $id = $_GET['th'];
    $q = "DELETE FROM `imgpg` WHERE `id`=$id";
    $r = mysqli_query($conn, $q);
    ?>
    <script>
        alert(" supp gode")
    </script>
    <?php
    mysqli_close($conn);

    ?>
</body>

</html>