<?php
// On prolonge la session
session_start();
?>      <nav  id="na" class="navbar navbar-default navbar-fixed-top navbar-custom">
          <p style="color:white; margin-left:750px; font-size:20px">F'NewCoin!</p>
        <div id="menu">
        <ul id="navigation" style="margin-top:-25px">
          <li><a href="index.php" title="Page d'accueil">Accueil</a></li>
          <li><a href="visualiser_liste.php" title="Visualiser la liste d'annonces">Liste </a></li>
          <li><a href="visualiser_liste_ajax.php" title="Ajouter et recherche des annonces"> Ajout </a></li>

          <li><a href="index_english.php" title="English"> EN </a></li>
          <li><a href="index.php" title="Français"> FR </a></li>
        <?php
            // On teste si la variable de session existe et contient une valeur
            if(!empty($_SESSION['login']))
            {
                echo '<div style="align:center">
                <p style="color:#242830">bienvenue ',$_SESSION['login'],'<button id="deconnecte" style="color:black; type="submit"> déconnexion </button></p> </div>' ;
            }
            else{
              echo '
                  <form id="connect" method="post" style="margin-left:1000px;">
                  <input style="color:black;" type="email" name ="adressemail" placeholder=" e-mail ">
                  <input style="color:black;" type="password" name="motdepasse" placeholder="mot de passe">
                  <input  type="submit" style="color:black;" value="connexion"></form>';
                  echo'<label id="ereur" style="color:red;margin-left:1250px;"> </label>';
            }
          ?>
           </ul>
        </div>
      </nav>
