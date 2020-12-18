<?php
session_start();
if(empty($_SESSION['login']))
{
 http_response_code(401);
}
else {
  //importation de la base de donnee
  include("bdd.php");
  //connexion à la base de donnee
  // on récupère le paramétre fourni dans la requête
  $id =$_REQUEST['id'];
  $pdo=connexion();
  //requete de selection
  $requeteSQL = "DELETE from annonces where id=$id";
  //exécution de la requete
  $rst = $pdo->query($requeteSQL);
  http_response_code(200);
}
?>
