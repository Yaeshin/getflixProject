<?php
include '../config.php';

$film_id = 484641; // par exemple

// Requête pour récupérer les informations du film
$query = "SELECT * FROM movies WHERE id_movie = $film_id";

$result = $conn->query($query);

// Vérifier si la requête a réussi
if ($result === false) {
    die("Erreur de requête : " . $conn->error);
}

// Récupérer les informations du film
$film = $result->fetch_assoc();

// Requête pour récupérer les commentaires
$commentQuery = "SELECT * FROM comments WHERE movie = $film_id";
$commentResult = $conn->query($commentQuery);

// Vérifier si la requête a réussi
if ($commentResult === false) {
    die("Erreur de requête : " . $conn->error);
}

// Récupérer les commentaires
$comments = [];
while ($comment = $commentResult->fetch_assoc()) {
    $comments[] = $comment;
}

// Fermer la connexion à la base de données
$conn->close();

function formatDuration($durationMinutes) {
    $hours = floor($durationMinutes / 60);
    $minutes = $durationMinutes % 60;

    return $hours . 'h' . sprintf('%02d', $minutes);
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            margin: 0;
        }

        .header {
            width: 100%;
            background-color: #2d2d2d;
            color: #fff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .category-grid {
            display: none;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .show-categories {
            display: flex;
        }

        .category-link {
            width: calc(100% / 3);
            box-sizing: border-box;
            text-align: center;
            padding: 8px;
        }
        #categoryNav{
            display: flex;
            flex-direction: column;
        }
        .custom-scroll::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scroll::-webkit-scrollbar-thumb {
            background-color: #ccc; /* Couleur de la barre de défilement */
            border-radius: 3px; /* Bord arrondi de la barre de défilement */
        }

    </style>
</head>

<body class="bg-gray-600 overflow-hidden">
    <div class="w-full h-full">
        <?php include "../styles/navBar.php"; ?>
    </div>
    <main class="w-full h-full flex flex-row">
        <div class="w-1/4 flex items-stretch pb-5">
            <img src="<?php echo $film['image']; ?>" alt="img" class="object-cover w-full h-9/10 rounded-2xl p-3">
        </div>
        <div class="w-3/4 h-4/4 flex flex-col relative m-3">
            <div class="flex h-2/3">
                <div class="w-1/2 h-full bg-gray-300 rounded-2xl">
                    <h2 class="text-3xl font-bold m-6 text-center"><?php echo $film['title']; ?></h2>
                    <div class="flex flex-col justify-center">
                        <p class="text-2xl mx-5 my-2">Date de sortie: <?php echo $film['release_date']; ?></p>
                        <p class="text-2xl mx-5 my-2">Genres: <?php echo $film['categories']; ?></p>
                        <p class="text-2xl mx-5 my-2">Durée: <?php echo formatDuration($film['duration']); ?></p>
                        <p class="text-xl mx-5 my-3"><?php echo $film['description']; ?></p>
                    </div>
                </div>
                <div class="w-1/2 h-full flex flex-col rounded-xl ml-3">
                    <iframe width="100%" height="450" src="<?php echo $film['trailer']; ?>" title="YouTube video player" frameborder="0" allowfullscreen class="rounded-xl"></iframe>
                    <form class="flex flex-row w-6/6 h-1/1 py-2">
                        <!-- ... (le reste du code HTML) ... -->
                    </form>
                </div>
            </div>
            <div class="h-52 overflow-y-auto pt-1 custom-scroll">
                <?php foreach ($comments as $comment): ?>
                    <div class="flex flex-col bg-zinc-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl"><?php echo $comment['user']; ?></h2>
                        <p class="text-white"><?php echo $comment['content']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <script>
        const logo = document.getElementById('logo');
        const categoryGrid = document.getElementById('categoryGrid');

        logo.addEventListener('click', function () {
            // Au clic sur le logo, afficher les catégories
            categoryGrid.classList.toggle('show-categories');
        });
    </script>
</body>

</html>
