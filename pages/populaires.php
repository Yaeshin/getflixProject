<?php
// ... (autres inclusions et paramètres)

// Paramètres de l'API
include '../config.php';

// URL de l'API pour obtenir les films populaires
$popularMoviesApiUrl = "https://api.themoviedb.org/3/movie/popular";

// Paramètres de la requête
$params = ['api_key' => $api_key];
$apiUrlWithParams = $popularMoviesApiUrl . '?' . http_build_query($params);

// Effectuer la requête à l'API
$response = file_get_contents($apiUrlWithParams);

// Gestion des erreurs
if ($response === FALSE) {
    die('Erreur lors de la récupération des données depuis l\'API.');
}

// Décodage de la réponse JSON
$data = json_decode($response, true);

// Vérifier si la réponse contient des données valides
if (empty($data) || isset($data['status_code'])) {
    // Afficher le message d'erreur de l'API s'il est présent
    $errorMessage = isset($data['status_message']) ? $data['status_message'] : 'Aucune donnée valide trouvée dans la réponse de l\'API.';
    die('Erreur de l\'API : ' . $errorMessage);
}

// Récupérer les détails pour chaque film populaire
$movies2 = $data['results'];
?>

<!-- Contenu de la deuxième section "Populaires" -->
<div class="w-full h-1/2 flex-grow">
    <h1 class="w-full h-10vh text-white bg-gray-700 text-4xl text-center py-4">Films populaires</h1>
    <div class="flex justify-around p-8">
        <?php foreach ($movies2 as $movie): ?>
            <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                <!-- <a href="film.php?id=<?php //echo $movie['id_movie']; ?>" class="block w-full h-full bg-cover bg-center relative">  -->
                    <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                        <span class="text-white text-lg font-bold mb-2"><?php echo "{$movie['title']}"; ?></span>
                        <span class="text-white text-center mx-5"><?php echo $movie['overview']; ?></span>
                    </div>
                    <img src="https://image.tmdb.org/t/p/w500<?php echo $movie['poster_path']; ?>" alt="<?php echo $movie['title']; ?>" class="w-full h-full object-cover">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
