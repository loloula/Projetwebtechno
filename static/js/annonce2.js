document.addEventListener('DOMContentLoaded', () => {
//  console.log("page");
  //pointer vers le bouton de deconnexion

const leBouton = document.getElementById("deconnecte");
leBouton.addEventListener("click", (evt) => {
  //console.log("fafafafaf");teste
  const requeteHTTPGet = new XMLHttpRequest();
  requeteHTTPGet.addEventListener("load", (evt) => {
 //on charge le retour
  if(requeteHTTPGet.status==200){
  //rafraissir la page
    window.location.reload();
  }
});
  requeteHTTPGet.open("get", "ws_deconnexion.php");
  requeteHTTPGet.send();
});

});
