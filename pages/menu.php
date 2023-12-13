<?php
include '../config.php';

// Requête pour récupérer les informations des films
$query = "SELECT * FROM movies";
$result = $conn->query($query);

// Vérifier si la requête a réussi
if ($result === false) {
    die("Erreur de requête : " . $conn->error);
}

$movies = [];

// Récupérer les informations des films
while ($movie = $result->fetch_assoc()) {
    $movies[] = $movie;
}

// Variables pour suivre l'index de début et de fin des cartes affichées
$startIndex = 0;
$endIndex = 4;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Welcome To Play</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <style>
        ::-webkit-scrollbar {
            width: 3px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #1f1f1f;
            border-radius: 10px;
        }
    </style>

</head>

<body class="w-screen h-screen bg-gray-600 overflow-x-hidden">
    <?php include "../styles/navBar.php"; ?>
    <main class="flex-1 flex flex-grow flex-col block">
        <!-- Contenu de la première section "Pour Vous" -->
        <div class="w-full h-1/2 flex-grow">
            <h1 class="w-full h-10vh text-white bg-gray-700 text-4xl text-center py-4">Pour Vous</h1>
            <div class="flex justify-around items-center p-8 relative">
                <button onclick="prev('carouselPourVous')" class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white px-3 py-2 rounded-l-lg focus:outline-none flex items-center">
                    <!-- Remplacement du texte par des symboles de flèches -->
                    <img src="../img/selectorLeft.png" alt="left" class="w-1/2 h-auto transition-transform hover:scale-125 mx-auto">
                </button>
                <div class="carousel flex" id="carouselPourVous">
                    <!-- Les cartes de films seront générées ici -->
                </div>
                <button onclick="next('carouselPourVous')" class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white px-3 py-2 rounded-r-lg focus:outline-none flex items-center">
                    <!-- Remplacement du texte par des symboles de flèches -->
                    <img src="../img/selectorRight.png" alt="left" class="w-1/2 h-auto transition-transform hover:scale-125 mx-auto">
                </button>
            </div>
        </div>

        <!-- Contenu de la deuxième section "Populaires" -->
        <section>
            <?php  include_once 'populaires.php'; ?>
        </section>

        <!-- Contenu de la deuxième section "Revoir" -->
        <div class="w-full h-1/2 flex-grow">
            <h1 class="w-full h-10vh text-white bg-gray-700 text-4xl text-center py-4">Revoir</h1>
            <div class="flex justify-around items-center p-8 relative">
                <button onclick="prev('carouselRevoir')" class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white px-3 py-2 rounded-l-lg focus:outline-none flex items-center">
                    <!-- Remplacement du texte par des symboles de flèches -->
                    <img src="../img/selectorLeft.png" alt="left" class="w-1/2 h-auto transition-transform hover:scale-125 mx-auto">
                </button>
                <div class="carousel flex" id="carouselRevoir">
                    <!-- Les cartes de films seront générées ici -->
                </div>
                <button onclick="next('carouselRevoir')" class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white px-3 py-2 rounded-r-lg focus:outline-none flex items-center">
                    <!-- Remplacement du texte par des symboles de flèches -->
                    <img src="../img/selectorRight.png" alt="left" class="w-1/2 h-auto transition-transform hover:scale-125 mx-auto">
                </button>
            </div>
        </div>
    </main>
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
        // Fonction pour afficher les premières cartes pour un carrousel spécifique
        function showInitialCards(carouselId) {
            const cardContainer = document.getElementById(carouselId);
            cardContainer.innerHTML = '';

            for (let i = 0; i < 5 && i < movies.length; i++) {
                const movie = movies[i];
                const card = generateMovieCard(movie);
                cardContainer.innerHTML += card;
            }

            cardContainer.dataset.startIndex = 5; // Mettre à jour l'index de départ
        }
        // Appeler la fonction pour afficher les premières cartes au chargement de la page
        document.addEventListener('DOMContentLoaded', function() {
            showInitialCards('carouselPourVous');
            showInitialCards('carouselRevoir');
        });
        // Fonction pour afficher les cartes suivantes pour un carrousel spécifique
        function showNext(carouselId) {
            const cardContainer = document.getElementById(carouselId);
            cardContainer.innerHTML = '';

            let startIndex = cardContainer.dataset.startIndex ? parseInt(cardContainer.dataset.startIndex) : 0;
            const totalMovies = movies.length;

            if (startIndex >= totalMovies) {
                startIndex = 0;
            }

            for (let i = startIndex; i < startIndex + 5 && i < totalMovies; i++) {
                const movie = movies[i];
                const card = generateMovieCard(movie);
                cardContainer.innerHTML += card;
            }

            cardContainer.dataset.startIndex = startIndex + 5;
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
    </script>
</body>

</html>