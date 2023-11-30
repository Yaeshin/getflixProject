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
        <div class="flex justify-center items-center">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-8 py-4 text-center">Name</th>
                        <th class="px-8 py-4 text-center">Description</th>
                        <th class="px-8 py-4 text-center">Release Date</th>
                        <th class="px-8 py-4 text-center">Category</th>
                        <th class="px-8 py-4 text-center">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="pb-5">
                        <td class="px-8 py-4 text-center">Star Wars</td>
                        <td class="px-8 py-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, distinctio! Illum inventore nobis eum sequi, atque magnam asperiores dolorum ratione ipsum delectus eligendi fugit illo exercitationem quis eaque saepe mollitia.</td>
                        <td class="px-8 py-4 text-center">12-12-1974</td>
                        <td class="px-8 py-4 text-center">Action - Aventure</td>
                        <td class="px-4 py-2 text-center"><a href="#" class="action-link text-white bg-orange-600 rounded-lg p-2">Edit</a></td>
                    </tr>
                    <tr class="pb-5">
                        <td class="px-8 py-4 text-center">Harry Potter</td>
                        <td class="px-8 py-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, distinctio! Illum inventore nobis eum sequi, atque magnam asperiores dolorum ratione ipsum delectus eligendi fugit illo exercitationem quis eaque saepe mollitia.</td>
                        <td class="px-8 py-4 text-center">12-11-97</td>
                        <td class="px-8 py-4 text-center">Fantastique - Aventure</td>
                        <td class="px-4 py-2 text-center"><a href="#" class="action-link text-white bg-orange-600 rounded-lg p-2">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>
</body>

</html>
