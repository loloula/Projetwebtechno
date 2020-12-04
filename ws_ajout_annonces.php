<?php
//ipmoortation de la base de donnee
include("bdd.php");

// on récupère les paramétres fournis dans la requête
$titre =$_POST['titre'];
$description =$_POST['description'];
$categorie =$_POST['categorie'];
$pseudo =$_POST['pseudo'];
$prix =$_POST['prix'];
$photo =$_POST['photo'];
$rdv_lat =$_POST['lat'];
$rdv_lon =$_POST['lon'];
//connexion à la base de donnee
$pdo=connexion();
//requete insertion dans la base de données
$requeteSQL = "INSERT INTO annonces (titre, description, categorie, pseudo, prix, photo, rdv_lat, rdv_lon) VALUES('$titre','$description','$categorie','$pseudo',$prix,'$photo',$rdv_lat, $rdv_lon)";
//insertion
var_dump($requeteSQL);
$insert = $pdo->prepare($requeteSQL);
return $insert->execute();
//erreur client
http_response_code(200);
 ?>
