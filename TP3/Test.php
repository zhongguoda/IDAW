<?php
$title = "Test";
require_once('template_header.php');

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$login = "anonymous";
$errorText = "";
$successfullyLogged = false;
if (isset($_SESSION["login"])  && isset($_SESSION["password"])){
    $tryLogin=$_SESSION["login"];
    $tryPwd=$_SESSION["password"];

    $sql = "SELECT login FROM Utilisateur WHERE login='$tryLogin' AND password='$tryPwd'";
    $result = $conn->query($sql);

    if($result->num_rows >0){
        $successfullyLogged = true;
        $login = $tryLogin;
    }else{
        $errorText = "Erreur de login/password";
    }

} else if (isset($_POST['login']) && isset($_POST['password'])){
    $tryLogin=$_POST['login'];
    $tryPwd=$_POST['password'];
    // si login existe et password correspond
    $sql = "SELECT login FROM Utilisateur WHERE login='$tryLogin' AND password='$tryPwd'";
    $result = $conn->query($sql);

    if($result->num_rows >0){
        $successfullyLogged = true;
        $login = $tryLogin;
    }else{
        $errorText = "Erreur de login/password";
    }
    } else
        $errorText = "Merci d'utiliser le formulaire de login";
if(!$successfullyLogged) {
echo $errorText;
} else {
$sql = "SELECT pseudo FROM Utilisateur WHERE login='$tryLogin' AND password='$tryPwd'";
$result = $conn->query($sql);
echo "<h1>Bonjour ".$result->fetch_assoc()["pseudo"]."</h1>";
echo '<form id="login_form" action="login.php" method="POST"><table><td><input type="submit" value="Se déconnecter..." /></td></table></form>';
echo '<a href="connected.php">Menu</a>';
}

$conn->close();
require_once('template_footer.php');
?>