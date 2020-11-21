<?php
//ipmoortation de la base de donnee
include("bdd.php");
// on récupère les paramétres fournis dans la requête
$titre =$_REQUEST['titre'];
$description =$_REQUEST['description'];
$categorie =$_REQUEST['categorie'];
$pseudo =$_REQUEST['pseudo'];
$prix =$_REQUEST['prix'];
$photo =$_REQUEST['photo'];
$rdv_lat =$_REQUEST['lat'];
$rdv_lon =$_REQUEST['lon'];
//connexion à la base de donnee
$pdo=connexion();
//requete insertion dans la base de données
$requeteSQL = "INSERT INTO annonces (titre, description, categorie, pseudo, prix, photo, rdv_lat, rdv_lon) VALUES($titre, $description, $categorie, $pseudo, $prix, $photo, $rdv_lat, $rdv_lon)";
//insertion
$insert = $pdo->prepare($requeteSQL);
return $insert->execute();
//erreur client
http_response_code(200);
 ?>
