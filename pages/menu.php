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
            <div class="flex justify-around p-8 relative">
                <button onclick="prev()" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-2 rounded-l-lg focus:outline-none">Précédent</button>
                <?php 
                $counter = 0; // Initialisation du compteur
                foreach ($movies as $movie):
                    if ($counter < 5): // Limite à 5 cartes affichées à la fois
                ?>
                    <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                        <a href="film.php?id=<?php echo $movie['id_movie']; ?>" class="block w-full h-full bg-cover bg-center relative">
                            <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                                <span class="text-white text-lg font-bold mb-2"><?php echo $movie['title']; ?></span>
                                <span class="text-white text-center mx-5"><?php echo $movie['description']; ?></span>
                            </div>
                            <img src="<?php echo $movie['image']; ?>" alt="Image" class="w-full h-full object-cover">
                        </a>
                    </div>
                <?php 
                    endif;
                    $counter++; // Incrémentation du compteur
                    endforeach; 
                ?>
                <button onclick="next()" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-2 rounded-r-lg focus:outline-none">Suivant</button>
            </div>
        </div>


        <!-- Contenu de la deuxième section "Populaires" -->
        <div class="w-full h-1/2 flex-grow">
            <h1 class="w-full h-10vh text-white bg-gray-700 text-4xl text-center py-4">Films populaires</h1>
            <div class="flex justify-around p-8">
                <?php foreach ($movies as $movie): ?>
                    <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                        <a href="film.php?id=<?php echo $movie['id_movie']; ?>" class="block w-full h-full bg-cover bg-center relative">
                            <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                                <span class="text-white text-lg font-bold mb-2"><?php echo $movie['title']; ?></span>
                                <span class="text-white text-center mx-5"><?php echo $movie['description']; ?></span>
                            </div>
                            <img src="<?php echo $movie['image']; ?>" alt="Image" class="w-full h-full object-cover">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
         <!-- Contenu de la deuxième section "Revoir" -->
        <div class="w-full h-1/2 flex-grow">
            <h1 class="w-full h-10vh text-white bg-gray-700 text-4xl text-center py-4">Revoir</h1>
            <div class="flex justify-around p-8">
            <?php foreach ($movies as $movie): ?>
                    <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                        <a href="film.php?id=<?php echo $movie['id_movie']; ?>" class="block w-full h-full bg-cover bg-center relative">
                            <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                                <span class="text-white text-lg font-bold mb-2"><?php echo $movie['title']; ?></span>
                                <span class="text-white text-center mx-5"><?php echo $movie['description']; ?></span>
                            </div>
                            <img src="<?php echo $movie['image']; ?>" alt="Image" class="w-full h-full object-cover">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <script>
        // Fonction pour naviguer vers la droite
        function next() {
            const container = document.querySelector('.flex.justify-around'); // Sélectionne le conteneur des cartes
            container.scrollBy({ left: 320, behavior: 'smooth' }); // Fait défiler de 320px (largeur d'une carte) vers la droite
        }

        // Fonction pour naviguer vers la gauche
        function prev() {
            const container = document.querySelector('.flex.justify-around'); // Sélectionne le conteneur des cartes
            container.scrollBy({ left: -320, behavior: 'smooth' }); // Fait défiler de 320px (largeur d'une carte) vers la gauche
        }
    </script>
</body>

</html>
