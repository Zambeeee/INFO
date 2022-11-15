<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css" type="text/css">
    <title>Document</title>
</head>

<body>
 <?php
    $username = 'Marco';
    $password = '2004';
    $usr = $_POST['username'];
    $pas = $_POST['password'];
    if (!isset($usr) || !isset($pas)) {      //isset controlla che le variabili non siano vuote, in caso siano vuote ricarica la pagina
        $voidMessage = "Campi mancanti!";
        echo "<script type='text/javascript'>alert('$voidMessage');</script>";
        header('Refresh:0; index.html');
    }
    if ($usr != $username || $pas != $password) {        //in caso le variabili siano sbagliate ricarica la pagina
        echo 'Sbagliato';
        $wrongMessage = "Username o password sbagliate!";
        echo "<script type='text/javascript'>alert('$wrongMessage');</script>";
        header('Refresh:0; url=index.html');         //header(Refresh; url=index.php) in caso fosse tutto su una pagina
    }
    if ($usr == $username && $pas == $password) {        //in caso le variabili siano corrette procede
        echo <<<ENDHTML
            <div class='container'>
                <div class='blurbg'>
                    <h1>Credenziali corrette!</h1>
                </div>
            </div>
        ENDHTML;
    }
 ?>
</body>
</html>