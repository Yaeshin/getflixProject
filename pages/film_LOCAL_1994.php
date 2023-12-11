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

$comments = [];

while ($comment = $commentResult->fetch_assoc()) {
    // Requête pour récupérer le nickname de l'utilisateur
    $commentUserId = $comment['user'];
    $userQuery = "SELECT nickname FROM users WHERE id_user = $commentUserId";
    $userResult = mysqli_query($conn, $userQuery);

    if ($userResult) {
        $userRow = mysqli_fetch_assoc($userResult);
        $nickname = $userRow['nickname'];
        $comment['nickname'] = $nickname; // Ajouter le nickname au tableau de commentaire
    }

    $comments[] = $comment;
}

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
        ::-webkit-scrollbar {
            width: 5px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #4b5563;
            border-radius: 3px;
        }
    </style>

</head>

<body class="w-screen h-screen bg-gray-600 overflow-x-hidden flex flex-col">
    <header class="h-10vh flex items-center justify-between p-4 bg-gray-800">
        <!-- Left side with photo and name -->
        <div class="flex items-center">
            <img src="../img/test-img2.jpg" alt="img" class="w-12 h-12 object-cover rounded-full">
            <p class="ml-2 text-white text-lg font-bold">John Doe</p>
        </div>

        <!-- Center with logo -->
        <div class="flex items-center">
            <!-- Your logo -->
            <img src="../img/logo.png" alt="Logo" class="w-10">
        </div>

        <!-- Right side with search bar -->
        <div class="flex items-center">
            <input type="text" placeholder="Search..." class="px-2 py-1 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500">
            <button class="ml-2 px-3 py-1 bg-blue-500 text-white rounded">Search</button>
        </div>
    </header>
    <main class="flex-1 flex flex-row block overflow-hidden">
            <div class="w-1/4 h-4/4 flex items-stretch flex-shrink-0">

                <img src="<?php echo $film['image']; ?>" alt="affiche <?php echo $film['title']; ?>" class="object-cover w-full h-9/10 rounded-2xl p-3">

            </div>
            <div class="w-3/4 h-4/4 flex flex-col relative m-3 flex-shrink-0">
                <div class="flex h-2/3">
                    <div class="w-1/3 h-full rounded-2xl">
                        <div class="h-5/6 bg-gray-800 rounded-2xl flex flex-col items-center justify-center px-6">

                            <h2 class="text-white text-3xl font-bold text-center py-4"><?php echo $film['title']; ?></h2>
                            <div class="flex flex-col justify-center">
                                <p class="text-white text-center mx-5 my-3"><?php echo $film['description']; ?></p>
                                <p class="text-white font-bold mx-5 my-2">Date de sortie: <?php echo $film['release_date']; ?></p>
                                <p class="text-white font-bold mx-5 my-2">Genres: <?php echo $film['categories']; ?></p>
                                <p class="text-white font-bold mx-5 my-2">Durée: <?php echo formatDuration($film['duration']); ?></p>

                            </div>
                        </div>
                        <div class="h-1/6 flex justify-center">
                            <div class="flex items-center justify-center gap-28">
                                <button class="flex flex-row bg-blue-500 rounded-lg items-center px-5 py-4">
                                    <img src="../img/like.png" alt="like" class="w-1/4">
                                    <p class="text-2xl font-bold pl-5">33</p>
                                </button>
                                <button class="flex flex-row bg-red-500 rounded-lg items-center px-5 py-4">
                                    <img src="../img/dislike.png" alt="dislike" class="w-1/4">
                                    <p class="text-2xl font-bold pl-5">5</p>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="w-2/3 h-full flex flex-col rounded-xl mx-6">

                        <iframe src="<?php echo $film['trailer']; ?>" title="trailer <?php echo $film['title']; ?>" frameborder="0" allowfullscreen class="rounded-xl h-5/6 w-full"></iframe>

                        <form class="flex flex-row w-6/6 h-1/6 py-4">
                            <input type="text" class="w-5/6 border rounded-xl px-2 focus:outline-none focus:ring focus:border-blue-500 mr-1" placeholder="Votre commentaire...">
                            <button type="submit" class="w-1/6 bg-blue-500 text-white rounded-xl ml-1">Envoyer</button>
                        </form>
                    </div>
                </div>
                <div class="h-1/3 overflow-y-auto mr-4 custom-scroll">

                <?php foreach ($comments as $comment): ?>
                    <div class="flex flex-col bg-zinc-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl"><?php echo $comment['nickname']; ?></h2>
                        <p class="text-white"><?php echo $comment['content']; ?></p>
                    </div>
                <?php endforeach; ?>
                                      

              </div>
         </div>
    </main>

</body>

</html>