<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Layout avec Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-700 flex h-screen overflow-hidden">
    <?php include "../styles/navAdmin.php"; ?>
    <section class="w-4/5 m-5 p-8 bg-neutral-200 rounded-md overflow-auto h-95vh">
        <h1 class="text-center text-2xl pb-6">Gestion Commentaires</h1>
        <div class="flex justify-center items-center">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-8 py-4 text-center">Email</th>
                        <th class="px-8 py-4 text-center">Author</th>
                        <th class="px-8 py-4 text-center">Date</th>
                        <th class="px-8 py-4 text-center">Movie</th>
                        <th class="px-8 py-4 text-center">Message</th>
                        <th class="px-8 py-4 text-center">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="pb-5">
                        <td class="px-8 py-4 text-center">exemple@test.com</td>
                        <td class="px-8 py-4 text-center">Player21</td>
                        <td class="px-8 py-4 text-center">12/08/2013</td>
                        <td class="px-8 py-4 text-center">Star Wars</td>
                        <td class="px-8 py-4 text-center">J'adore Star Wars !!!</td>
                        <td class="px-4 py-2 text-center"><a href="#" class="action-link text-white bg-red-500 rounded-lg p-2">Delete</a></td>
                    </tr>
                    <tr class="pb-5">
                        <td class="px-8 py-4 text-center">exemple@test.com</td>
                        <td class="px-8 py-4 text-center">Player2112</td>
                        <td class="px-8 py-4 text-center">17/03/2021</td>
                        <td class="px-8 py-4 text-center">Harry Potter</td>
                        <td class="px-8 py-4 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis rem nesciunt incidunt cumque ex earum aperiam facere nostrum? Libero veniam minima corrupti maxime ipsum. Nostrum provident aut itaque ut repudiandae.</td>
                        <td class="px-4 py-2 text-center"><a href="#" class="action-link text-white bg-red-500 rounded-lg p-2">Delete</a></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
