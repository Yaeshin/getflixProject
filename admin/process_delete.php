<?php
include '../config.php';

// Vérifier si l'ID est passé en tant que POST
if (isset($_POST['id'])) {
    $id_movie = $_POST['id'];

    // Préparez et exécutez la requête de suppression
    $stmt = $conn->prepare("DELETE FROM movies WHERE id_movie = ?");
    $stmt->bind_param("i", $id_movie);

    if ($stmt->execute()) {
        // Suppression réussie, redirigez vers la page principale ou une autre page
        header('Location: gestionFilms.php');
        exit();
    } else {
        // Gestion des erreurs
        echo "Erreur lors de la suppression : " . $stmt->error;
    }

    // Fermer la connexion
    $stmt->close();
    $conn->close();
} else {
    // Rediriger vers la page principale si l'ID n'est pas spécifié
    header('Location: gestionFilms.php');
    exit();
}
?>
