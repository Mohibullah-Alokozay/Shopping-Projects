<?php
session_start();
if(!isset($_SESSION['firstname'])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Home Parts</title>
</head>
<body>
    <?php
        include_once "header.php";
        include_once "section.php";
        include_once "footer.php";
    ?>
</body>
</html>