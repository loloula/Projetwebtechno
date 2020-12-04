<?php
//ipmoortation de la base de donnee
include("bdd.php");
//connexion à la base de donnee
// on récupère le paramétre fourni dans la requête
$id =$_REQUEST['id'];
$pdo=connexion();
//requete de selection
$requeteSQL = "DELETE from annonces where id=$id";
//exécution de la requete
$rst = $pdo->query($requeteSQL);
?>
