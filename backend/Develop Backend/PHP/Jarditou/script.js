var form_formulaire= document.querySelector("#formulaire");
var champ_nom = form_formulaire.elements["nom"];
var champ_prenom = form_formulaire.elements["prenom"];
var champ_date_de_naissance = form_formulaire.elements["ddn"];
var champ_email = form_formulaire.elements["email"];
var champ_code_postal = form_formulaire.elements["codepostal"];
var champ_sujet = form_formulaire.elements["sujet"];
var champ_question = form_formulaire.elements["question"];
var regNom = new RegExp("/^[A-zÀ-ž]+$/");
var regPrenom = new RegExp("/^[A-zÀ-ž]+$/");
var erreur;
var form_OK = true;

form_formulaire.addEventListener('submit', (e)=>{

console.log(e.target);

// Nom //

if(champ_nom.value == "" || champ_nom.value == null || regNom.exec(champ_nom.value) == false ){
    form_OK = false;
    e.preventDefault();
    erreur = "Veuillez saisir un nom valide !"
    document.getElementById("erreur1").innerHTML=erreur;
}

// Prenom //

if(champ_prenom.value == "" || champ_prenom.value == null || regPrenom.exec(champ_prenom.value) == false ){
    form_OK = false;
    e.preventDefault();
    erreur = "Veuillez saisir un prénom valide !"
    document.getElementById("erreur2").innerHTML=erreur;
}

// Sexe //

if( $('input[name=sexe]').is(':checked') ){
} 
else 
{
    form_OK = false;
    e.preventDefault();
    erreur = "Veuillez cocher votre sexe !"
    document.getElementById("erreur3").innerHTML=erreur;
}

// Date De Naissance //

if(champ_date_de_naissance.value == "" ){
    form_OK = false;
    e.preventDefault();
    erreur = "Veuillez saisir votre date de naissance !"
    document.getElementById("erreur4").innerHTML=erreur;
}

// Code Postal //

if(champ_code_postal.value.length != 5 || isNaN(champ_code_postal.value)){
    form_OK = false;
    e.preventDefault();
    erreur = "Veuillez saisir votre code postal !"
    document.getElementById("erreur5").innerHTML=erreur;
}

// Email //

if( !champ_email.value.includes("@")){
    form_OK = false;
    e.preventDefault();
    erreur = "Veuillez saisir votre email !"
    document.getElementById("erreur6").innerHTML=erreur;
}

// Sujet //

if(champ_sujet.selectedIndex == 0) {
    form_OK = false;
    e.preventDefault();
    erreur = "Veuillez saisir un sujet !"
    document.getElementById("erreur7").innerHTML=erreur;
}

// Question //

if(champ_question.value == "" ){
    form_OK = false;
    e.preventDefault();
    erreur = "Veuillez saisir votre question !"
    document.getElementById("erreur8").innerHTML=erreur;
}

})

form_formulaire.addEventListener('submit', valider)