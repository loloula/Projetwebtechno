<?php        //Vérification de l'email et motde Passe
            session_start();
            include("bdauthentif.php");
            echo'<script type="text/javascript" src="static/js/annonce1.js"></script>';
            //if (isset($_POST['adressemail']) AND isset($_POST['motdepasse']))
          //   {
            //    if (!empty($_POST['adressemail']) AND !empty($_POST['motdepasse']))
            //    {
                    $errorMessage = '';
                    $pseudo = $_POST['adressemail'];
                    $passe = $_POST['motdepasse'];

                    //conexion a la base
                    $pdo=connexion();
                    //requete de selection
                    $req = "SELECT id, motdepasse,nom FROM login WHERE adressemail='$pseudo'";
                    $rst = $pdo->query($req);
                    $annonces = $rst->fetchAll(PDO::FETCH_ASSOC);

                    if(count($annonces)==0){
                        http_response_code(401);
                    }
                    else{
                      foreach ($annonces as $a) {
                        if(!$rst or $a['motdepasse'] != $passe){
                          //echo "mot de passe incorrect";
                          http_response_code(401);
                          //$errorMessage = 'Mauvais mot de passe';
                        }
                        else{


                          // On enregistre le nom d'utilisateur en session
                          $_SESSION['login'] = $a['nom'];

                          http_response_code(200);
                              exit();
                        }
                      }
                    }

              //  }
              //  else
              //  {
                //    echo 'Renseignez un email et un Mot De Passe.<br/>';
              //  }
          //  }
        ?>
