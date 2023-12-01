<?php
include '../api.php';

// Initialisation des variables avec des valeurs par défaut
$filmName = '';
$filmSummary = '';
$youtube_link = '';
$filmImage = ''; 
// Traitement de la recherche lorsque le formulaire est soumis
if (isset($_POST['movieName'])) { // Utilisez POST ici
    $movieName = urlencode($_POST['movieName']);

    // Requête de recherche à l'API TMDb
    $url = "https://api.themoviedb.org/3/search/movie?api_key=$api_key&query=$movieName";
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    // Récupération du premier résultat (peut être ajusté selon vos besoins)
    $movie = isset($data['results'][0]) ? $data['results'][0] : null;

    // Affichage des informations sur le film
    if ($movie) {
        $idfilm = $movie['id'];

        // URL de l'API pour obtenir les détails du film
        $filmApiUrl = "https://api.themoviedb.org/3/movie/{$idfilm}";
        $params = ['api_key' => $api_key];
        $apiUrlWithParams = $filmApiUrl . '?' . http_build_query($params);

        // Effectuer la requête à l'API pour obtenir les détails du film
        $response = file_get_contents($apiUrlWithParams);
        $data = json_decode($response, true);

        // Vérifier si la réponse de l'API est valide
        if (empty($data) || isset($data['status_code'])) {
            $errorMessage = isset($data['status_message']) ? $data['status_message'] : 'Aucune donnée valide trouvée dans la réponse de l\'API.';
            die('Erreur de l\'API : ' . $errorMessage);
        }

        // Récupérer les détails du film
        $filmName = $data['title'];
        $filmYear = substr($data['release_date'], 0, 4);
        $filmGenres = $data['genres'];
        $filmRuntime = $data['runtime'];
        $filmSummary = $data['overview'];
        $filmImage = 'https://image.tmdb.org/t/p/w500' . $data['poster_path'];

        // Convertisseur minutes - heures:minutes
        $hours = floor($filmRuntime / 60);
        $minutes = $filmRuntime % 60;

        // URL de l'API pour obtenir les vidéos du film
        $videoApiUrl = "https://api.themoviedb.org/3/movie/{$idfilm}/videos?language=en-US&api_key={$api_key}";

        // Effectuer la requête à l'API pour obtenir les vidéos du film
        $response = file_get_contents($videoApiUrl);
        $data = json_decode($response, true);

        // Vérifier si la réponse de l'API pour les vidéos est valide
        if (empty($data) || !isset($data['results']) || !is_array($data['results'])) {
            die('Aucune donnée valide trouvée dans la réponse de l\'API pour les vidéos.');
        }

        // Récupérer les liens des vidéos
        $first_key_value = $data['results'][0]['key'];
        $last_key_value = end($data['results'])['key'];

        $youtube_link = "https://www.youtube.com/watch?v={$last_key_value}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Layout avec Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-700 flex">
    <?php include "../styles/navAdmin.php"; ?>
    <section class="w-4/5 m-5 p-8 bg-neutral-200 rounded-md flex justify-center items-center">
    <div class="w-full max-w-md">
    <form class="w-full max-w-md" method="post" action="">
    <!-- Première partie du formulaire -->
    <div class="m-5 pb-3 flex items-center">
        <input
            class="w-full border rounded py-2 px-3 mr-2 focus:outline-none focus:shadow-outline"
            type="text"
            name="movieName"
            placeholder="Movie Name..."
        />
        <button class="bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
            Ajouter
        </button>
    </div>

    <div class="flex items-center mb-2">
        <div class='w-1/2'>
            <img class=' object-cover mr-4' src='<?php echo $filmImage ?>' alt='Photo' />
        </div>
        <div class='w-1/2'>
            <div class='pt-3'>
                <h3 class='text-lg font-semibold pt-3'><?php echo $filmName ?></h3>
                <p class='text-gray-600'><?php echo $filmSummary ?></p>
                <p class='text-gray-600'><a href="<?= $youtube_link ?>" target="_blank">Trailer</a></p>
            </div>
            <div class='flex justify-center pt-3'>
                <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>Valider</button>
            </div>
        </div>
    </div>
</form>

    </div>

    </section>
</body>

</html>
