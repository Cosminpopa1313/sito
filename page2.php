<?php

$servername = "localhost";
$username = "cosmin";
$password = "1234";
$dbname = "prova";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connessione fallita: ".$conn->connect_error);
}

$nome = $_POST["name"];

$sql = "INSERT INTO dati(name) VALUES ('".$nome."')";
if($conn->query($sql) ===  TRUE){
    echo "BENVENUTO ".$nome."!";
}
else{
    echo "ERROREEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE";
}
$conn->close();



?>
