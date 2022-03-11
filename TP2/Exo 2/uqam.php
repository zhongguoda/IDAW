<?php
$title = "UQAM";
$img_src = "Logo_UQAM.png";
$url = "https://uqam.ca/";

require_once('template_header.php');
require_once('template_menu.php');
?>
<script>
    <?php require_once("Script.js");?>
</script>

<h1>
  Mon semestre académique à l'Université du Québec à Montréal
</h1>

<div>
  <h3>
    Cours suivis :
  </h3>
  <li class="COURS">Circuits intégrés programmables (MIC6130)</li><br>
  <li class="COURS">Systèmes embarqués (MIC5111)</li><br>
  <li class="COURS">Systèmes de télécommunications embarquées (TEL5025)</li><br>
  <li class="COURS">Téléinformatique (INF3271)</li><br>
  <li class="COURS">Construction et maintenance de logiciels (INF3135)</li><br>
</div>

<?php
require_once('template_footer.php');
?>