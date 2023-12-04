<?php
include '../config.php';

// Exécuter une requête SQL
$resultat = $conn->query("SELECT * FROM movies");

// Vérifier si la requête a réussi
if (!$resultat) {
    die("Échec de la requête SQL : " . $conn->error);
}

// while ($ligne = $resultat->fetch_assoc()) {
//     echo "Titre : " . $ligne['title'] . "<br>";
//     echo "Description : " . $ligne['description'] . "<br>";
//     echo "Release : " . $ligne['release_date'] . "<br>";
//     echo "Catégories : " . $ligne['categories'] . "<br>";
//}

// Afficher le début du tableau
echo '<table>';

// Afficher l'en-tête du tableau
echo '<tr class="pb-5">
        <th class="px-8 py-4 text-center">Titre</th>
        <th class="px-8 py-4 text-center">Description</th>
        <th class="px-8 py-4 text-center">Date de sortie</th>
        <th class="px-8 py-4 text-center">Catégories</th>
        <th class="px-4 py-2 text-center">Action</th>
      </tr>';

// Afficher les données du tableau
while ($ligne = $resultat->fetch_assoc()) {
    echo '<tr class="pb-5">';
    echo '<td class="px-8 py-4 text-center">' . $ligne['title'] . '</td>';
    echo '<td class="px-8 py-4 text-center">' . $ligne['description'] . '</td>';
    echo '<td class="px-8 py-4 text-center">' . $ligne['release_date'] . '</td>';
    echo '<td class="px-8 py-4 text-center">' . $ligne['categories'] . '</td>';
    echo '<td class="px-4 py-2 text-center"><a href="editerFilms.php" class="action-link text-white bg-orange-600 rounded-lg p-2">Edit</a></td>';
    echo '</tr>';
}

// Fermer la connexion à la base de données
$conn->close();
?>
