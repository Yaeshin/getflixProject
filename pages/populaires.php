<?php
include '../config.php';

// Requête pour récupérer les informations des films
$queryPopulaire = "SELECT * FROM populaire";
$resultPopulaire = $conn->query($queryPopulaire);

// Vérifier si la requête a réussi
if ($resultPopulaire === false) {
    die("Erreur de requête : " . $conn->error);
}

$moviesPopulaire = [];

// Récupérer les informations des films
while ($moviePopulaire = $resultPopulaire->fetch_assoc()) {
    $moviesPopulaire[] = $moviePopulaire;
}

// Variables pour suivre l'index de début et de fin des cartes affichées
$startIndexPopulaire = 0;
$endIndexPopulaire = 4;
?>

<div class="w-full h-1/2 flex-grow">
    <h1 class="w-full h-10vh text-white bg-gray-700 text-4xl text-center py-4">Populaire</h1>
    <div class="flex justify-around items-center p-8 relative">
        <button onclick="prevPopulaire('carouselRevoir')" class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white px-3 py-2 rounded-l-lg focus:outline-none flex items-center">
            <img src="../img/selectorLeft.png" alt="left" class="w-1/2 h-auto transition-transform hover:scale-125 mx-auto">
        </button>
        <div class="carousel flex" id="carouselRevoir">
            <!-- Les cartes de films seront générées ici -->
            <?php
            foreach ($moviesPopulaire as $moviePopulaire) {
                // Générer directement le contenu HTML ici
                echo "
                <div class='w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105'>
                    <a href='film.php?id={$moviePopulaire['id_populaire']}' class='block w-full h-full bg-cover bg-center relative'>
                        <div class='absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center'>
                            <span class='text-white text-lg font-bold mb-2'>{$moviePopulaire['title_populaire']}</span>
                            <span class='text-white text-center mx-5'>{$moviePopulaire['description_populaire']}</span>
                        </div>
                        <img src='{$moviePopulaire['image_populaire']}' alt='Image' class='w-full h-full object-cover'>
                    </a>
                </div>";
            }
            ?>
        </div>
        <button onclick="nextPopulaire('carouselRevoir')" class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white px-3 py-2 rounded-r-lg focus:outline-none flex items-center">
            <img src="../img/selectorRight.png" alt="left" class="w-1/2 h-auto transition-transform hover:scale-125 mx-auto">
        </button>
    </div>
</div>

<script>
    // Fonction pour afficher les cartes suivantes pour un carrousel spécifique
    function showNextPopulaire(carouselId) {
        const cardContainer = document.getElementById(carouselId);
        cardContainer.innerHTML = '';

        const startIndex = cardContainer.dataset.startIndex ? parseInt(cardContainer.dataset.startIndex) : 0;
        for (let i = startIndex; i < startIndex + 5 && i < moviesPopulaire.length; i++) {
            const movie = moviesPopulaire[i];
            const card = `
                <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                    <a href="film.php?id=${movie.id_populaire}" class="block w-full h-full bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                            <span class="text-white text-lg font-bold mb-2">${movie.title_populaire}</span>
                            <span class="text-white text-center mx-5">${movie.description_populaire}</span>
                        </div>
                        <img src="${movie.image_populaire}" alt="Image" class="w-full h-full object-cover">
                    </a>
                </div>`;
            cardContainer.innerHTML += card;
        }

        cardContainer.dataset.startIndex = startIndex + 5;
    }

    // Fonction pour afficher les cartes précédentes pour un carrousel spécifique
    function showPrevPopulaire(carouselId) {
        const cardContainer = document.getElementById(carouselId);
        let startIndex = cardContainer.dataset.startIndex ? parseInt(cardContainer.dataset.startIndex) : 0;
        startIndex -= 5;
        if (startIndex < 0) {
            startIndex = 0;
        }
        cardContainer.dataset.startIndex = startIndex;
        showNextPopulaire(carouselId);
    }

    // Fonctions pour les boutons Précédent et Suivant
    function nextPopulaire(carouselId) {
        showNextPopulaire(carouselId);
    }

    function prevPopulaire(carouselId) {
        showPrevPopulaire(carouselId);
    }
</script>
