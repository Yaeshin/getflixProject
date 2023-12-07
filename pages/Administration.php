<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-700">
    <div class="flex">
        <!-- Insertion de la navbar -->
        <?php include_once("./../styles/navAdmin.php"); ?>

        <div class="flex-grow bg-slate-300 p-6 m-6 ms-0 ">
    <h1 class="text-black text-center text-2xl pt-4">Administration</h1>
    <div class="grid grid-cols-2 grid-rows-2 gap-4 wrap-2 m-8 ps-8 pt-10 content-center">
        <div class="bg-white p-6 m-6 h-[12rem] w-[75%]"> <!-- 3 times the default height (3rem) -->
            <h3 class="text-xl">Membres</h3>
            <span class=" text-7xl text-center block">13</span>
        </div>
        <div class="bg-white p-6 m-6 h-[12rem] w-[75%]"> <!-- 3 times the default height (3rem) -->
            <h3 class="text-xl">Films</h3>
            <span class=" text-7xl text-center block">301</span>
        </div>
        <div class="bg-white p-6 m-6 h-[12rem] w-[75%]"> <!-- 3 times the default height (3rem) -->
            <h3 class="text-xl">Commentaires</h3>
            <span class=" text-7xl text-center block">2144</span>
        </div>
        <div class="bg-white p-6 m-6 h-[12rem] w-[75%]"> <!-- 3 times the default height (3rem) -->
            <h3 class="text-xl">Contact</h3>
            <span class=" text-7xl text-center block">2</span>
        </div>
    </div>
</div>
    </div> 
</body>
</html>