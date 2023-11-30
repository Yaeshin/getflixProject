<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Layout avec Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-700 flex">
    <?php include "../styles/navAdmin.php"; ?>
    <section class="flex flex-row w-4/5 m-5 p-8 bg-neutral-200 rounded-md">
        <div class="flex-1 h-full max-w-md bg-white shadow-md rounded p-6">
            <h1 class="text-xl mb-2 my-8">Titre</h1>
            <input class="border border-gray-300 rounded-md py-2 px-3 mb-8 w-full" type="text" value="titre" />
            
            <label class="block text-xl text-gray-700 mb-2">Description</label>
            <textarea class="border border-gray-300 rounded-md px-3 mb-4 w-full h-4/6 resize-none" rows="4" placeholder="Votre description ici...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quisquam laudantium ipsa sunt iusto harum perspiciatis error doloribus quidem nam accusantium, repellat quo dolore. Consectetur qui rem officiis facere fugit!</textarea>
        </div>
        <div class="flex-1 flex flex-col">
            <div class="flex-1 h-3/5 bg-white shadow-md rounded p-6 ml-5">
                <div class="my-8">
                    <h1 class="text-xl mb-2">Image</h1>
                    <div class="flex justify-center items-center">
                        <input class="border border-gray-300 rounded-md py-2 px-3 w-full" type="text" value="https://img" />
                    </div>
                </div>
                <div class="my-8">
                    <h1 class="text-xl mb-2">Vidéo</h1>
                    <div class="flex justify-center items-center">
                        <input class="border border-gray-300 rounded-md py-2 px-3 w-full" type="text" value="https://www.youtube.com/watch?v=dQw4w9WgXcQ" />
                    </div>
                </div>
                <div class="flex flex-row content-center my-8">
                    <div class="flex flex-col mr-4 w-1/2">
                        <label class="text-xl mb-2">Date</label>
                        <input class="border border-gray-300 rounded-md py-2 px-3 mb-4 w-full" type="text" placeholder="Entrez la date" value="12/12/2012" />
                    </div>
                    <div class="flex flex-col w-1/2">
                        <label class="text-xl mb-2">Category</label>
                        <input class="border border-gray-300 rounded-md py-2 px-3 w-full" type="text" placeholder="Entrez la catégorie" value="Action, Aventure" />
                    </div>
                </div>
            </div>
            <div class="flex flex-row items-center justify-around mt-8 pb-8">
                <button class="text-3xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-5 px-8 rounded">
                    Save
                </button>
                <button class="text-3xl bg-red-500 hover:bg-red-700 text-white font-bold py-5 px-8 rounded">
                    Delete
                </button>
            </div>

        </div>
        


    </section>

</body>

</html>
