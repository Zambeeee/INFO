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
        $usr='Marco';
        $pas='2004';
        if(isset($_POST['username']) && isset($_POST['password'])) {
            if($_POST['username'] == $usr && $_POST['password'] == $pas) {
                echo<<<ENDHTML
                    <div class="container">
                        <div class="blurbg">
                            <h1>Credenziali corrette!</h1>
                        </div>
                    </div>
                ENDHTML;
            } else {
                echo<<<ENDHTML
                <div class="container">
                    <div class="blurbg">
                    <form method="POST" action="index.php">
                        <label for="username" type="testo" class="titoletto">Username</label><br>
                        <input type="text" id="username" name="username" placeholder="Inserisci username" class="tasto"><br><br>
                        <label for="password" type="testo" class="titoletto">Password</label><br>
                        <input type="password" id="password" name="password" placeholder="Inserisci password" class="tasto"><br><br>
                        <input type="submit" value="Login" class="tastoInvio">
                     </form>
                    </div>
                </div>
                ENDHTML;
            }
        } else {
            echo<<<ENDHTML
            <div class="container">
                <div class="blurbg">
                 <form method="POST" action="index.php">
                    <label for="username" type="testo" class="titoletto">Username</label><br>
                    <input type="text" id="username" name="username" placeholder="Inserisci username" class="tasto"><br><br>
                    <label for="password" type="testo" class="titoletto">Password</label><br>
                    <input type="password" id="password" name="password" placeholder="Inserisci password" class="tasto"><br><br>
                    <input type="submit" value="Login" class="tastoInvio">
                 </form>
                </div>
            </div>
            ENDHTML;
        }
    ?>
</body>
</html>