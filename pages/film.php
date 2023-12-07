<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="w-screen h-screen bg-gray-600 overflow-hidden flex flex-col">
    <header class="h-10vh flex items-center justify-between p-4 bg-gray-800">
        <!-- Left side with photo and name -->
        <div class="flex items-center">
            <img src="../img/test-img2.jpg" alt="img" class="w-12 h-12 object-cover rounded-full">
            <p class="ml-2 text-white text-lg font-bold">John Doe</p>
        </div>

        <!-- Center with logo -->
        <div class="flex items-center">
            <!-- Your logo -->
            <img src="../img/logo.png" alt="Logo" class="w-10">
        </div>

        <!-- Right side with search bar -->
        <div class="flex items-center">
            <input type="text" placeholder="Search..." class="px-2 py-1 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500">
            <button class="ml-2 px-3 py-1 bg-blue-500 text-white rounded">Search</button>
        </div>
    </header>
    <main class="flex-1 flex flex-row">
            <div class="w-1/4 h-4/4 flex items-stretch pb-5">
                <img src="../img/test-img2.jpg" alt="img" class="object-cover w-full h-9/10 rounded-2xl p-3">
            </div>
            <div class="w-3/4 h-4/4 flex flex-col relative m-3">
                <div class="flex h-2/3">
                    <div class="w-1/2 h-full rounded-2xl">
                        <div class="h-5/6 bg-gray-300 rounded-2xl">
                            <h2 class="text-3xl font-bold text-center">Titre du Film</h2>
                            <div class="flex flex-col justify-center">
                                <p class="text-2xl mx-5 my-2">Date de sortie: 12/12/2012</p>
                                <p class="text-2xl mx-5 my-2">Genres: Action, Aventure</p>
                                <p class="text-2xl mx-5 my-2">Durée: 144 minutes</p>
                                <p class="text-xl mx-5 my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab nobis perferendis porro. Nisi numquam repudiandae quibusdam quis. Voluptatum modi similique aut consectetur dolores. Dolores minus assumenda asperiores aperiam aut alias?</p>
                            </div>
                        </div>
                        <div class="h-1/6 flex justify-center py-2">
                            <div class="flex items-center justify-center gap-44">
                                <button class="flex flex-row bg-blue-500 rounded-lg items-center py-2 px-3">
                                    <img src="../img/like.png" alt="like" class="w-1/4">
                                    <p class="text-2xl font-bold text-center">33</p>
                                </button>
                                <button class="flex flex-row bg-red-500 rounded-lg items-center py-2 px-3">
                                    <img src="../img/dislike.png" alt="dislike" class="w-1/4">
                                    <p class="text-2xl font-bold text-center">5</p>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="w-1/2 h-full flex flex-col rounded-xl ml-6">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allowfullscreen class="rounded-xl h-5/6 w-full"></iframe>
                        <form class="flex flex-row w-6/6 h-1/6 py-6">
                            <input type="text" class="w-5/6 h-1/1 border rounded-xl px-2 focus:outline-none focus:ring focus:border-blue-500 mr-1 my-5" placeholder="Votre commentaire...">
                            <button type="submit" class="w-1/6 h-1/1 bg-blue-500 text-white rounded-xl ml-1 my-5">Envoyer</button>
                        </form>
                    </div>
                </div>
                <div class="h-1/3 overflow-y-auto pt-1 custom-scroll">
                    <div class="flex flex-col bg-gray-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>
                    <div class="flex flex-col bg-gray-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>
                    <div class="flex flex-col bg-gray-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>
                    <div class="flex flex-col bg-gray-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>
                    <div class="flex flex-col bg-gray-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>
                    <div class="flex flex-col bg-gray-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>
                    <div class="flex flex-col bg-gray-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>
                    <div class="flex flex-col bg-gray-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>
                    <div class="flex flex-col bg-gray-800 rounded-2xl px-2 py-1 my-2 mx-1">
                        <h2 class="text-white text-xl">Name</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit voluptatum voluptate corporis nihil reiciendis quas cumque expedita, iure in atque culpa quis, ad veniam amet asperiores iusto. Veritatis, tempora.</p>
                    </div>

                </div>

            </div>
        </div>
    </main>




</body>

</html>
