<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./js/script.js"></script>
</head>

<body>
    <?php
    require "./connection.php";
    $id_p = $_GET['id'];
    $ip = $_GET['ip'];
    $q = "DELETE FROM `pan` WHERE `ip`='$ip' and `idp`=$id_p";
    $r = mysqli_query($conn, $q);
    ?>
    <script>
        alert("Done🦾 : Reload the page");
    </script>
    <?php
    mysqli_close($conn);

    ?>
</body>

</html>