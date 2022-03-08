<?php
require_once('template_header.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IMT Nord Europe</title>
<style>

body {
  background-color: white;
  margin: 0;
  font-family:Palatino Linotype;
}

img {
  border-radius: 50%;
  margin-top: 40%;
  margin-left: 25%;
  margin-right: auto;
  margin-bottom: 5%;
}

.LGIMT{
  float: right;
  margin-right: 24%;
  height: 59px;
}

.IMGIMT{
  height: 35px;
  border-radius: 0%;
  margin-top: 0%;
  margin-left: 0%;
  margin-right: 0%;
  margin-bottom: 0%;
  padding: 0px 5px 0px 0px;
}

form {
  text-align: left;
  padding-left: 5%;
  margin-bottom: 10px;
}

h1 {
  color: black;
  text-align: center;
  margin-top: 75px;
  margin-left: 25%;
  cursor: default;
}

h2 {
  color: black;
  text-align: center;
  margin-top: 67%;
  cursor: default;
}

div {
  color: black;
  text-align: justify;
  display: inline-block;
  text-justify: inter-word;
  margin-left: 25%;
  padding-left: 20px;
  margin-right: 20px;
  cursor: default;
}

p1 {
  color: black;
  float: left;
  font-size: 15px;
  padding-left: 20px;
}

article {
  list-style-type: none;
  margin: 0;
  top: 0;
  padding: 0;
  width: 25%;
  background-color: #D5EEFE;
  position: fixed;
  height: 100%;
  overflow: auto;
  cursor: default;
}

ul {
  display: inline-block;
  list-style-type: none;
  margin : 0;
  padding: 0;  
  background-color: #63C0FE;
  margin-left: 25%;
  width:100%;
  position: fixed;
  top: 0;
  font-weight: bold;
  font-size: 1.5rem;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}

li.dropdown {
  display: inline-block;
  cursor: default;
}

li.contact {
  float: right;
  pointer-events: none;
  opacity: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #63C0FE;
  min-width: 160px;
  margin-left: 0%;
  padding-left: 0px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-weight: normal;
  font-size: 0.95rem;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 1200px) {
h1 {
  color: black;
  text-align: center;
  margin-top: 75px;
  margin-left: 0%;
  cursor: default;
}

div {
  color: black;
  text-align: justify;
  text-justify: inter-word;
  margin-left: 0%;
  padding-left: 20px;
  margin-right: 20px;
  cursor: default;
}

article {
  list-style-type: none;
  margin: 0;
  top: 0;
  padding: 0;
  width: 0%;
  background-color: #D5EEFE;
  position: fixed;
  height: 0%;
  overflow: auto;
}

  ul {
  list-style-type: none;
  margin : 0;
  margin-left: 0%;
  padding: 0;  
  background-color: #63C0FE;
  width:100%;
  position: fixed;
  top: 0;
  font-weight: bold;
  font-size: 0.9rem;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 10px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}

li.dropdown {
  display: inline-block;
  cursor: default;
}

li.contact {
  float: right;
  margin-right: 0%;
  pointer-events: all;
  opacity: 1;
}

.LGIMT{
  float: right;
  margin-right: 0%;
  height: 0px;
}

.IMGIMT{
  height: 0px;
  border-radius: 0%;
  margin-top: 0%;
  margin-left: 0%;
  margin-right: 0%;
  margin-bottom: 0%;
  padding: 0px 0px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #63C0FE;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-weight: normal;
  font-size: 0.8rem;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: white;}

.dropdown:hover .dropdown-content {
  display: block;
}
}

</style>
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
  <li class="LGIMT"><a href="https://imt-nord-europe.fr/" target="_blank"><img src="Logo_IMT_Nord_Europe.png" class="IMGIMT" alt="Logo IMT Nord-Europe"/></a></li>
  <li class="contact"><a href="contact.php">Contact</a></li>
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

<h1>
  Mon parcours à l'Institut Mines-Télécom Nord-Europe
</h1>

<div>
L'IMT c'est bien.
</div>

</body>
</html>