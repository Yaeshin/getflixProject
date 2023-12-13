<?php
include '../config.php';

session_start();
if (empty($_SESSION['user'])) {
    header("Location: ../index.php");
    die();
}

// Récupérer l'identifiant du film depuis l'URL
$film_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Requête pour récupérer les informations du film
$query = "SELECT * FROM populaire WHERE id_populaire = $film_id";
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
    $userResult = $conn->query($userQuery);

    if ($userResult) {
        $userRow = $userResult->fetch_assoc();
        $nickname = $userRow['nickname'];
        $comment['nickname'] = $nickname; // Ajouter le nickname au tableau de commentaire
    }

    $comments[] = $comment;
}

// Récupérer le nickname de la session
$nickname = isset($_SESSION['nickname']) ? $_SESSION['nickname'] : '';

// Assurez-vous que le nickname est défini
if (!empty($nickname)) {
    // Échapper le nickname pour éviter les injections SQL
    $escapedNickname = $conn->real_escape_string($nickname);

    // Requête pour récupérer l'ID de l'utilisateur en fonction du nickname
    $userQuery = "SELECT id_user FROM users WHERE nickname = '$escapedNickname'";

    // Exécutez la requête
    $userResult = $conn->query($userQuery);

    // Vérifiez si la requête s'est bien déroulée
    if ($userResult === false) {
        die("Erreur de requête pour récupérer l'ID de l'utilisateur : " . $conn->error);
    }

    // Récupérez l'ID de l'utilisateur à partir du résultat de la requête
    $userRow = $userResult->fetch_assoc();
    $user_id = $userRow['id_user'];

    // Libérez les résultats de la requête
    $userResult->free();

    // Ajout de commentaire
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $comment_content = isset($_POST['comment_content']) ? htmlspecialchars($_POST['comment_content']) : '';

        if (!empty($comment_content)) {
            // Requête pour insérer le commentaire dans la base de données
            $insert_comment_query = "INSERT INTO comments (user, movie, content) VALUES ('$user_id', '$film_id', '$comment_content')";
            $insert_result = $conn->query($insert_comment_query);

            if ($insert_result === false) {
                die("Erreur lors de l'ajout du commentaire : " . $conn->error);
            } else {
                // Commentaire ajouté avec succès, rediriger avec un message de succès
                $_SESSION['success_message'] = "Le commentaire a été ajouté avec succès.";
                header("Location: $_SERVER[REQUEST_URI]");
                exit();
            }
        }
    }
} else {
    // Gérez le cas où le nickname n'est pas défini dans la session
    echo "Nickname non défini dans la session.";
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
    <?php include "../styles/navBar.php"; ?>
    <main class="flex-1 flex flex-row block overflow-hidden">
            <div class="w-1/4 h-4/4 flex items-stretch flex-shrink-0">

                <img src="<?php echo $film['image_populaire']; ?>" alt="affiche <?php echo $film['title_populaire']; ?>" class="object-cover w-full h-9/10 rounded-3xl p-3">

            </div>
            <div class="w-3/4 h-4/4 flex flex-col relative m-3 flex-shrink-0">
                <div class="flex h-2/3">
                    <div class="w-1/3 h-full rounded-2xl">
                        <div class="h-5/6 bg-gray-800 rounded-2xl flex flex-col items-center justify-center px-6">
                            <h2 class="w-full h-1/3 flex items-center justify-center text-white text-3xl font-bold text-center"> <?php echo $film['title_populaire']; ?> </h2>
                            <div class="flex w-full h-2/3 flex-col justify-center">
                                <div class="w-full h-1/2 overflow-y-auto">
                                    <p class="text-white text-center mx-5"><?php echo $film['description_populaire']; ?></p>
                                </div>
                                <div class="py-5">
                                    <p class="text-white font-bold mx-5 my-2">Date de sortie: <?php echo $film['release_date_populaire']; ?></p>
                                    <p class="text-white font-bold mx-5 my-2">Genres: <?php echo $film['categories_populaire']; ?></p>
                                    <p class="text-white font-bold mx-5 my-2">Durée: <?php echo formatDuration($film['duration_populaire']); ?></p>
                                </div>
                               
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

                        <iframe src="<?php echo $film['trailer_populaire']; ?>" title="trailer <?php echo $film['title_populaire']; ?>" frameborder="0" allowfullscreen class="rounded-xl h-5/6 w-full"></iframe>

                        <form class="flex flex-row w-6/6 h-1/6 py-4" method="post" action="">
                            <input type="text" name="comment_content" class="w-5/6 border rounded-xl px-2 focus:outline-none focus:ring focus:border-blue-500 mr-1" placeholder="Votre commentaire..." required>
                            <button type="submit" class="w-1/6 bg-blue-500 text-white rounded-xl ml-1">Envoyer</button>
                        </form>
                    </div>
                </div>
                <div class="h-1/3 overflow-y-auto mr-4 custom-scroll">

                <?php
                if (isset($_SESSION['success_message'])) {
                    echo '<div class="bg-green-500 text-white p-3 mb-3 rounded">' . $_SESSION['success_message'] . '</div>';
                    unset($_SESSION['success_message']); 
                }
                ?>

                <?php foreach ($comments as $comment): ?>
                    <div class="flex flex-col bg-gray-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl"><?php echo $comment['nickname']; ?></h2>
                        <p class="text-white"><?php echo $comment['content']; ?></p>
                    </div>
                <?php endforeach; ?>
                                      

              </div>
         </div>
    </main>
<script>
// Sélectionnez l'élément du message de succès
var successMessage = document.getElementById('successMessage');

// Masquez ou supprimez le message après 5 secondes (5000 millisecondes)
if (successMessage) {
    setTimeout(function () {
        successMessage.style.display = 'none'; // Masquer le message
    }, 3000);
}
</script>
</body>

</html>