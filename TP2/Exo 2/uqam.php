<?php
require_once('template_header.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UQAM</title>
<style>

body {
  background-color: white;
  margin: 0;
  font-family:Palatino Linotype;
}
h3{
  margin-top: 0px;
  margin-bottom: 3px;
}

li.COURS{
  list-style-type: circle;
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
  <li class="LGIMT"><a href="https://uqam.ca/" target="_blank"><img src="Logo_UQAM.png" class="IMGIMT" alt="Logo IMT Nord-Europe"/></a></li>
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

</body>
</html>
