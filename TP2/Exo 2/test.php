<?php
require_once("template_header.php");
require_once("template_menu.php");
$currentPageId = 'accueil';
if(isset($_GET['page'])) {
$currentPageId = $_GET['page'];
}
?>
<header class="bandeau_haut">
<h1 class="titre">Hector Durand</h1>
</header>
<?php
renderMenuToHTML($currentPageId);
?>
<section class="corps">
<?php
$pageToInclude = $currentPageId . ".php";
if(is_readable($pageToInclude))
require_once($pageToInclude);
else
require_once("template_footer.php");
?>
</section>
<?php
require_once("template_footer.php");
?>
