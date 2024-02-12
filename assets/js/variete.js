var formulaire=document.getElementById("formulaireVariete");

function getNavigateur() {
  var xhr; 
      try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
      catch (e) { 
          try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
          catch (e2) {
              try {  xhr = new XMLHttpRequest();  }
              catch (e3) {  xhr = false;   }
          }
      }
  return xhr;
}

// ---- Envoyer les donnees du formulaire-----//
function sendData() {
    var xhr=getNavigateur()
            
    xhr.onreadystatechange = function(){
      if(xhr.readyState === 4){
          if(xhr.status === 200){
            var reponse = JSON.parse(xhr.responseText);
              alert(reponse);
          }
      }
    };

    xhr.addEventListener("load", function(event) {
    });
    
    xhr.addEventListener("error", function(event) {
        alert('Oups! Quelque chose s\'est mal passé.');
    });
    
    xhr.open("POST", "../../pages/traitements/formulaireVariete.php");
        
    var formData = new FormData(formulaire);
    
    xhr.send(formData);
}
// ---- Envoyer les donnees -----//

window.addEventListener("load", function () {

  formulaire.addEventListener("submit", function (event) {
      event.preventDefault(); // évite de faire le submit par défaut
      sendData();
  });
}); 