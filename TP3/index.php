<?php
if (isset($_GET['css'])){
    echo '<link rel="stylesheet" href="';
    echo $_GET['css'];
    echo '.css" type="text/css"';
    echo 'media="screen" charset="utf-8" />';
} else if (isset($_COOKIE['style'])){
    echo '<link rel="stylesheet" href="';
    echo $_COOKIE['style'];
    echo '.css" type="text/css"';
    echo 'media="screen" charset="utf-8" />';
} else {
    echo '<link rel="stylesheet" href="style1.css" type="text/css" media="screen" charset="utf-8" />';
}
?>
<form id="style_form" action="index.php" method="GET">
<select name="css">
<?php
if (isset($_GET['css']) && $_GET['css'] == "style2"){
    echo '<option value="style2">style2</option><option value="style1">style1</option>';
} else if (isset($_GET['css']) && $_GET['css'] == "style1"){
    echo '<option value="style1">style1</option><option value="style2">style2</option>';
} else if (isset($_COOKIE['style']) && $_COOKIE['style'] == "style2"){
    echo '<option value="style2">style2</option><option value="style1">style1</option>';
} else {
    echo '<option value="style1">style1</option><option value="style2">style2</option>';
}
?>
</select>
<input type="submit" value="Appliquer" />
</form>
<?php
if(isset($_GET['css']) && ($_GET['css'] == "style1" || $_GET['css'] == "style2")){
    $value = $_GET['css'];
}else{
    $value = 'style1';
}
setcookie("style", $value);
?>