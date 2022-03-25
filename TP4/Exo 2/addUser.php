<?php
$host         = "localhost";
$username     = "root";
$password     = "";
$dbname       = "tp4";

$table = "utilisateur";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection to database failed: " . $conn->connect_error);
}

if ($_POST['like'] == 'true') {
    $like = 1;
} else {
    $like = 0;
}

$Last_id = $conn->query("SELECT id FROM utilisateur ORDER BY id DESC LIMIT 1")->fetch_assoc()['id'];
$Next_id = $Last_id + 1;
$list = Array(
    'prenom'  => $_POST['prenom'],
    'date'  => $_POST['date'],
    'remarque' => $_POST['rem']
);
$nom = $_POST['nom'];
$sql = "INSERT INTO utilisateur (`id`, `nom`, `aime`) VALUES ('$Next_id', '$nom', '$like')";
if (strlen($nom) > 0 && $conn->query($sql) === TRUE) {
    foreach ($list as $key => $value) {
        if ($value == ""){
            $conn->query("UPDATE `utilisateur` SET `{$key}` = NULL WHERE `utilisateur`.`id` = $Next_id");
        } else {
            $conn->query("UPDATE `utilisateur` SET `{$key}` = '{$value}' WHERE `utilisateur`.`id` = $Next_id");
        }
    }
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();