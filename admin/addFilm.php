<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Layout avec Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-700 flex">
    <?php include "../styles/navAdmin.php"; ?>
    <section class="w-4/5 m-5 p-8 bg-neutral-200 rounded-md flex justify-center items-center">
    <div class="w-full max-w-md">
        <form class="w-full max-w-md">
            <!-- Première partie du formulaire -->
            <div class="m-5 pb-3 flex items-center">
                <input
                    class="w-full border rounded py-2 px-3 mr-2 focus:outline-none focus:shadow-outline"
                    type="text"
                    placeholder="Movie Name..."
                />
                <button class="bg-blue-400 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Ajouter
                </button>
            </div>

  
            <div class="flex items-center mb-2">
                <div class="w-1/2">
                    <img class="w-16 h-16 object-cover rounded-full mr-4" src="lien_vers_votre_image.jpg" alt="Photo" />
                </div>
                <div class="w-1/2">
                    <div class="pt-3">
                        <h3 class="text-lg font-semibold pt-3">Titre</h3>
                        <p class="text-gray-600">Description du Film</p>
                        <p class="text-gray-600">Url du Film</p>
                    </div>
                    <div class="flex justify-center pt-3">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Valider</button>
                    </div>
                </div>
            </div>


        </form>
    </div>

    </section>
</body>

</html>
