<?php
//importation de la base de donnee
include("bdd.php");

//connexion à la base de donnee
//on récupère le paramétre fourni dans la requête
$parametre =$_REQUEST['param'];
$pdo=connexion();

//requete de selection
$requeteSQL = "SELECT * FROM annonces where pseudo like '%$parametre%' or categorie like '%$parametre%' or description like '%$parametre%' or titre like '%$parametre%'";

//exécution de la requete
$rst = $pdo->query($requeteSQL);

//récupération des résultats
$annonces = $rst->fetchAll(PDO::FETCH_ASSOC);
echo  json_encode($annonces);
?>
