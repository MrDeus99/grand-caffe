<?php

require_once ('php/config.php');
  
//differenza real_escape_string & prepared statments??


// $sql = $dbh->prepare("INSERT INTO format ( nome, email, telefono, messaggio, password) 
//    VALUES (
//    :nome, 
//    :email,
//    :telefono,
//    :messaggio, 
//    :password
//    )");
//$sql->bindParam(':nome', $nome);
//$sql->bindParam(':email', $email);
//$sql->bindParam(':telefono', $telefono);
//$sql->bindParam(':messaggio', $messaggio);
//$sql->bindParam(':password', $password);
//$conn = $sql->execute(); 





$nome =$conn->real_escape_string($_POST['nome']);
$email =$conn->real_escape_string($_POST['email']);
$telefono =$conn->real_escape_string($_POST['telefono']);      
$messaggio =$conn->real_escape_string($_POST['messaggio']);
$password =$conn->real_escape_string($_POST['password']);


$hashed_password = hash('sha256', $password);


$sql = " INSERT INTO format ( nome, email, telefono, messaggio, password) VALUES ('$nome','$email','$telefono','$messaggio','$hashed_password')";





if ($conn->query($sql) === TRUE) {
  echo "Account creato con sucesso";
} else {
  echo "Errore durante l'inserimento dei dati: " . $conn->error;
}

$conn->close();

?>




