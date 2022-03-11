<body>
<article class="Menu_contact">
  <section>
    <img src="Photo.jfif" alt="Cédric PRAST" width=50% height=auto class="Photo"/>
    <form action="https://formsubmit.co/2c6ead6fae41352d74c68ced73649cfe" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="_captcha" value="false">
      <input type="hidden" name="_subject" value="Page CV">
      <input type="text" name="Nom" placeholder="Nom" size="30%" style="margin-bottom:4px; height:30px;" required><br>
      <input type="hidden" name="_next" value="#">
      <input type="email" name="Adresse Mail" placeholder="Adresse Mail" size="30%" style="margin-bottom:4px; height:30px;" required><br><br>
      <input type="hidden" name="_next" value="https://zhongguoda.github.io/sent.html">
      <input type="file" id="someId" name="Pièce jointe" accept="application/pdf" style="margin-bottom:4px;"><br>
      <textarea type="text" name="Message" placeholder="Message" rows="10" cols="30" required></textarea><br>
      <button type="submit" style="height:30px; width:252px;">Envoyer</button>
    </form>
  </section>
</article>

<!--

function renderMenuToHTML($currentPageId) {
  // un tableau qui d\'efinit la structure du site
  $mymenu = array(
  // idPage titre
  'index' => 'Accueil',
  'cmc' => 'cmc');
  
echo '<ul class="nav">';

  foreach($mymenu as $pageId => $pageParameters) {
    echo '<li class="dropdown"><a href="accueil.php">';
    echo $pageParameters;
    echo '</a></li>'; 
  }
}
echo '</ul>';

-->

<ul class="nav">
  <li class="dropdown"><a href="accueil.php">Accueil</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Formations</a>
    <div class="dropdown-content">
      <a href="imt_nord_europe.php">IMT Nord Europe</a>
      <a href="uqam.php">UQAM</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Stages</a>
    <div class="dropdown-content">
      <a href="saint-gobain.php">Saint-Gobain</a>
      <a href="pdl.php">Provence Distribution Logistique</a>
      <a href="cmc.php">Centre de Méthode Champenoise</a>
    </div>
  </li>
</ul>


<ul class="rightMenuL">
<li class="Cadre_Logo">
<?php
if ($url != "" && $img_src != ""):
echo '<a href=';
echo $url;
echo ' target="_blank"><img src=';
echo $img_src;
echo ' class="Logo" alt="Logo UQAM"/></a>';
else:
echo '<a href="#" style="pointer-events: none"><img src="Logo_UQAM.png" style="opacity: 0" class="Logo" alt="Logo UQAM"/></a>';
endif;
?>
</li>
</ul>

<ul class="rightMenuC">
  <li class="contact"><a href="contact.php">Contact</a></li>
</ul>