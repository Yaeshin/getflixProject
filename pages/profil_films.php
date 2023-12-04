<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Films</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            margin: 0;
        }

        .header {
            width: 100%;
            background-color: #2d2d2d;
            color: #fff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: baseline;
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
    </style>
</head>
<body class="min-h-screen bg-slate-700">
    
    <head class="">
    <?php include "../styles/navBar.php"; ?>
    </head>
    


<section class=" grid grid-cols-3  gap-4  place-content-center h-auto m-4 container   ">
    <aside class=" grid grid-rows-3 gap-4">
        <div class=" relative top-0 border-2 border-slate-700 bg-slate-100">
            <img class="" src="./../img/test-img1.jpg" alt="affiche du film" >
        </div>
        <div class="row-span-2 border-2 border-slate- p-2 bg-slate-100">
            <h2 class="">Titre</h2>
            <br>
            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi veritatis error odio maxime soluta corporis sunt fugit amet sapiente eum et dignissimos, nihil totam, sed accusamus debitis perspiciatis accusantium</p>
        </div>
    </aside>
    <main class="col-span-2 border-2 border-slate-700 bg-slate-100">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex consequuntur quo impedit alias sunt. Ipsam aperiam minus nam laudantium consequuntur veniam ad aut cum sit possimus dignissimos, quis placeat nostrum.

        </p>
    </main>
</section>

</body>
</html>