//Element HTML du form Contact
var btnForm = document.getElementById("send");
var lname = document.getElementById("nom");
var fname = document.getElementById("fname");
var cp = document.getElementById("cpostal");
var city = document.getElementById("city");
var adr = document.getElementById("adr");
var Bday = document.getElementById("Bday");
var email = document.getElementById("email");
var Suj = document.getElementById("suj");
var Question = document.getElementById("question");
var date = document.getElementById("Bday");
var homme = document.getElementById("Mas");
var femme = document.getElementById("Fem");

//Element HTML pour les messages d'erreurs du form Contact
var missName = document.getElementById("missName");
var missFname = document.getElementById("missFname");
var missDate = document.getElementById("missDate");
var missCity = document.getElementById("missCity");
var missAdr = document.getElementById("missAdr");
var missGenre = document.getElementById("missGenre");
var missSuj = document.getElementById("missSuj");
var missQuestion = document.getElementById("missQuestion");
var missGenre = document.getElementById("missGenre");
var missMail = document.getElementById("missMail");
var missCP = document.getElementById("missCP");

//RegEx Form contact
var Caract = /^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+(?:(?:\-| |\')?[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ]+)*$/;
var rxAdr = /^(?:\d+\,?(?: [a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ\-]+){2,}|(?:[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ\-]+(?: [a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœÉ\-]+)+))$/;
var rxMail = /^\w+[\w\!#\$%&\'\*\+\-\/=\?\^\`\{|\}~]*@[\w\!#\$%&\'\*\+\-\/=\?\^\`\{|\}~]+\.[a-zA-Z]+$/;
var rxDate = /^(?:\d\d?[\/\- ]\d\d?[\/\- ](?:\d\d)(?:\d\d)?)|(?:(?:\d\d)(?:\d\d)?[\/\- ]\d\d?[\/\- ]\d\d?)$/;
var rxCP = /^(?:(?:[013-9]\d)|(?:2[\dabAB]))\d{3}/;


function styleError(elem) {
  //factorisation du code modifiant le style
  elem.style.color = "red";
  elem.style.display = "block";
}

function styleValid(elem) {
  //factorisation du code modifiant le style
  elem.style.color = "green";
  elem.style.display = "inline";
}

function checkForm(event) {
  // Fonction appelée par addEventlistener
  //Vérification du form
  if(!rxCP.test(cp.value) || cp.value=="" ){
    event.preventDefault();
    missCP.textContent="Entrez un code postal valide ou rien";
    styleError(missCP);
  }else{
    missCP.textContent ="OK";
    styleValid(missCP);
  }
  
  if (!Caract.test(fname.value)) {
      // Prénom valide ?
      event.preventDefault();
      missFname.textContent =
      "Entrez un prénom valide";
      styleError(missFname);
  }else{
      missFname.textContent = "OK";
      styleValid(missFname);
  }

  if (!Caract.test(lname.value)) {
    // Nom valide ?
    event.preventDefault();
    missName.textContent ="Entrez un nom valide";
    styleError(missName);
  }else{
    missName.textContent = "OK";
    styleValid(missName);
  }
  
  if (date.value == "") {
    event.preventDefault();
    missDate.textContent = "Date de naissance invalide";
    styleError(missDate);
  }else if(!rxDate.test(date.value)) {
    // IE ne prend pas en charge les input date donc on teste si la date respect la Regex
    event.preventDefault();
    missDate.textContent = "Date de naissance invalide";
    styleError(missDate);
  }else{
    missDate.textContent = "OK";
    styleValid(missDate);
  }
  
  if(!(homme.checked || femme.checked)) {
    event.preventDefault();
    missGenre.textContent = "Veuillez sélectionner votre sexe";
    styleError(missGenre);
  }else{
    missGenre.textContent = "OK";
    styleValid(missGenre);
  }

  if(city.value ==""|| rxAdr.test(city.value)) {
    event.preventDefault();
    missCity.textContent ="Ville invalide : Entrez une Ville valide ou rien";
    styleError(missCity);
    }else{
    missCity.textContent ="Ok"
    styleValid(missCity);
    }

if(adr.value ==""|| rxAdr.test(adr.value)) {
    event.preventDefault();
    missAdr.textContent ="Address invalide : Entrez une Address valide ou rien";
    styleError(missAdr);
    }else{
        missAdr.textContent ="Ok"
    styleValid(missAdr);
    }

  if(!rxMail.test(email.value)){
    event.preventDefault();
    missMail.textContent = "Adresse mail invalide";
    styleError(missMail);
  }else{
    missMail.textContent = "OK";
    styleValid(missMail);
  }

  if(Suj.selectedIndex ==0) {
    event.preventDefault();
    missSuj.textContent = "Sélectionnez un sujet";
    styleError(missSuj);
  }else{
    missSuj.textContent = "OK";
    styleValid(missSuj);
  }

  if(Question.value==""){
    event.preventDefault();
    missQuestion.textContent = "Veuillez entrer votre question";
    styleError(missQuestion);
  }else{
    missQuestion = "OK";
    styleValid(missQuestion);
  }
}
btnForm.addEventListener("click", checkForm);