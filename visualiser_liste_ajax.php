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
                        <form action="#">
                                    <p><i>Complétez le formulaire pour ajouter de nouvelle annonces Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
                                    <fieldset>
                                         <div class="form-group">
                                            <label for="Titre">Titre</label>
                                            <input type="text" class="form-control" id="titre"  placeholder="titre">
                                          </div>
                                          <div class="form-group">
                                            <label for="description">description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="description"></textarea>
                                          </div>
                                          <div>
                                          <label for="exampleFormControlFile1">photo</label>
                                          <input type="file" class="form-control-file" id="photo">
                                         </div>
                                         
                                          <button type="submit" class="btn btn-primary">Submit</button>

                                    </fieldset>
                          </form>
                      </aside>
                      <div class="lire">
                        <input id="recup" type="search" name="param" placeholder="rechercher des annonces">
                        <button id="bouton_liste" type="submit" class="btn btn-primary mb-2" >afficher les annonces</button>
                      </div>
                        <div  id="liste_annonces">

                        </div>

                  </article>

                </main>

                    <!-- inclure l'entete de la page -->
                <?php include("pied.php"); ?>
      </div>
  </body>
</html>
