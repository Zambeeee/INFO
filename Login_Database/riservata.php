<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riservata</title>
</head>
<body>
    <?php if(!isset($_SESSION['logged']) || $_SESSION['logged'] != true) { ?>
    <p><h1>Non sei autenticato</h1></p>
    <p><h3>Per accedere devi prima autenticarti</h3></p>
    <p>Torna alla pagina di <a href="login.html">Login</a></p>
    <p>Clicca qui per <a href="register.html">Registrati</a></p>
    <?php } else { ?>
    <h1>Area privata</h1>
    <?php echo "Ciao" . $_SESSION["username"]; ?>
    <a href="./php/logout.php">Logout</a>
    <?php } ?>
</body>
</html>
