
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> F'NewCoin - Add | Search </title>

    <script type="text/javascript" src="static/js/annonce_english.js"></script>
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
       <?php include("entete_english.php"); ?>

       <main id="mai">
        <article class="">
         <aside id="art1">
          <form id="ajout_annonce"  enctype="multipart/form-data" method="post">
            <legend>
            <p><i>Fill the fields below to add new ads. <br> Fields marked with </i><em>*</em> are <em>mandatory.</em></p>
            </legend>
           <fieldset>
            <label for="Titre">Title*</label>
            <input type="text" class="form-control" name="titre"  placeholder="title" >
            <label for="description">Description*</label>
            <textarea class="form-control" name="description" placeholder="description" ></textarea>
            <label for="categorie">Category*</label>
            <input type="text" class="form-control" name="categorie"  placeholder="category" >
            <label for="pseudo">Pseudo*</label>
            <input class="form-control" name="pseudo" placeholder="pseudo"></input>
            <label for="exampleFormControlFile1">Price* </label>
            <input type="number" step=0.01  name="prix" placeholder="price in €"><br>
            <label for="exampleFormControlFile1">Photo*</label>
            <input type="text" class="form-control-file" name="photo" >
           </fieldset>

           <fieldset>
            <legend><br><i>GPS coordinates for collection</i></legend>
            <label for="exampleFormControlFile1">Latitude*</label>
            <input type="number" step=0.01  name="lat" >
            <label for="exampleFormControlFile1">Longitude*</label>
            <input type="number" class="form-control-file" name="lon" >
            <input type="submit" class="btn btn-primary mb-2" value="add">
           </fieldset>
          </form>
        </aside>
        <aside id="art2">
          <div class="intro_recherche">
            <legend>
            <p><i>Type keywords to search <br> among the registered ads in the database.</i></p>
          </legend>
          </div>
          <div class="lire">
            <input id="recup" type="search" name="param" placeholder="search ads">
            <button id="bouton_liste" type="submit" class="btn btn-primary mb-2" > display ads</button>
          </div>
          <div  id="liste_annonces"> </div>
        </aside>
      </article>
    </main>


       <?php include("pied_english.php"); ?>
      </div>
  </body>
</html>
