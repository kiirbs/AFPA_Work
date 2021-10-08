// Il y a plusieurs façon de sélectionner un nœud DOM ; ici on récupère
// le formulaire et le champ d'e-mail ainsi que l'élément span
// dans lequel on placera le message d'erreur

var form  = document.getElementsByTagName('form')[0];
var email = document.getElementById('mail');
var nom = document.getElementById('nom');
var prenom = document.getElementById('prenom');
var error = document.querySelector('.error');

email.addEventListener("input", function (event) {
  // Chaque fois que l'utilisateur saisit quelque chose
  // on vérifie la validité du champ e-mail.
  if (email.validity.valid) {
    // S'il y a un message d'erreur affiché et que le champ
    // est valide, on retire l'erreur
    error.innerHTML = ""; // On réinitialise le contenu
    error.className = "error"; // On réinitialise l'état visuel du message
  }
}, false);

prenom.addEventListener("input", function (event) {
    // Chaque fois que l'utilisateur saisit quelque chose
    // on vérifie la validité du champ prenom.
    if (prenom.validity.valid) {
      // S'il y a un message d'erreur affiché et que le champ
      // est valide, on retire l'erreur
      error.innerHTML = ""; // On réinitialise le contenu
      error.className = "error"; // On réinitialise l'état visuel du message
    }
  }, false);

  nom.addEventListener("input", function (event) {
    // Chaque fois que l'utilisateur saisit quelque chose
    // on vérifie la validité du champ nom.
    if (nom.validity.valid) {
      // S'il y a un message d'erreur affiché et que le champ
      // est valide, on retire l'erreur
      error.innerHTML = ""; // On réinitialise le contenu
      error.className = "error"; // On réinitialise l'état visuel du message
    }
  }, false);

form.addEventListener("submit", function (event) {
  // Chaque fois que l'utilisateur tente d'envoyer les données
  // on vérifie que le champ email est valide.
  if (!email.validity.valid) {

    // S'il est invalide, on affiche un message d'erreur personnalisé
    error.innerHTML = "Veuillez entrée une adresse mail correcte";
    error.className = "Syntaxe error";
    // Et on empêche l'envoi des données du formulaire
    event.preventDefault();
  }
}, false);

form.addEventListener("submit", function (event) {
    // Chaque fois que l'utilisateur tente d'envoyer les données
    // on vérifie que le champ prénom est valide.
    if (!prenom.validity.valid) {
  
      // S'il est invalide, on affiche un message d'erreur personnalisé
      error.innerHTML = "Veuillez entrée un prénom correct";
      error.className = "Syntaxe error";
      // Et on empêche l'envoi des données du formulaire
      event.preventDefault();
    }
  }, false);

  form.addEventListener("submit", function (event) {
    // Chaque fois que l'utilisateur tente d'envoyer les données
    // on vérifie que le champ nom est valide.
    if (!nom.validity.valid) {
  
      // S'il est invalide, on affiche un message d'erreur personnalisé
      error.innerHTML = "Veuillez entrée un nom correct";
      error.className = "Syntaxe error";
      // Et on empêche l'envoi des données du formulaire
      event.preventDefault();
    }
  }, false);





