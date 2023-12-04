<?php
include '../config.php';

$film_Iddb = $idfilm;
$filmNamedb = mysqli_real_escape_string($conn, $filmName);
//$filmYeardb = substr($filmYear, 0, 4);
$filmYeardb = $filmYear;
$filmRuntimedb = $filmRuntime;
$filmSummarydb = mysqli_real_escape_string($conn, $filmSummary);
$filmImagedb = 'https://image.tmdb.org/t/p/w500' . $filmImage;
//$filmGenresdb = $filmGenres;
$filmGenresdb = is_array($filmGenres) ? implode(", ", array_column($filmGenres, 'name')) : '';
$youtube_linkdb = $youtube_link;

  

// Appeler la méthode addFilm
$insertSuccess = false;  // Déclaration de la variable

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitBtn'])) {
    // Instancier la classe Db
    $db = new Db($conn);

    // Appeler la méthode addFilm
    $insertSuccess = $db->addFilm($film_Iddb, mysqli_real_escape_string($conn, $filmNamedb), mysqli_real_escape_string($conn, $filmSummarydb),
        'https://image.tmdb.org/t/p/w500' . $filmImagedb, $filmRuntimedb, $youtube_linkdb, $filmYeardb, $filmGenresdb);

    // Vérifier le résultat de l'insertion
    if ($insertSuccess) {
        echo "<p>Les données ont été ajoutées à la base de données.</p>";
    } else {
        echo "Erreur d'insertion : " . mysqli_error($conn);
    }

//      // Ajouter des déclarations echo pour déboguer
//    echo "film_Iddb: " . $film_Iddb . "<br>";
//    echo "filmNamedb: " . $filmNamedb . "<br>";
//    echo "filmSummarydb: " . $filmSummarydb . "<br>";
//    echo "filmImagedb: " . $filmImagedb . "<br>";
//    echo "filmRuntimedb: " . $filmRuntimedb . "<br>";
//    echo "youtube_linkdb: " . $youtube_linkdb . "<br>";
//    echo "filmYeardb: " . $filmYeardb . "<br>";
//    echo "filmGenresdb: " . $filmGenresdb . "<br>";
}


class Db {
    
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addFilm($film_Iddb, $filmNamedb, $filmSummarydb, $filmImagedb, $filmRuntimedb, $youtube_linkdb, $filmYeardb, $filmGenresdb) {
        $sqlInsert = "INSERT INTO movies (id_movie, title, description, image, duration, trailer, release_date, categories) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($this->conn, $sqlInsert);
        mysqli_stmt_bind_param($stmt, "isssisis", $film_Iddb, $filmNamedb, $filmSummarydb, $filmImagedb, $filmRuntimedb, $youtube_linkdb, $filmYeardb, $filmGenresdb);

        // Exécuter la requête
        $success = mysqli_stmt_execute($stmt);

        // Fermer la déclaration
        mysqli_stmt_close($stmt);


        return $success;
    }
}

?>
