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
    $id = $_GET["id"];
    $ip = $_GET["ip"];
    $q = "SELECT * FROM `pan` WHERE `ip`='$ip' and `idp` =$id ";
    $r = mysqli_query($conn, $q);
    if (mysqli_affected_rows($conn) == 0) {
        $q = "INSERT INTO `pan`(`ip`, `idp`) VALUES ('$ip',$id)";
        $r = mysqli_query($conn, $q);
    }
    ;
    ?>
    <script>
        alert("Done🦾 ")
    </script>
    <?php
    mysqli_close($conn);

    ?>
</body>

</html>