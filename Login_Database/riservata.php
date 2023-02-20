<?php
    session_start();
    if(!isset($_SESSION['logged']) || $_SESSION['logged'] != true) {
        header("location: login.html");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riservata</title>
</head>
<body>
    <h1>Area privata</h1>
    <?php echo "Ciao" . $_SESSION["username"]; ?>
    <a href="./php/logout.php">Logout</a>
</body>
</html>