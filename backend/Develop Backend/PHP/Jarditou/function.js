var button = document.getElementById("btn1");
button.addEventListener("click", function(e){
    e.preventDefault();
    window.prompt("Êtes-vous sur de vouloir supprimer ce produit?");
});



