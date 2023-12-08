<?php
include 'sectionPopulaire.php';
?>

<!-- Contenu de la deuxième section "Populaires" -->
<div class="w-full h-1/2 flex-grow">
    <h1 class="w-full h-10vh text-white bg-gray-700 text-4xl text-center py-4">Films populaires</h1>
    <div class="flex justify-around p-8">
        <?php foreach ($movies2 as $movie): ?>
            <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                <a href="filmPop.php?id=<?php echo $movie['id']; ?>" class="block w-full h-full bg-cover bg-center relative"> 
                    <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                        <span class="text-white text-lg font-bold mb-2"><?php echo "{$movie['title']}"; ?></span>
                        <span class="text-white text-center mx-5"><?php echo $movie['overview']; ?></span>
                    </div>
                    <img src="https://image.tmdb.org/t/p/w500<?php echo $movie['poster_path']; ?>" alt="<?php echo $movie['title']; ?>" class="w-full h-full object-cover">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
