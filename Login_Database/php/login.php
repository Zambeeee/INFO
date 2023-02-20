<?php
require_once('config.php');

$username = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql_select = "SELECT * FROM utente WHERE username = '$username' AND password = '$password'";
    if ($result = $connessione->query($sql_select)) {
        if ($result->num_rows == 1) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            session_start();

            $_SESSION['logged'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("location: ../riservata.php");

        } else {
            echo "Non ci sono account con quello username";
        }
    } else {
        echo "Errore in fase di login";
    }
    $connessione->close();
}

?>