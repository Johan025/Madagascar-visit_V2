function scrollToTop() {
    // Récupérer la position actuelle de défilement
    const currentPosition = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

    // Calcul pour défilement vers le haut, miakatra menu
    const scrollStep = Math.PI / (300 / 3770); 

    //animation du scroll
    const scrollAnimation = () => {
        // Récupérer la position actuelle de défilement , alaina ny position anilay scroll
        const currentPosition = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

       
        if (currentPosition > 0) {
            // Faire défiler vers le haut 
            window.scrollBy(0, -scrollStep);
            // Appeler récursivement la fonction pour continuer l'animation
            requestAnimationFrame(scrollAnimation);
        }
    };

    scrollAnimation();
}

// gestionnaire d'événements de clic du bouton
const scrollButton = document.getElementById('scrollButton');
scrollButton.addEventListener('click', scrollToTop);
