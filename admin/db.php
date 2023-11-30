<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "getflix";
try {
$conn = new mysqli($servername, $username, $password, $dbname);
echo 'connexion ok';
}
catch (Exception $e) {
    echo $e->getMessage();
}
if($conn->connect_error){
    die("La connexion à la base de données à échoué :" . $conn->connect_error);
// Fermer la connexion à la base de données
$conn->close();
}
?>