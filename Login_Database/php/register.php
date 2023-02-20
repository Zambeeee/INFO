<?php
require_once('config.php');

$email = $connessione->real_escape_string($_POST['email']);
$username = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);

$sql = "INSERT INTO utente (email, username, password) VALUES ('$email', '$username', '$password')";
if ($connessione->query($sql) == true) {
    echo "Registrazione effettuata con successo";
} else {
    echo "Errore durante la registrazione utente $sql" . $connessione->$error;
}
?>