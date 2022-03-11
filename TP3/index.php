<?php
if(isset($_GET['css']) && ($_GET['css'] == "style1" || $_GET['css'] == "style2")){
    $value = $_GET['css'];
}else{
    $value = 'style1';
}
setcookie("style", $value);
?>

<form id="style_form" action="index.php" method="GET">
<select name="css">
<option value="style1">style1</option>
<option value="style2">style2</option>
</select>
<input type="submit" value="Appliquer" />
</form>