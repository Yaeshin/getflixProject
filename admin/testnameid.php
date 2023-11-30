<?php
include 'api.php';
include 'db.php';

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

        //Récupérer les détails du film
        $filmName = $data['title'];
        $filmYear = substr($data['release_date'], 0, 4);
        $filmGenres = $data['genres'];
        $filmRuntime = $data['runtime'];
        $filmSummary = $data['overview'];
        $filmImage = 'https://image.tmdb.org/t/p/w500' . $data['poster_path'];

        // ...



// ...


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

        //db :
        // Récupérer les détails du film
        // $filmNamedb = mysqli_real_escape_string($conn, $filmName);
        // $filmYeardb = substr($filmYear['release_date'], 0, 4);
        // $filmRuntimedb = $filmRuntime['runtime'];
        // $filmSummarydb = mysqli_real_escape_string($conn, $filmSummary['overview']);
        // $filmImagedb = 'https://image.tmdb.org/t/p/w500' . $filmImage['poster_path'];
        // $filmGenresdb = implode(", ", array_column($filmGenres['genres'], 'name'));

        $filmNamedb = mysqli_real_escape_string($conn, $filmName);
        $filmYeardb = substr($filmYear, 0, 4);
        $filmRuntimedb = $filmRuntime;
        $filmSummarydb = mysqli_real_escape_string($conn, $filmSummary);
        $filmImagedb = 'https://image.tmdb.org/t/p/w500' . $filmImage;
        $filmGenresdb = implode(", ", array_column($filmGenres, 'name'));


        // // Convertisseur minutes - heures:minutes
        // $hours = floor($filmRuntime / 60);
        // $minutes = $filmRuntime % 60;

        // ...

        // Insérer les données dans la base de données
        $sqlInsert = "INSERT INTO film (id, titre, date, durée, description, image, trailer, genres) 
              VALUES ('$idfilm', '$filmNamedb', '$filmYeardb', '$filmRuntimedb', '$filmSummarydb', '$filmImagedb', '$youtube_link', '$filmGenresdb')";

        if (mysqli_query($conn, $sqlInsert)) {
            echo "<p>Les données ont été ajoutées à la base de données.</p>";
        } else {
            echo "Erreur d'insertion : " . mysqli_error($conn);
        }

        // Afficher les détails du film
        echo "
            <h1>$filmName</h1>
            <p>Année : $filmYear</p>
            <p>Durée : $hours h $minutes min</p>";

        if (!empty($filmGenres)) {
            echo "<p>Genres : ";
            foreach ($filmGenres as $genre) {
                echo $genre['name'] . " ";
            }
            echo "</p>";
        }

        echo "
            <p>Résumé : $filmSummary</p>
            <img src=\"$filmImage\" alt=\"$filmName\">
            <p>Trailer : <a href=\"$youtube_link\" target='_blank'>Voir la vidéo sur YouTube</a></p>
            <a href=\"$youtube_link\">$youtube_link</a>";

    } else {
        // Aucun résultat trouvé
        echo "<p>Aucun résultat trouvé pour ce film.</p>";
    }
}
$conn->close();
?>