<?php
require_once('template_header.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Saint-Gobain</title>
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

<ul>
<li class="LGIMT"><a href="https://www.saint-gobain.com/fr" target="_blank"><img src="Logo_Saint-Gobain.png" class="IMGIMT" alt="Logo IMT Nord-Europe"/></a></li>
  <li class="contact"><a href="contact.php">Contact</a></li>
</ul>

<h1>
  Mon stage chez Saint-Gobain
</h1>

<div>
  Durant la période du 10 mai au 27 août 2021, j’ai réalisé mon stage intitulé « Découverte de domaine » dans l’entreprise Saint-Gobain. Plus précisément, j’ai été sur un de leur site de production de verres de sécurité se situant en Allemagne à Torgau en Saxe. Dans la démarche d’industrie 4.0, mon objectif a été d’optimiser la ligne de production aussi bien au niveau du taux d’erreur des produits que de la consommation énergétique nécessaire à leur production. La complexité de cette tâche résidait notamment dans la gestion des différents paramètres qui souvent sont corrélés et de la mise en pratique des résultats théoriques observés.
</div>

</body>
</html>