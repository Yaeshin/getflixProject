<?php
include '../config.php';
include 'populairesDB.php';

// Instancier la classe PopulairesDB
$populairesDB = new PopulairesDB($conn);

// Mettre à jour la base de données
$populairesDB->updateDatabase();


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
            <?php  //include_once 'populaires.php'; ?>
        </section>

        <div class="w-full h-1/2 flex-grow">
    <h1 class="w-full h-10vh text-white bg-gray-700 text-4xl text-center py-4">Populaire</h1>
    <div class="flex justify-around items-center p-8 relative">
    <button onclick="prevPopulaire('carouselPopulaire')" class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white px-3 py-2 rounded-l-lg focus:outline-none flex items-center">
            <img src="../img/selectorLeft.png" alt="left" class="w-1/2 h-auto transition-transform hover:scale-125 mx-auto">
        </button>
        <div class="carousel flex" id="carouselPopulaire">
            <!-- Les cartes de films seront générées ici -->
            <?php
            foreach ($moviesPopulaire as $moviePopulaire) {
                // Générer directement le contenu HTML ici
                echo "
                <div class='w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105'>
                    <a href='filmPopulaire.php?id={$moviePopulaire['id_populaire']}' class='block w-full h-full bg-cover bg-center relative'>
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
        <button onclick="nextPopulaire('carouselPopulaire')" class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white px-3 py-2 rounded-r-lg focus:outline-none flex items-center">
            <img src="../img/selectorRight.png" alt="left" class="w-1/2 h-auto transition-transform hover:scale-125 mx-auto">
        </button>
    </div>
</div>



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

        function generateMovieCardPopulaire(movie) {
            return `
                <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                    <a href="filmPopulaire.php?id=${movie.id_populaire}" class="block w-full h-full bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                            <span class="text-white text-lg font-bold mb-2">${movie.title_populaire}</span>
                            <span class="text-white text-center mx-5">${movie.description_populaire}</span>
                        </div>
                        <img src="${movie.image_populaire}" alt="Image" class="w-full h-full object-cover">
                    </a>
                </div>
            `;
        }

        // Fonction pour afficher les cartes suivantes pour un carrousel spécifique
        function showNext(carouselId) {
            const cardContainer = document.getElementById(carouselId);
            cardContainer.innerHTML = '';

            const startIndex = cardContainer.dataset.startIndex ? parseInt(cardContainer.dataset.startIndex) : 0;
            for (let i = startIndex; i < startIndex + 5 && i < movies.length; i++) {
                const movie = movies[i];
                const card = generateMovieCard(movie);
                cardContainer.innerHTML += card;
            }

            cardContainer.dataset.startIndex = startIndex + 5;
        }
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

        function nextPopulaire(carouselId) {
    showNextPopulaire(carouselId);
}
        function next(carouselId) {
            showNext(carouselId);
        }
       

        function prevPopulaire(carouselId) {
    showPrevPopulaire(carouselId);
}
        function prev(carouselId) {
            showPrev(carouselId);
        }
    </script>
</body>

</html>