<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-800 ">
<div class="flex items-center justify-center h-screen">
        <div class="w-11/12 md:w-2/3 lg:w-1/3 h-5/6 bg-slate-300 p-2 my-5 mx-5 md:mx-auto shadow-2xl border-2 rounded-md bg-slate-300 flex flex-col drop-shadow-2x shadow-lg shadow-indigo-500/40">
            <div class="max-w-md my-3 opacity-90">
            <div class="flex justify-center max-w-md my-3 opacity-90">
              <h1 class="text-2xl text-zinc-600 font-bold">Connexion</h1>
            </div> 

            <form class="grid place-content-center" action="" method="get">
              <div class="block ">
                <label class="block text-slate-700 mb-1 mt-10 text-center" for="email">Email</span>
                <input type="email" class="peer mt-1 bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white  focus:border-sky-500" placeholder= "exemple@gmail.com" id="email" name="email" required autocomplete="on"/>
                <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                  Please provide a valid email address.
                </p>
              </div>
              <div class="block ">
                  <label class="block text-slate-700 mb-1 mt-8 text-center" for="password">Password</label>
                  <input class="bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-sky-500 mt-1" id="inline-password" type="password" placeholder="******************" id="password" name="password">
                  
              </div>
              <div class="mt-5 flex justify-center">
                <button  class=" bg-sky-500 hover:bg-sky-700 py-2 px-2 text-xl  mx-auto mt-10 text-white rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-lg shadow-blue-500/50" type="submit" valeur="connexion">
                  Connexion
                </button>
              </div>
              <div class="text-center mt-10">
                  <a href="inscription.php">
                      <p>S'inscrire</p>
                  </a>
              </div>
              <div class="mt-5 text-center">
                  <a href="">
                      <p>Mot de passe oublié ?</p>
                  </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html> 