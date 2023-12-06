<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            margin: 0;
        }

        .header {
            width: 100%;
            background-color: #2d2d2d;
            color: #fff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
        .custom-scroll::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scroll::-webkit-scrollbar-thumb {
            background-color: #ccc; /* Couleur de la barre de défilement */
            border-radius: 3px; /* Bord arrondi de la barre de défilement */
        }

    </style>
</head>

<body class="bg-gray-600 overflow-hidden">
    <div class="w-full h-full">
        <?php include "../styles/navBar.php"; ?>
    </div>
    <main class="w-full h-full flex flex-row">
            <div class="w-1/4 flex items-stretch pb-5">
                <img src="../img/test-img2.jpg" alt="img" class="object-cover w-full h-9/10 rounded-2xl p-3">
            </div>
            <div class="w-3/4 h-4/4 flex flex-col relative m-3">
                <div class="flex h-2/3">
                    <div class="w-1/2 h-full bg-gray-300 rounded-2xl">
                        <h2 class="text-3xl font-bold m-6 text-center">Titre du Film</h2>
                        <div class="flex flex-col justify-center">
                            <p class="text-2xl mx-5 my-2">Date de sortie: 12/12/2012</p>
                            <p class="text-2xl mx-5 my-2">Genres: Action, Aventure</p>
                            <p class="text-2xl mx-5 my-2">Durée: 144 minutes</p>
                            <p class="text-xl mx-5 my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab nobis perferendis porro. Nisi numquam repudiandae quibusdam quis. Voluptatum modi similique aut consectetur dolores. Dolores minus assumenda asperiores aperiam aut alias?</p>
                        </div>
                    </div>
                    <div class="w-1/2 h-full flex flex-col rounded-xl ml-6">
                        <iframe width="100%" height="450" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allowfullscreen class="rounded-xl"></iframe>
                        <form class="flex flex-row w-6/6 h-1/1 py-2">
                            <input type="text" class="w-5/6 h-1/1 border rounded-xl px-2 focus:outline-none focus:ring focus:border-blue-500 mr-1 p-2" placeholder="Votre commentaire...">
                            <button type="submit" class="w-1/6 h-1/1 bg-blue-500 text-white rounded-xl ml-1 p-2">Envoyer</button>
                        </form>
                    </div>
                </div>
                <div class="h-52 overflow-y-auto pt-1 custom-scroll">
                    <div class="flex flex-col bg-zinc-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>
                    <div class="flex flex-col bg-zinc-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>
                    <div class="flex flex-col bg-zinc-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>
                    <div class="flex flex-col bg-zinc-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>

                </div>

            </div>
        </div>
    </main>




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
