<?php
// On prolonge la session
session_start();

?>


      <nav  id="na"  class="navbar navbar-default navbar-fixed-top navbar-custom">
        <ul id="navigation">
          <li><a href="index.php" title="aller à la section 1">Accueil</a></li>
          <li><a href="visualiser_liste.php" title="aller à la section 2">liste </a></li>
          <li><a href="visualiser_liste_ajax" title="aller à la section 3">listeAjax </a></li>

          <?php

            // On teste si la variable de session existe et contient une valeur
            if(!empty($_SESSION['login']))
            {
                echo '<p style="margin-left:1070px;color:white;width:300px">bienvenue ',$_SESSION['login'],'</p><button id="deconnecte" style="margin-left:1350px;margin-top:-50px;color:white;" type="submit"  class="btn btn-primary mb-2" >deconexion</button>' ;

            }
            else{
              echo '<form id="connect" method="post" style="margin-left:950px;">
                  <input style="color:black;" type="email" name ="adressemail" placeholder=" email ">
                  <input style="color:black;" type="password" name="motdepasse" placeholder="mot de passe">
                  <input  type="submit" style="color:black;" value="connexion"></form>';
                  echo'<label id="ereur" style="color:red;margin-left:1250px;"> </label>';
            }
            ?>
        </ul>

      </nav>
<header class="page-header">

</header>
