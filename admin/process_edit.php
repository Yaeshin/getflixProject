<?php
include '../config.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $id_movie = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $trailer = $_POST['trailer'];
    $release_date = $_POST['release_date'];
    $categories = $_POST['categories'];

    // Préparez et exécutez la requête de mise à jour
    $stmt = $conn->prepare("UPDATE movies SET title=?, description=?, image=?, trailer=?, release_date=?, categories=? WHERE id_movie=?");
    $stmt->bind_param("ssssssi", $title, $description, $image, $trailer, $release_date, $categories, $id_movie);

    if ($stmt->execute()) {
        // Mise à jour réussie, redirigez vers la page principale ou une autre page
        header('Location: gestionFilms.php');
        exit();
    } else {
        // Gestion des erreurs
        echo "Erreur lors de la mise à jour : " . $stmt->error;
    }

    // Fermer la connexion
    $stmt->close();
    $conn->close();
} else {
    // Rediriger vers la page principale si le formulaire n'a pas été soumis
    header('Location: gestionFilms.php');
    exit();
}
?>
