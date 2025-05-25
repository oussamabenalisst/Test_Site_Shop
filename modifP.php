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
    $bio = $_POST["bio"];
    $ii = $_POST["i1"];
    $iii = $_POST["i2"];
    $aw = $_POST["AW"];
    $q = "UPDATE `pagep` SET `titre`='$ti',`bio`='$bio',`IMPORTANT1`='$ii',`IMPORTANT2`='$iii',`AW`='$aw'";
    $ex = mysqli_query($conn, $q) or die("ma ta3mlch frgul winti tktb");
    if ($ex) {
        ?>
        <script>
            alert("gooooooode")
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("not gooooooode")
        </script>
        <?php

    }
    mysqli_close($conn)
        ?>
</body>

</html>