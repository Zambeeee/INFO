<?php
session_start();

$_SESSION = array();

session_destroy();
?> 
<p><h1>Logout eseguito con successo</h1></p>
<p>Torna alla schermata <a href="index.php">Home</a></p>