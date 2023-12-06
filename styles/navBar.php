<div class="header">
    <div class="flex items-center">
        <!-- Div contenant la photo de profil et le nom de l'utilisateur -->
        <div class="h-5 w-5 rounded-full overflow-hidden">
            <img src="../img/profile.png" alt="">
        </div>
        <p class="ml-2">Nom de l'utilisateur</p>
    </div>

    <div class="menu-content mt-2">
    <!-- Logo avec menu déroulant -->
        <div class="relative flex items-center" id="categoryNav">
            <img src="../img/logo.png" alt="Logo" class="h-10 cursor-pointer" id="logo">
            <!-- Menu déroulant des catégories -->
            <div class="category-grid" id="categoryGrid">
                <a href="#" class="category-link hover:bg-gray-200">Action</a>
                <a href="#" class="category-link hover:bg-gray-200">Comédie</a>
                <a href="#" class="category-link hover:bg-gray-200">Drame</a>
                <a href="#" class="category-link hover:bg-gray-200">Science-fiction</a>
                <a href="#" class="category-link hover:bg-gray-200">Horreur</a>
                <a href="#" class="category-link hover:bg-gray-200">Animation</a>
                <a href="#" class="category-link hover:bg-gray-200">Fantaisie</a>
                <a href="#" class="category-link hover:bg-gray-200">Romance</a>
                <a href="#" class="category-link hover:bg-gray-200">Documentaire</a>
            </div>
        </div>
    </div>

    <!-- Barre de recherche -->
    <div class="ml-4 flex items-center rounded-full shadow-sm">
        <input type="text" placeholder="Rechercher..." class="px-4 rounded-full focus:outline-none">
    </div>
</div>