<!doctype html>
<html>
<head>
<link rel="stylesheet" href="style1.css" type="text/css"
media="screen" title="default" charset="utf-8" />
</head>
<body>
<article>
  <section>
    <img src="Photo.jfif" alt="Cédric PRAST" width=50% height=auto/>
    <form action="https://formsubmit.co/2c6ead6fae41352d74c68ced73649cfe" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="_captcha" value="false">
      <input type="hidden" name="_subject" value="Page CV">
      <input type="text" name="Nom" placeholder="Nom" size="25%" style="margin-bottom:4px;" required><br>
      <input type="hidden" name="_next" value="#">
      <input type="email" name="Adresse Mail" placeholder="Adresse Mail" size="25%" style="margin-bottom:4px;" required><br><br>
      <input type="hidden" name="_next" value="https://zhongguoda.github.io/sent.html">
      <input type="file" id="someId" name="Pièce jointe" accept="application/pdf" style="margin-bottom:4px;"><br>
      <textarea type="text" name="Message" placeholder="Message" rows="4" cols="30" required></textarea><br>
      <button type="submit">Envoyer</button>
    </form>
  </section>
</article>

<ul>
  <li><a href="index.php">Accueil</a></li>
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

<script>
var file = document.getElementById('someId');

file.onchange = function(e) {
  var files = e.currentTarget.files;
  var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch (ext) {
    case 'pdf':
      break;
    default:
      alert('PDF Seulement !');
      this.value = '';
  }
};
</script> 
</body>
</html>