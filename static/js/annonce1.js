document.addEventListener('DOMContentLoaded', () => {
//  console.log("page");
  //pointer vers formulaire de connexion

const formconnect = document.getElementById("connect");
formconnect.addEventListener("submit", (evt) => {
  const requeteHTTPPost = new XMLHttpRequest();
  const donneesenvoyer = new FormData(formconnect);
  requeteHTTPPost.open("post", "ws_authentification.php");
  requeteHTTPPost.addEventListener("load", (evt) => {
 //on charge le retour
  if(requeteHTTPPost.status==200){
  //rafraissir la page
    window.location.reload();
  }
  else{
  document.getElementById("ereur").innerHTML="email ou mot de passe incorect";
  //window.location.reload();
  //window.alert("login ou mot de passe incorrect veuillez vous reconnectez");
  }
});
requeteHTTPPost.send(donneesenvoyer);
event.preventDefault();

});

});
