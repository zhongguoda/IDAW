<?php
$host         = "localhost";
$username     = "root";
$password     = "";
$dbname       = "tp4";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection to database failed: " . $conn->connect_error);
}

$id  = $_POST['id'];
$sql = "DELETE FROM utilisateur WHERE `id` = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "erreur";
}
$conn->close();