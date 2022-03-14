<?php
$title = "testConnexion";
require_once('template_header.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT id, pseudo, login, password FROM Utilisateur";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    echo '<table><tr><th>ID</th><th>Pseudo</th><th>Login</th><th>Password</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo '</tr><td>';
        echo $row["id"];
        echo '</td>';
        echo '<td>';
        echo $row["pseudo"];
        echo '</td>';
        echo '<td>';
        echo $row["login"];
        echo '</td>';
        echo '<td>';
        echo $row["password"];
        echo '</td></tr>';
    }
    echo '</table>';
  } else {
    echo "0 results";
  }
  $conn->close();
  require_once('template_footer.php');
?>