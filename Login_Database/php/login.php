<?php
/*L'espressione require_once è identica a require tranne che PHP verificherà se il file è già stato incluso
e, in tal caso, non lo includerà (richiede) di nuovo.*/
require_once('config.php');

/*real_escape_string:
esegue l'escape dei caratteri speciali in una stringa da utilizzare in una query SQL, 
tenendo conto del set di caratteri corrente della connessione. 
Le sequenze escape sono simboli utilizzati nel codice ASCII per far eseguire una particolare funzione al computer.*/
$username = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql_select = "SELECT * FROM utente WHERE username = '$username' AND password = '$password'";
    if ($result = $connessione->query($sql_select)) {
        if ($result->num_rows == 1) {
            /*Recupera la riga successiva di un set di risultati come associativo, array numerico o entrambi*/
            $row = $result->fetch_array(MYSQLI_ASSOC);
            session_start();

            $_SESSION['logged'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            //header("location: ../riservata.php");

        } else {
            echo "Non ci sono account con quello username";
        }
    } else {
        echo "Errore in fase di login";
    }
    $connessione->close();
}

?>