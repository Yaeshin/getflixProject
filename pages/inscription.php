<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="grid min-h-screen h-80 grid place-content-center bg-slate-700 shadow-2xl">
    <div class="justify-center border-2  rounded-md border-gray-700 p-7 mt-5 bg-slate-300 flex flex-col drop-shadow-2x shadow-lg shadow-indigo-500/40">
          <div class="max-w-md  my-3  opacity-90 mx-10">
            <div class="flex justify-center">
              <h1 class="text-2xl text-zinc-600 font-bold">Inscription</h1>
            </div>
            <form class="grid place-content-center" action="auth.php?action=register" method="post">
            <div class="block ">
                <label class="block text-slate-700 mb-1  mt-5 text-center" for="email_inscription">Email</label>
                <input type="email" class="peer mt-1 bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white  focus:border-sky-500" placeholder= "exemple@gmail.com" id="email" name="email" required/>
                <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                  Please provide a valid email address.
                </p>
              </div>
          <div class="block ">
              <label class="block text-slate-700 mb-1 text-center" for="pseudo_inscription">Pseudo</label>
              <input type="text" class="peer mt-1 bg-slate-50 peer appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white  focus:border-sky-500" placeholder= "Joe" id="username" name="username" required/>
            </div>
            <div class="block ">
              <label class="block text-slate-700 mb-1 text-center" for="password_inscription">Password</label>
              <input class="bg-slate-50 peer appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-sky-500 mt-1" type="password" placeholder="******************" id="password" name="password" required>
              
            </div>
            <div class="block ">
              <label class="block text-slate-700 mb-1 text-center mt-3"> Confirmation Password</label>
              <input class="bg-slate-50 peer appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-sky-500 mt-1" id="pwConfirm" type="password" placeholder="******************" name="pwConfirm" required>
              
            </div>
              <div class="mt-5 flex justify-center">
                <button type="submit" name="register" value="Register" class=" bg-sky-500 hover:bg-sky-700 py-2 px-3 text-xl  mx-auto mt-5 text-white rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-lg shadow-blue-500/50">
                  S'inscrire
                </button>
              </div>
              
            </div>
            <div class="mt-1 text-center">
              <a href="auth.php?action=login">
                    <p>Connexion</p>
              </a>
            </div>

         
        </form>
      </div>
      </div>
</body>
</html>