<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Layout avec Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-700 flex">
    <?php include "../styles/navAdmin.php"; ?>
    <section class="w-4/5 m-5 p-8 bg-neutral-200 rounded-md">
    <div class="h-full max-w-md bg-white shadow-md rounded p-6">
        <h1 class="text-xl mb-2">Titre</h1>
        <input class="border border-gray-300 rounded-md py-2 px-3 mb-4 w-full" type="text" value="titre" />
        
        <!-- Nouvel input pour la description -->
        <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
        <textarea class="border border-gray-300 rounded-md py-2 px-3 mb-4 w-full h-5/6 resize-none" rows="4" placeholder="Votre description ici...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quisquam laudantium ipsa sunt iusto harum perspiciatis error doloribus quidem nam accusantium, repellat quo dolore. Consectetur qui rem officiis facere fugit!</textarea>
    </div>
    </section>
</body>

</html>
