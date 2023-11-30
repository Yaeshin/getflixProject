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
    <h1 class="text-center text-2xl pb-6">Gestion des Membres</h1>
    <div class="flex justify-center items-center">
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-8 py-4 text-center">Name</th>
                    <th class="px-8 py-4 text-center">Email</th>
                    <th class="px-8 py-4 text-center">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr class="pb-5">
                    <td class="px-8 py-4 text-center">Timmy</td>
                    <td class="px-8 py-4 text-center">exemple@test.com</td>
                    <td class="px-4 py-2 text-center"><a href="#" class="action-link text-white bg-red-500 rounded-lg p-2">Delete</a></td>
                </tr>
                <tr class="pb-5">
                    <td class="px-8 py-4 text-center">Timmy</td>
                    <td class="px-8 py-4 text-center">exemple@test.com</td>
                    <td class="px-4 py-2 text-center"><a href="#" class="action-link text-white bg-red-500 rounded-lg p-2">Delete</a></td>
                </tr>
                <!-- Autres lignes du tableau -->
            </tbody>
        </table>
    </div>

    </section>

</body>

</html>
