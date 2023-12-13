<?php session_start();
if (empty($_SESSION['user'])) {
    header("Location: ../index.php");
    die();
}
if ($_SESSION['role'] == 'm') {
    header("Location: ../pages/menu.php");
    die();
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Layout avec Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-700 ">
    <div class="flex">
          <!-- Insertion de la navbar -->
        <?php include "../styles/navAdmin.php"; ?>
        <section class="w-4/5 m-5 p-8 bg-neutral-200 rounded-md flex-grow">
        <h1 class="text-black text-center text-2xl pt-4">Administration</h1>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 wrap-2 m-8 ps-8 pt-10 content-center">
                <div class=" p-6 m-6 h-[12rem] w-[75%] rounded-md bg-rose-400"> <!-- 3 times the default height (3rem) -->
                    <h3 class="text-xl">Membres</h3>
                    <output class=" text-7xl text-center block ">13</output>
                </div>
                <div class=" p-6 m-6 h-[12rem] w-[75%] rounded-md bg-yellow-300"> <!-- 3 times the default height (3rem) -->
                    <h3 class="text-xl">Films</h3>
                    <output class=" text-7xl text-center block rounded-sm">301</output>
                </div>
                <div class=" p-6 m-6 h-[12rem] w-[75%] rounded-md bg-teal-400"> <!-- 3 times the default height (3rem) -->
                    <h3 class="text-xl">Commentaires</h3>
                    <output class=" text-7xl text-center block rounded-sm">2144</output>
                </div>
                <div class=" p-6 m-6 h-[12rem] w-[75%] rounded-md bg-green-400 hover:backdrop-opacity-100"> <!-- 3 times the default height (3rem) -->
                    <h3 class="text-xl">Contact</h3>
                    <output class=" text-7xl text-center block rounded-sm">2</output>
                </div>
        </section>
    </div>
</body>

</html>
