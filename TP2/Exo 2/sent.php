<?php
require_once('template_header.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Accueil</title>
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
  <img src="Photo.jfif" alt="C??dric PRAST" width=50% height=auto/>
  <h2>Envoy?? !</h2>
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
      <a href="cmc.php">Centre de M??thode Champenoise</a>
    </div>
  </li>
  <li class="contact"><a href="contact.php">Contact</a></li>
</ul>

<h1>Curriculum vitae C??dric PRAST</h1>

<div>??tudiant en M1 ?? l'Institut Mines-T??l??com Nord Europe, je suis passionn?? par les nouvelles technologies.
  J'aime cr??er et mener des projets, d??montrer des probl??mes math??matiques et faire des exp??riences scientifiques.
  Mes ??tudes me donnent des bases en programmation, en ??lectronique et en physique-chimie.
  J'ai la double nationnalit?? fran??aise-allemande.
  J'aime voyager et d??couvrir de nouvelles cultures.
  J'ai effectu?? un semestre d'??change ?? l'UQAM (Universit?? du Qu??bec ?? Montr??al) qui m'a permis d'??tre immerg?? durant 5 mois dans la culture qu??becoise.
  Mes stages m'ont permis d'acqu??rir de l'exp??rience dans des entreprises de plus ou moins grandes tailles. J'ai pu mener des projets en autonomie.
  Je recherche un stage assistant ing??nieur en informatique ?? partir d'avril 2022 pour une dur??e de 4 ?? 5 mois.
  Je suis particuli??rement int??ress?? par des entreprises innovantes dans les nouvelles technologies.
  N'h??sitez pas ?? parcourir mon site et ?? me contacter si mon profil vous int??resse.
</div>

</body>
</html>
