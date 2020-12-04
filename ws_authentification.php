<?php        //Vérification de l'emailet motde Passe
            include("bdauthentif.php");
            //if (isset($_POST['adressemail']) AND isset($_POST['motdepasse']))
          //  {
            //    if (!empty($_POST['adressemail']) AND !empty($_POST['motdepasse']))
            //    {
                    $pseudo = $_REQUEST['adressemail'];
                    $passe = $_REQUEST['motdepasse'];
                    //conexion a la base
                    $pdo=connexion();
                    //requete de selection
                    $req = "SELECT id, motdepasse FROM login WHERE adressemail =$pseudo";
                    $rst = $pdo->query($req);
                    $annonces = $rst->fetchAll(PDO::FETCH_ASSOC);
                    //echo  json_encode($annonces);teste
                    if(count($annonces)==0){
                      echo "pas de compte pour ce email";
                    }
                    else{
                      foreach ($annonces as $a) {
                        if(!$rst or $a['motdepasse'] != $passe){
                          echo "mot de passe incorrect";
                        }
                        else{
                          echo "connexion réussi";
                        }
                      }
                    }

            //    }
            //    else
              //  {
              //      echo 'Renseignez un Pseudo/Derbyname et un Mot De Passe.<br/>';
              //  }
            //}
        ?>
