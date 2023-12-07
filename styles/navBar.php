<div class="w-screen h-36 header">
    <div class="h-36 flex items-center">
        <!-- Div contenant la photo de profil et le nom de l'utilisateur -->
        <div class="h-5 w-5 rounded-full overflow-hidden">
            <img src="../img/profile.png" alt="">
        </div>
        <p class="ml-2">Nom de l'utilisateur</p>
    </div>

    <div class="menu-content">
        <div class="relative flex items-center" id="categoryNav">
            <img src="../img/logo.png" alt="Logo" class="h-14 cursor-pointer" id="logo">
            <div class="category-grid h-52 fixed" id="categoryGrid">
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
    <div class="h-36 ml-4 flex items-center rounded-full shadow-sm">
        <input type="text" placeholder="Rechercher..." class="px-4 rounded-full focus:outline-none">
    </div>
</div>