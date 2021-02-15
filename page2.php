<?php

$servername = "localhost";
$username = "cosmin";
$password = "1234";
$dbname = "prova";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connessione fallita: ".$conn->connect_error);
}

$sql = "INSERT INTO dati(name) VALUES (".$_POST["name"].")";
$conn->query($sql);
$conn->close();

echo "BENVENUTO ".$_POST["name"]."!";


?>
