<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> F'NewCoin - List </title>
    <script type="text/javascript" src="static/js/annonce.js"></script>
    <script type="text/javascript" src="static/js/annonce1.js"></script>
    <script type="text/javascript" src="static/js/annonce2.js"></script>

    <link rel="stylesheet" type="text/css" href="static/css/style.css"></link>
    <link rel="stylesheet" href="static/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/freelancer-theme.min.css">

    <script src="https://use.fontawesome.com/470b91f216.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  </head>
  <style media="screen">
    img{
      width: 200px;
    }
  </style>
  <body>
     <div>
      <!-- inclure l'entete de la page -->
      <?php include("entete_english.php"); ?>
      <main id="liste">
      <?php
      //importation de la base de donnee
      include("bdd.php");

      //connexion à la base de donnee
      $pdo=connexion();

      //requete de selection
      $requeteSQL = "SELECT * FROM annonces";

      //exécution de la requete
      $rst = $pdo->query($requeteSQL);

      // récupération des résultats
      $annonces = $rst->fetchAll(PDO::FETCH_ASSOC);

     foreach ($annonces as $a) {
       echo '<div style="border:3px solid #6B8E23; border-style:double; background-color:aliceblue;"> <h3>',$a['titre'],'</h3>
            <br><a href="#">description </a>: ',$a['description'],
            '<br><a href="#"> catégorie</a> : ',$a['categorie'],
            '<br><a href="#"> pseudo </a>: ',$a['pseudo'],
            '<br><a href="#"> prix </a>:',$a['prix']," €" ,
            '<br><a href="#"> photo </a>: <img src="img/',$a['photo'],'">',
            '<br><a href="#"> rdv_lat </a>: ',$a['rdv_lat'],
            '<br><a href="#"> rdv_lon </a>: ',$a['rdv_lon'],
            '<br><a href="#"> date </a>: ',$a['date'],'</div>';
            }

        ?>
      </main>

      <!-- inclure le pied de la page -->
      <?php include("pied_english.php"); ?>
     </div>
  </body>
</html>
