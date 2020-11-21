
document.addEventListener('DOMContentLoaded', () => {
  // debut script recuperer les annonces en cliquant sur un bouton
  const emp = document.getElementById("liste_annonces");
  const leBoutonliste = document.getElementById("bouton_liste");
  leBoutonliste.addEventListener("click", (evt) => {
        //recupérer la recheche saisie
  var recu = document.getElementById("recup").value;
        //console.log(recu); teste
  const requeteHTTPGet = new XMLHttpRequest();
  requeteHTTPGet.addEventListener("load", (evt) => {
  const jsonData = evt.target.responseText;
                    // console.log("résultat du webservice reçu", jsonData);
  const data = JSON.parse(jsonData);
                    // console.log("données décodées", data);
                    // vidage des commentaires déjà affichés
  emp.innerHTML = "";
  for (const annonce of data) {
          emp.innerHTML +='<div> <h5>'+annonce.titre+'</h5>'+
          '<br> <a href="#">description </a>: '+annonce.description+
          '<br><a href="#"> catégorie</a> : '+annonce.categorie+
          '<br><a href="#"> pseudo </a>: '+annonce.pseudo+
          '<br><a href="#"> prix </a>:'+annonce.prix+
          '<br><a href="#"> photo </a>: <img id="list" src="img/'+annonce.photo+'">'+
          '<br><a href="#"> rdv_lat </a>: '+annonce.rdv_lat+
          '<br><a href="#"> rdv_lon </a>: '+annonce.rdv_lon+
          '<br><a href="#"> date </a>: '+annonce.date+'</div>';
  }
  });
                //recuperer les données du webservices avec comme parametre le texte recuperer sur la zone de saisi
  requeteHTTPGet.open("get", "ws_liste_annonces.php?param="+recu);
  requeteHTTPGet.send();
  });
    //fin script affiche annonces

});
