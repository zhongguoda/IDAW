<?php
$title = "Login";
session_start();
session_unset();
session_destroy();
require_once('template_header.php');
?>
<form id="login_form" action="connected.php" method="POST">
<table>
<tr>
<th>Login :</th>
<td><input type="text" name="login"></td>
</tr>
<tr>
<th>Mot de passe :</th>
<td><input type="password" name="password"></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="Se connecter..." /></td>
</tr>
<tr>
<th></th>
<td><a href="inscription.php">Inscription</a></td>
</tr>
</table>

<?php
require_once('template_footer.php');
?>