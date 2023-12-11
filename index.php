<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Welcome To Play</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        ::-webkit-scrollbar {
            width: 3px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #1f1f1f;
            border-radius: 10px;
        }
    </style>

</head>

<body class="w-screen h-screen bg-gray-600 overflow-x-hidden">
    <div class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-black bg-opacity-50 hidden z-50" id="overlay">
        <div class="bg-gray-700 p-6 rounded max-w-md relative transform transition-transform hover:scale-110" style="pointer-events: auto;">
            <h2 class="text-white text-2xl font-bold mb-4 text-center" id="popupTitle">Se connecter ?</h2>
            <p class="text-white text-xl my-8 text-center mx-6" id="popupDescription">Profiter de tout notre catalogue en vous connectant juste ici.</p>
            <div class="flex justify-around">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mr-2 rounded hover:scale-110" id="popupButton1"><a href="pages/connexion.php">Se connecter</a></button>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-4 px-8 rounded hover:scale-110" id="popupButton2"><a href="index.php">Quitter</a></button>
            </div>
        </div>
    </div>
    <?php include "styles/navAno.php"; ?>
    <main class="flex-1 flex flex-grow flex-col block">
        <div class="w-full h-1/2 flex-grow">
            <div class="flex justify-around p-8">
                <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                    <a href="film.php" id="popupLink" class="block w-full h-full bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                            <span class="text-white text-lg font-bold mb-2">TITRE DU FILM</span>
                            <span class="text-white text-center mx-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat rem, unde ea illum, adipisci nulla cum maxime officia blanditiis rerum nesciunt? Excepturi natus asperiores recusandae nostrum magni voluptate dolorum exercitationem?</span>
                        </div>
                        <img src="../img/test-img1.jpg" alt="Image" class="w-full h-full object-cover">
                    </a>
                </div>
                <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                    <a href="film.php" class="block w-full h-full bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                            <span class="text-white text-lg font-bold mb-2">TITRE DU FILM</span>
                            <span class="text-white text-center mx-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat rem, unde ea illum, adipisci nulla cum maxime officia blanditiis rerum nesciunt? Excepturi natus asperiores recusandae nostrum magni voluptate dolorum exercitationem?</span>
                        </div>
                        <img src="../img/test-img2.jpg" alt="Image" class="w-full h-full object-cover">
                    </a>
                </div>
                <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                    <a href="film.php" class="block w-full h-full bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                            <span class="text-white text-lg font-bold mb-2">TITRE DU FILM</span>
                            <span class="text-white text-center mx-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat rem, unde ea illum, adipisci nulla cum maxime officia blanditiis rerum nesciunt? Excepturi natus asperiores recusandae nostrum magni voluptate dolorum exercitationem?</span>
                        </div>
                        <img src="../img/test-img3.jpg" alt="Image" class="w-full h-full object-cover">
                    </a>
                </div>
                <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                    <a href="film.php" class="block w-full h-full bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                            <span class="text-white text-lg font-bold mb-2">TITRE DU FILM</span>
                            <span class="text-white text-center mx-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat rem, unde ea illum, adipisci nulla cum maxime officia blanditiis rerum nesciunt? Excepturi natus asperiores recusandae nostrum magni voluptate dolorum exercitationem?</span>
                        </div>
                        <img src="../img/test-img4.jpg" alt="Image" class="w-full h-full object-cover">
                    </a>
                </div>
                <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                    <a href="film.php" class="block w-full h-full bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                            <span class="text-white text-lg font-bold mb-2">TITRE DU FILM</span>
                            <span class="text-white text-center mx-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat rem, unde ea illum, adipisci nulla cum maxime officia blanditiis rerum nesciunt? Excepturi natus asperiores recusandae nostrum magni voluptate dolorum exercitationem?</span>
                        </div>
                        <img src="../img/test-img1.jpg" alt="Image" class="w-full h-full object-cover">
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full h-1/2 flex-grow">
            <div class="flex justify-around p-8">
                <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                    <a href="film.php" class="block w-full h-full bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                            <span class="text-white text-lg font-bold mb-2">TITRE DU FILM</span>
                            <span class="text-white text-center mx-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat rem, unde ea illum, adipisci nulla cum maxime officia blanditiis rerum nesciunt? Excepturi natus asperiores recusandae nostrum magni voluptate dolorum exercitationem?</span>
                        </div>
                        <img src="../img/test-img1.jpg" alt="Image" class="w-full h-full object-cover">
                    </a>
                </div>
                <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                    <a href="film.php" class="block w-full h-full bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                            <span class="text-white text-lg font-bold mb-2">TITRE DU FILM</span>
                            <span class="text-white text-center mx-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat rem, unde ea illum, adipisci nulla cum maxime officia blanditiis rerum nesciunt? Excepturi natus asperiores recusandae nostrum magni voluptate dolorum exercitationem?</span>
                        </div>
                        <img src="../img/test-img3.jpg" alt="Image" class="w-full h-full object-cover">
                    </a>
                </div>
                <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                    <a href="film.php" class="block w-full h-full bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                            <span class="text-white text-lg font-bold mb-2">TITRE DU FILM</span>
                            <span class="text-white text-center mx-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat rem, unde ea illum, adipisci nulla cum maxime officia blanditiis rerum nesciunt? Excepturi natus asperiores recusandae nostrum magni voluptate dolorum exercitationem?</span>
                        </div>
                        <img src="../img/test-img2.jpg" alt="Image" class="w-full h-full object-cover">
                    </a>
                </div>
                <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                    <a href="film.php" class="block w-full h-full bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                            <span class="text-white text-lg font-bold mb-2">TITRE DU FILM</span>
                            <span class="text-white text-center mx-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat rem, unde ea illum, adipisci nulla cum maxime officia blanditiis rerum nesciunt? Excepturi natus asperiores recusandae nostrum magni voluptate dolorum exercitationem?</span>
                        </div>
                        <img src="../img/test-img1.jpg" alt="Image" class="w-full h-full object-cover">
                    </a>
                </div>
                <div class="w-64 h-96 mx-5 relative overflow-hidden rounded-lg transform transition-transform hover:scale-105">
                    <a href="film.php" class="block w-full h-full bg-cover bg-center relative">
                        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 hover:opacity-90 flex flex-col justify-center items-center">
                            <span class="text-white text-lg font-bold mb-2">TITRE DU FILM</span>
                            <span class="text-white text-center mx-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat rem, unde ea illum, adipisci nulla cum maxime officia blanditiis rerum nesciunt? Excepturi natus asperiores recusandae nostrum magni voluptate dolorum exercitationem?</span>
                        </div>
                        <img src="../img/test-img4.jpg" alt="Image" class="w-full h-full object-cover">
                    </a>
                </div>
            </div>
        </div>
    </main>

    <script>
        const link = document.getElementById('popupLink');
        const overlay = document.getElementById('overlay');
        const closeButton = document.getElementById('popupButton1');

        function openPopup(event) {
            event.preventDefault();
            overlay.classList.remove('hidden');
        }

        link.addEventListener('click', openPopup);

        function closePopup() {
            overlay.classList.add('hidden');
        }

        closeButton.addEventListener('click', closePopup);
    </script>


</body>

</html>