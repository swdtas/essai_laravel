document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêche le formulaire de se soumettre
  
    // Récupération des données du formulaire
    var formData = new FormData(this);
    var name = formData.get("name");
    var email = formData.get("email");
    var password= formData.get("password");
  
    // Utilisation des données récupérées
    console.log("Nom :", name);
    console.log("E-mail :", email);
    console.log("mot_pass:",password);
    // Faites ici ce que vous souhaitez avec les données récupérées, comme les envoyer via une requête AJAX
  });
  