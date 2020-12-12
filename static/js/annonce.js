document.addEventListener('DOMContentLoaded', () => {
  //console.log("page");
  // debut script recuperer les annonces en cliquant sur un bouton
  const emp = document.getElementById("liste_annonces");
  const leBoutonliste = document.getElementById("bouton_liste");
  leBoutonliste.addEventListener("click", (evt) => {
        //recupérer la recheche saisie
  var recu = document.getElementById("recup").value;
  //console.log("sdfghj");
  const requeteHTTPGet = new XMLHttpRequest();
  requeteHTTPGet.addEventListener("load", (evt) => {
  const jsonData = evt.target.responseText;
  // console.log("résultat du webservice reçu", jsonData);
  const data = JSON.parse(jsonData);
  // console.log("données décodées", data);

  for (const annonce of data) {
          emp.innerHTML +=' <div ><h5>'+annonce.titre+'</h5>'+
          '<br> <a href="#">description </a>: '+annonce.description+
          '<br><a href="#"> catégorie</a> : '+annonce.categorie+
          '<br><a href="#"> pseudo </a>: '+annonce.pseudo+
          '<br><a href="#"> prix </a>:'+annonce.prix+
          '<br><a href="#"> photo </a>: <img id="list" src="img/'+annonce.photo+'">'+
          '<br><a href="#"> rdv_lat </a>: '+annonce.rdv_lat+
          '<br><a href="#"> rdv_lon </a>: '+annonce.rdv_lon+
          '<br><a href="#"> date </a>: '+annonce.date+'</div> ';
          emp.innerHTML += '<div> <button type="submit" class="supprimer btn btn-primary mb-2" data-idannonce='+annonce.id+'>supprimer</button></div>';

  };
  const supprim = document.getElementsByClassName("supprimer");
  //console.log(supprim); teste
  for (const monbuton of supprim){
    const idannonce = monbuton.dataset.idannonce;
    monbuton.addEventListener("click", (evt) => {
      if (window.confirm("Sure to delete ?")){
        const requeteHTTPGet = new XMLHttpRequest();
        requeteHTTPGet.addEventListener("load", (evt) => {
       //on charge le retour
        if(requeteHTTPGet.status==401){
        //rafraissir la page
        //window.location.reload();
        window.alert("vous n'avez pas le droit supprimer veuillez vous connecter");
        }
        //else{
        //  window.confirm(message);
        //}
      });
        requeteHTTPGet.open("get", "ws_supprimer_annonce.php?id="+idannonce);
        requeteHTTPGet.send();
      }

    });

  };

  });
                //recuperer les données du webservices avec comme parametre le texte recuperer sur la zone de saisi
  requeteHTTPGet.open("get", "ws_liste_annonces.php?param="+recu);
  requeteHTTPGet.send();

  });
    //fin script affiche annonces
    //debut script ajout d'une annonce
    //pointer le formulaire de par son id
    const formajoutannonce = document.getElementById("ajout_annonce");
    formajoutannonce.addEventListener("submit", (event) => {
           const requeteHTTPPost = new XMLHttpRequest();
           //recuperer les donnees du formulaire
           const donneesenvoyer = new FormData(formajoutannonce);
           //appeler le web service
           requeteHTTPPost.open("post", "ws_ajout_annonces.php");
           requeteHTTPPost.addEventListener("load", (evt) => {
          //on charge le retour
           if(requeteHTTPPost.status==200){
           //rafraissir la page
           window.location.reload();
         }
       });
           requeteHTTPPost.send(donneesenvoyer);
           event.preventDefault();
 });

});
