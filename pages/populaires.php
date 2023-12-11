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

// echo "<pre>";
// print_r($moviesPopulaire);
// echo "</pre>";

// Variables pour suivre l'index de début et de fin des cartes affichées
$startIndexPopulaire = 0;
$endIndexPopulaire = 4;
?>

<!-- Contenu de la deuxième section "Populaires" -->
<div class="w-full h-1/2 flex-grow">
    <h1 class="w-full h-10vh text-white bg-gray-700 text-4xl text-center py-4">Populaire</h1>
    <div class="flex justify-around items-center p-8 relative">
        <button onclick="prevPopulaire('carouselPopulaire')" class="absolute left-0 top-1/2 transform -translate-y-1/2 text-white px-3 py-2 rounded-l-lg focus:outline-none flex items-center">
            <!-- Remplacement du texte par des symboles de flèches -->
            <img src="../img/selectorLeft.png" alt="left" class="w-1/2 h-auto transition-transform hover:scale-125 mx-auto">
        </button>
        <div class="carousel flex" id="carouselPopulaire">
            <!-- Cartes de films générées par PHP -->
            <?php
            foreach ($moviesPopulaire as $moviePopulaire) {
                echo generateMovieCardPopulaire($moviePopulaire);
            }
            ?>
        </div>
        <button onclick="nextPopulaire('carouselPopulaire')" class="absolute right-0 top-1/2 transform -translate-y-1/2 text-white px-3 py-2 rounded-r-lg focus:outline-none flex items-center">
            <!-- Remplacement du texte par des symboles de flèches -->
            <img src="../img/selectorRight.png" alt="left" class="w-1/2 h-auto transition-transform hover:scale-125 mx-auto">
        </button>
    </div>
</div>

<?php
// Fonction pour générer les cartes de films
function generateMovieCardPopulaire($moviePopulaire) {
    return '
        <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
            <a href="film.php?id=' . $moviePopulaire['id_populaire'] . '" class="block w-full h-full bg-cover bg-center relative">
                <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                    <span class="text-white text-lg font-bold mb-2">' . $moviePopulaire['title_populaire'] . '</span>
                    <span class="text-white text-center mx-5">' . $moviePopulaire['description_populaire'] . '</span>
                </div>
                <img src="' . $moviePopulaire['image_populaire'] . '" alt="Image" class="w-full h-full object-cover">
            </a>
        </div>
    ';
}
?>

<script>
    // Initialisation des données de films depuis PHP
    const moviesPopulaire = <?php echo json_encode($moviesPopulaire); ?>;

    // Fonction pour vérifier et réinitialiser l'index de début lorsque tous les films ont été affichés
    function checkResetIndexPopulaire(carouselId) {
        const cardContainer = document.getElementById(carouselId);
        const startIndex = cardContainer.dataset.startIndex ? parseInt(cardContainer.dataset.startIndex) : 0;
        if (startIndex >= moviesPopulaire.length) {
            cardContainer.dataset.startIndex = 0;
        }
    }

    // Fonction pour afficher les cartes suivantes pour un carrousel spécifique
    function showNextPopulaire(carouselId) {
            console.log('Show next populaire called');
        const cardContainer = document.getElementById(carouselId);
        cardContainer.innerHTML = '';

        let startIndex = cardContainer.dataset.startIndex ? parseInt(cardContainer.dataset.startIndex) : 0;
        for (let i = startIndex; i < startIndex + 5 && i < moviesPopulaire.length; i++) {
            const moviePopulaire = moviesPopulaire[i];
            const card = generateMovieCardPopulaire(moviePopulaire);
            cardContainer.innerHTML += card;
        }

        cardContainer.dataset.startIndex = startIndex + 5;
        checkResetIndexPopulaire(carouselId);
    }

    // Fonction pour afficher les cartes précédentes pour un carrousel spécifique
    function showPrevPopulaire(carouselId) {
            console.log('Show prev populaire called');
        const cardContainer = document.getElementById(carouselId);
        let startIndex = cardContainer.dataset.startIndex ? parseInt(cardContainer.dataset.startIndex) : 0;
        startIndex -= 10;
        if (startIndex < 0) {
            startIndex = 0;
        }
        cardContainer.dataset.startIndex = startIndex;
        showNextPopulaire(carouselId);
    }

    // Fonctions pour les boutons Précédent et Suivant
    function nextPopulaire(carouselId) {
            console.log('Next populaire called');
        showNextPopulaire(carouselId);
    }

    function prevPopulaire(carouselId) {
            console.log('Prev populaire called');
        showPrevPopulaire(carouselId);
    }

    // Afficher les premières cinq cartes au chargement de la page
    document.addEventListener('DOMContentLoaded', () => {
        showNextPopulaire('carouselPopulaire');
        // Ajouter également pour les autres carrousels si nécessaire
    });
</script>
