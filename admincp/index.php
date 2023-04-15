<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
    header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_admincp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>AdminCp</title>
</head>

<body>

    <div class="wrapper">
        <?php
        include("config/connect.php");
        ?>
        <div class="sidebar">
            <?php
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            // include("modules/footer.php");
            ?>
        </div>
</body>

</html>