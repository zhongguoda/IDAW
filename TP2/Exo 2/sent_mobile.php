<?php
require_once('template_header.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact</title>
<style>

body {
  background-color: white;
  margin: 0;
  font-family:Palatino Linotype;
}

img {
  width: 200px;
  height: auto;
  border-radius: 50%;
  margin-bottom: 5%;
  max-height: 40%;
  max-width: 40%;
}

form {
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
  font-size: 0.9rem;
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
  font-size: 0.8rem;
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

h1 {
  color: black;
  text-align: center;
  margin-top: 75px;
  margin-left: 0%;
  cursor: default;
}

div {
  color: black;
  display: block;
  text-align: center;
  padding-left: 20px;
  margin-right: 20px;
  cursor: default;
  margin-left: 0%;
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

</style>
</head>
<body>

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
  <li class="contact"><a href="contact.php">Contact</a></li>
</ul>

<h1>Contact</h1>

<div>
  <img src="Photo.jfif" alt="Cédric PRAST" width=50% height=auto/>
  <h1>Envoyé !</h1>
</div>
</body>
</html>
