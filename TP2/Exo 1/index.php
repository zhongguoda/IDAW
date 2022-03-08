<?php
date_default_timezone_set('Europe/Paris');
$localisations = Array('Asia/Tokyo', 'Asia/Hong_Kong', 'Australia/Sydney');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="index.css">
<title>Accueil</title>
<p>Aujourd'hui nous sommes le <?php echo date("d/m/Y"); ?> et il est <?php echo date("H:i:s"); ?>.<br>
<?php
foreach ($localisations as &$value) {
    date_default_timezone_set($value);
    print "Dans la Timezone ";
    print $value;
    print " la date est ";
    print date("d/m/Y");
    print " et il est ";
    print date("H:i:s");
    print "<br>";
}; ?>
</p>
</body>
</html>
