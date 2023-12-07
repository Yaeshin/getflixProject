<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="grid min-h-screen   w-75 h-80 grid place-content-center bg-slate-700 shadow-2xl">
        <div class="justify-center border-2  rounded-md border-gray-700 p-7 mt-5 bg-slate-300 flex flex-col drop-shadow-2x shadow-lg shadow-indigo-500/40">
          <div class="max-w-md  my-3  opacity-90">
            <div class="flex justify-center">
              <h1 class="text-2xl text-zinc-600 font-bold">Connexion</h1>
            </div>

            <form class="grid place-content-center" action="" method="get">
              <div class="block ">
                <label class="block text-slate-700 mb-1 mt-5 text-center" for="email">Email</span>
                <input type="email" class="peer mt-1 bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white  focus:border-sky-500" placeholder= "exemple@gmail.com" id="email" name="email"/>
                <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                  Please provide a valid email address.
                </p>
              </div>
              <div class="block ">
                  <label class="block text-slate-700 mb-1 text-center" for="password">Password</label>
                  <input class="bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-sky-500 mt-1" id="inline-password" type="password" placeholder="******************" id="password" name="password">
                  
              </div>
              <div class="mt-5 flex justify-center">
                <button class=" bg-sky-500 hover:bg-sky-700 py-2 px-2 text-xl  mx-auto mt-5 text-white rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-lg shadow-blue-500/50" type="submit" value="Login">
                  Connexion
                </button>
              </div>
              <div class="text-center mt-3">
                  <a href="inscription.php">
                      <p>S'inscrire</p>
                  </a>
              </div>
              <div class="mt-1 text-center">
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