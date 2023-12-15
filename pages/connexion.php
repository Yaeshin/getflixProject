<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex items-center justify-center h-screen bg-gray-800">
        <div class=" lg:w-1/3 w-2/3 md:w-4/6 bg-gray-300 p-2 my-10 mx-auto shadow-2xl border-2 rounded-md bg-gray-300 flex flex-col drop-shadow-2x shadow-lg shadow-indigo-500/40">
            <div class="max-w-md my-3 opacity-90 mx-auto">
                <div class="flex justify-center max-w-md my-3 opacity-90">
                    <h1 class="text-2xl text-zinc-600 font-bold">Connexion</h1>
                </div>
                <!-- Debut du formulaire -->
                <form class="grid place-content-center" method="post">
                    <div class="block ">
                        <label class="block text-slate-700 mb-1 mt-10 sm:mt-10 text-center" for="email">Email</label>
                        <input type="email" class="peer mt-1 bg-slate-50 peer appearance-none    w-full py-2 text-gray-700 leading-tight px-2 py-1 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500" placeholder="exemple@gmail.com" id="email" name="email" required autocomplete="on">
                        <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                            Please provide a valid email address.
                        </p>
                    </div>
                    <div class="block ">
                        <label class="block text-slate-700 mb-1 mt-10 sm:mt-8 text-center" for="password">Mot de passe</label>
                        <input class="bg-slate-50 peer appearance-none mt-1 bg-slate-50 peer appearance-none    w-full py-2 px-2 text-gray-700 leading-tight px-2 py-1 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500" type="password" placeholder="******************" id="password" name="password">
                    </div>
                    <div class="mt-10 sm:mt-10 flex justify-center">
                        <button class="bg-sky-500 hover:bg-sky-700 py-1 px-3 text-xl mx-auto mt-10 text-white rounded transition ease-in-out delay-150 bg-blue-600 hover:-translate-y-1 hover:scale-110 hover:bg-blue-80000 duration-300 shadow-lg shadow-blue-500/50" type="submit" value="Login">
                            Connexion
                        </button>
                    </div>
                    <div class="text-center mt-10 sm:mt-10">
                        <a href="auth.php?action=register" class="hover:text-blue-500 hover:underline hover:decoration-2
                                hover:text-blue-500 hover:font-bold">
                            <p>S'inscrire</p>
                        </a>
                    </div>
                    <div class="mt-8 text-center">
                        <a href="" class="hover:text-blue-500 hover:underline hover:decoration-2 hover:text-blue-500 hover:font-bold">
                            <p>Mot de passe oublié ?</p>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>