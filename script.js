document.addEventListener("DOMContentLoaded", function() {
    var scrollButton = document.getElementById("scrollButton");
    var fonctionnalitesSection = document.getElementById("Fonctionnalité");

    // Ajoute un gestionnaire d'événements pour le clic sur le bouton
    scrollButton.addEventListener("click", function() {
        // Fait défiler la page jusqu'à la section fonctionnalités avec une animation fluide
        fonctionnalitesSection.scrollIntoView({ behavior: "smooth" });
    });
});