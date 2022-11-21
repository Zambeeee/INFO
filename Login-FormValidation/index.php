<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta nome="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link css 'style.css' -->
  <link rel="stylesheet" href="Css/style.css" type="text/css">
  <!-- Titolo della pagina -->
  <title>Form Validation</title>
</head>
<body>
  <?php

  // variabili vuote per gli errori
  $nomeEr = $cognomeEr = $emailEr = $indirizzoEr = '';
  $cellulareEr = $usernameEr = $passwordEr = '';

  $count = 0;

  // FUNZIONI GENERALI
  // funzione check nome
  function checkNome(&$count,&$nome, &$nomeEr, &$n)
  {
    $nome = trim($n);
    $nome = stripslashes($nome);
    $nome = htmlspecialchars($nome);
    if (!preg_match("/^[a-zA-Z]{2,15}$/", $nome)) {
      $nomeEr = "Inserire un nome valido."; // salva in nomeEr la frase di input non valido / "Non valido";
    } else {
      $nomeEr = "";
      $count++;
    }
  }

  // funzione check cognome
  function checkCognome(&$count,&$cognome, &$cognomeEr, &$c)
  {
    $cognome = trim($c);
    $cognome = stripslashes($cognome);
    $cognome = htmlspecialchars($cognome);
    if (!preg_match("/^[a-zA-Z]{2,15}$/", $cognome)) {
      $cognomeEr = "Inserire un cognome valido.";
    } else {
      $cognomeEr = "";
      $count++;
    }
  }

  // funzione check email
  function checkEmail(&$count,&$email, &$emailEr, &$e)
  {
    $email = trim($e);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    // controllo dei requisiti per l'email; if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email));
    if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) {
      $emailEr = "Inserire un'email valida.";
    } else {
      $emailEr = "";
      $count++;
    }
  }

  // funzione check indirizzo
  function checkIndirizzo(&$count,&$indirizzo, &$indirizzoEr, &$i)
  {
    $indirizzo = trim($i);
    $indirizzo = stripslashes($i);
    $indirizzo = htmlspecialchars($indirizzo);
    if (!preg_match("/^[a-zA-Z0-9]{2,100}$/", $indirizzo)) {
      $indirizzoEr = "Inserire un indirizzo valido.";
    } else {
      $indirizzoEr = "";
      $count++;
    }
  }

  // funzione check cellulare
  function checkCellulare(&$count,&$cellulare, &$cellulareEr, &$cell)
  {
    $cellulare = trim($cell);
    $cellulare = stripslashes($cellulare);
    $cellulare = htmlspecialchars($cellulare);
    if (!ctype_digit($cellulare)) {
      $cellulareEr = "Inserire un numero di cellulare valido.";
    } else {
      if (preg_match('/^[0-9]{10}+$/', $cellulare)) {
        $cellulareEr = "";
        $count++;
      } else {
        $cellulareEr = "Inserire un numero di cellulare valido.";
      }
    }
  }

  // funzione check username
  function checkUsername(&$count,&$username, &$usernameEr, &$u)
  {
    $username = trim($u);
    $username = stripslashes($username);
    $username = htmlspecialchars($username);
    if (!preg_match("/^[a-zA-Z0-9._-]{2,15}$/", $username)) {
      $usernameEr = "Inserire un username valido.";
    } else {
      $usernameEr = "";
      $count++;
    }
  }

  // funzione check password
  function checkPassword(&$count,&$password, &$passwordEr, &$p)
  {
    $password = trim($p);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    if (!preg_match("/^[a-zA-Z0-9._-]{2,15}$/", $password)) {
      $passwordEr = "Inserire una password valida.";
    } else {
      $passwordEr = "";
      $count++;
    }
  }

  // controlli if
  if (isset($_POST["submit"])) {
    checkNome($count,$nome, $nomeEr, $_POST["nome"]);
    checkCognome($count,$cognome, $cognomeEr, $_POST["cognome"]);
    checkEmail($count,$email, $emailEr, $_POST["email"]);
    checkIndirizzo($count,$indirizzo, $indirizzoEr, $_POST["indirizzo"]);
    checkCellulare($count,$cellulare, $cellulareEr, $_POST["cellulare"]);
    checkUsername($count,$username, $usernameEr, $_POST["username"]);
    checkPassword($count,$password, $passwordEr, $_POST["password"]);
  }

  if($count!=7) {

  ?>
  
  <!-- Input -->
  <h1>Form Validation</h1>
  <div class="container">
    <div class="blurbg">
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <label for="nome" type="testo" class="titoletto">Nome</label><br>
        <input type="text" id="nome" name="nome" placeholder="Inserisci il nome" class="tasto">
        <span class="errore">
          <font color="red"><?php echo $nomeEr; ?></font>
        </span><br><br>

        <label for="cognome" type="testo" class="titoletto">Cognome</label><br>
        <input type="text" id="cognome" name="cognome" placeholder="Inserisci il cognome" class="tasto">
        <span class="errore">
          <font color="red"><?php echo $cognomeEr; ?></font>
        </span><br><br>

        <!-- Da finire -->
        <label for="data" type="testo" class="titoletto">Data di nascita</label><br>
        <input type="date" id="data" name="data" placeholder="Inserisci la data" class="tasto"><br><br>

        <label for="email" type="testo" class="titoletto">Email</label><br>
        <input type="text" id="email" name="email" placeholder="Inserisci l'email" class="tasto">
        <span class="errore">
          <font color="red"><?php echo $emailEr; ?></font>
        </span><br><br>

        <label for="indirizzo" type="testo" class="titoletto">Indirizzo</label><br>
        <input type="text" id="indirizzo" name="indirizzo" placeholder="Inserisci l'indirizzo" class="tasto">
        <span class="errore">
          <font color="red"><?php echo $indirizzoEr; ?></font>
        </span><br><br>

        <label for="cellulare" type="testo" class="titoletto">Cellulare</label><br>
        <input type="text" id="cellulare" name="cellulare" placeholder="Inserisci il numero di cellulare" class="tasto">
        <span class="errore">
          <font color="red"><?php echo $cellulareEr; ?></font>
        </span><br><br>

        <label for="username" type="testo" class="titoletto">Username</label><br>
        <input type="text" id="username" name="username" placeholder="Inserisci un username" class="tasto">
        <span class="errore">
          <font color="red"><?php echo $usernameEr; ?></font>
        </span><br><br>

        <label for="password" type="testo" class="titoletto">Password</label><br>
        <input type="password" id="password" name="password" placeholder="Inserisci la password" class="tasto">
        <span class="errore">
          <font color="red"><?php echo $passwordEr; ?></font>
        </span><br><br>

        <input type="submit" name="submit" value="Login">
      </form>
    </div>
  </div>

  <?php } else { ?>

  <div class="fine">
    Credenziali corrette
  </div>

  <?php } ?>
</body>
</html>