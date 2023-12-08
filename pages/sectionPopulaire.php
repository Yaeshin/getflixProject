<?php
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