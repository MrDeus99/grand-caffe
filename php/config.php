<?php

// file conessione db 'config'
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "prova_form";

// Connessione al database
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica la connessione
if ($conn->connect_error) {
  die("Connessione fallita: " . $conn->connect_error);
}

?>
