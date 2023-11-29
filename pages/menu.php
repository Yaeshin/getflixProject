<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            margin: 0;
        }

        .header {
            width: 100%;
            background-color: #2d2d2d;
            color: #fff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: baseline;
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
    </style>
</head>

<body class="bg-gray-500">
    <div class="header">
        <div class="flex items-center">
            <!-- Div contenant la photo de profil et le nom de l'utilisateur -->
            <div class="h-10 w-10 rounded-full overflow-hidden">
                <img src="../img/profile.png" alt="">
            </div>
            <p class="ml-2">Nom de l'utilisateur</p>
        </div>

        <div class="menu-content mt-4">
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
        <div class="ml-4 flex items-center bg-white rounded-full shadow-sm">
            <input type="text" placeholder="Rechercher..." class="py-2 px-4 rounded-full focus:outline-none">
        </div>
    </div>



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
