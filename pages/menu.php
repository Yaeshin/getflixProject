<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Menu</title>
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

<body class="bg-gray-500">
    <?php include "../styles/navBar.php"; ?>



    <script>
        const logo = document.getElementById('logo');
        const categoryGrid = document.getElementById('categoryGrid');

        logo.addEventListener('click', function () {
            // Au clic sur le logo, afficher les catégories
            categoryGrid.classList.toggle('show-categories');
        });
    </script>
</body>

</html>
