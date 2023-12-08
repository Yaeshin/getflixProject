<?php
include 'sectionPopulaire.php';
?>

<!-- Contenu de la deuxième section "Populaires" -->
<div class="w-full h-1/2 flex-grow">
    <h1 class="w-full h-10vh text-white bg-gray-700 text-4xl text-center py-4">Populaire</h1>
    <div class="flex justify-around items-center p-8 relative">
        <button onclick="prev('carouselPopulaire')" class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white px-3 py-2 rounded-l-lg focus:outline-none flex items-center">
            <!-- Remplacement du texte par des symboles de flèches -->
            <img src="../img/selectorLeft.png" alt="left" class="w-1/2 h-auto transition-transform hover:scale-125 mx-auto">
        </button>
        <div class="carousel flex" id="carouselPopulaire">
            <!-- Les cartes de films seront générées ici -->
        </div>
        <button onclick="next('carouselPopulaire')" class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white px-3 py-2 rounded-r-lg focus:outline-none flex items-center">
            <!-- Remplacement du texte par des symboles de flèches -->
            <img src="../img/selectorRight.png" alt="left" class="w-1/2 h-auto transition-transform hover:scale-125 mx-auto">
        </button>
    </div>
</div>
<script>
    // Initialisation des données de films depuis PHP
    const movies = <?php echo json_encode($movies); ?>;

    // Fonction pour générer les cartes de films
    function generateMovieCard(movie) {
        return `
            <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                <a href="film.php?id=${movie.id_movie}" class="block w-full h-full bg-cover bg-center relative">
                    <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                        <span class="text-white text-lg font-bold mb-2">${movie.title}</span>
                        <span class="text-white text-center mx-5">${movie.description}</span>
                    </div>
                    <img src="${movie.image}" alt="Image" class="w-full h-full object-cover">
                </a>
            </div>
        `;
    }

    // Fonction pour vérifier et réinitialiser l'index de début lorsque tous les films ont été affichés
    function checkResetIndex(carouselId) {
        const cardContainer = document.getElementById(carouselId);
        const startIndex = cardContainer.dataset.startIndex ? parseInt(cardContainer.dataset.startIndex) : 0;
        if (startIndex >= movies.length) {
            cardContainer.dataset.startIndex = 0;
        }
    }

    // Fonction pour afficher les cartes suivantes pour un carrousel spécifique
    function showNext(carouselId) {
        const cardContainer = document.getElementById(carouselId);
        cardContainer.innerHTML = '';

        let startIndex = cardContainer.dataset.startIndex ? parseInt(cardContainer.dataset.startIndex) : 0;
        for (let i = startIndex; i < startIndex + 5 && i < movies.length; i++) {
            const movie = movies[i];
            const card = generateMovieCard(movie);
            cardContainer.innerHTML += card;
        }

        cardContainer.dataset.startIndex = startIndex + 5;
        checkResetIndex(carouselId);
    }

    // Fonction pour afficher les cartes précédentes pour un carrousel spécifique
    function showPrev(carouselId) {
        const cardContainer = document.getElementById(carouselId);
        let startIndex = cardContainer.dataset.startIndex ? parseInt(cardContainer.dataset.startIndex) : 0;
        startIndex -= 10;
        if (startIndex < 0) {
            startIndex = 0;
        }
        cardContainer.dataset.startIndex = startIndex;
        showNext(carouselId);
    }

    // Fonctions pour les boutons Précédent et Suivant
    function next(carouselId) {
        showNext(carouselId);
    }

    function prev(carouselId) {
        showPrev(carouselId);
    }

    // Afficher les premières cinq cartes au chargement de la page
    document.addEventListener('DOMContentLoaded', () => {
        showNext('carouselPopulaire');
        showNext('carouselPourVous');
        showNext('carouselRevoir');
        // Assure-toi d'ajouter également pour les autres carrousels si nécessaire
    });
</script>