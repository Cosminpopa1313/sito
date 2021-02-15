<?php


$servername = "localhost";
$username = "root";
$password = "Cosmin13database";
$dbname = "prova";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connessione fallita: ".$conn->connect_error);
}

echo "connessione avvenuta con successo!\n"."1<br>2";

$sql = "select name from dati";
$result = $conn->querry($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
      echo "NOME: " . $row["name"]."<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();





echo "<html>";







echo "</html>";


?>