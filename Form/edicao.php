<?php
$alter = $_POST["alter"];
$nome = $_POST["nome"];
$nascimento = $_POST["data"];
$renda = $_POST["renda"];
$servername = "localhost";
$username = "root";
$dbname = "aula2109";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else{
    echo "Ok!";
}
 
$sql = "UPDATE usuario SET nome='$nome', nascimento='$nascimento', renda=$renda WHERE nome='$alter'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}



$sql = "SELECT nome, renda, nascimento FROM usuario";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "nome: " . $row["nome"]. " - renda: " . $row["renda"]. " " . $row["nascimento"]. "<a href='recebeinfo.php'> deletar</a>". "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);