<?php


$servername = "localhost";
$username = "cosmin";
$password = "1234";
$dbname = "prova";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connessione fallita: ".$conn->connect_error);
}

echo "connessione avvenuta con successo!"."<br>";

$sql = "select name from dati";

$result = $conn->query($sql);

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