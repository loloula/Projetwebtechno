<?php
// On prolonge la session
session_start();
?>
      <nav  id="na" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <p style="color:white; margin-left:750px; font-size:20px">F'NewCoin!</p>
        <div id="menu">
      <ul id="navigation" style="margin-top:-25px">
          <li><a href="index_english.php" title="HomePage">Home</a></li>
          <li><a href="visualiser_liste_english.php" title="See the list of advertisments"> List </a></li>
          <li><a href="visualiser_liste_ajax_english.php" title="Add and Search advertisments"> Add </a></li>
          <li><a href="index_english.php" title="English"> EN </a></li>
          <li><a href="index.php" title="Français"> FR </a></li>
        <?php
            // On teste si la variable de session existe et contient une valeur
            if(!empty($_SESSION['login']))
            {
                echo '<div style="align:center">
                <p style="color:#242830;margin-left:1000px;">bienvenue ',$_SESSION['login'] ,'<button id="deconnecte" style="color:black;" type="submit"   >log out</button></p> </div>' ;
            }
            else{
              echo '
                  <form id="connect" method="post" style="margin-left:990px;">
                  <input style="color:black;" type="email" name ="adressemail" placeholder=" e-mail ">
                  <input style="color:black;" type="password" name="motdepasse" placeholder="password">
                  <input  type="submit" style="color:black;" value="log in"></form>';
                  echo'<label id="ereur" style="color:red;margin-left:1250px;"> </label>';
            }
          ?>
           </ul>
        </div>
      </nav>
