<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>mes annonces</title>
    <link rel="stylesheet" type="text/css" href="static/css/style.css"></link>
    <script type="text/javascript" src="static/js/annonce.js"></script>
    <link rel="stylesheet" href="static/css/bootstrap/bootstrap.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="static/css/freelancer-theme.min.css">

    <!-- Custom CSS -->
    <script src="https://use.fontawesome.com/470b91f216.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  </head>
  <style media="screen">
    img{
      width: 100px;
    }
    div{
      text-align: center;
    }
  </style>
  <body>
      <div>
                <?php include("entete.php"); ?>
                <main id="mai">
                  <article class="">
                      <aside id="art1">
                        <form id="ajout_annonce" style="margin-left:50px;" enctype="multipart/form-data" method="post">
                                    <p><i>Complétez le formulaire pour ajouter de nouvelle annonces Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
                                    <fieldset>
                                            <label for="Titre">Titre*</label>
                                            <input type="text" class="form-control" name="titre"  placeholder="titre" >
                                            <label for="description">description*</label>
                                            <textarea class="form-control" name="description" placeholder="description" ></textarea>
                                            <label for="categorie">Catégorie*</label>
                                            <input type="text" class="form-control" name="categorie"  placeholder="Catégorie" >
                                            <label for="pseudo">pseudo*</label>
                                            <input class="form-control" name="pseudo" placeholder="pseudo" ></input>
                                            <label for="exampleFormControlFile1">prix*</label>
                                            <input type="number" step=0.001  name="prix" ><br>
                                          <label for="exampleFormControlFile1">photo*</label>
                                          <input type="text" class="form-control-file" name="photo" >

                                      </fieldset>
                                      <fieldset>
                                      <legend>coordonées GPS rendez-vous</legend>

                                         <label for="exampleFormControlFile1">lattitude*</label>
                                         <input type="number" step=0.001  name="lat" >


                                        <label for="exampleFormControlFile1">longitude*</label>
                                        <input type="number" class="form-control-file" name="lon" >


                                          <input type="submit"  value="Ajouter">

                                    </fieldset>
                          </form>
                      </aside>
                      <aside id="art2">
                      <div class="lire">
                        <input id="recup" type="search" name="param" placeholder="rechercher des annonces">
                        <button id="bouton_liste" type="submit" class="btn btn-primary mb-2" >afficher les annonces</button>
                      </div>

                     </aside>

                    </article>

                </main>
                <div  id="liste_annonces">

                </div>
                    <!-- inclure l'entete de la page -->
                <?php include("pied.php"); ?>
      </div>
  </body>
</html>
