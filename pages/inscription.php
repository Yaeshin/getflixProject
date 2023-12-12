<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="flex items-center h-screen justify-center bg-gray-800 shadow-2xl">
    <div class="w-full">
      <div class="">
        <div class="max-w-md my-3 opacity-90">
          <div class="flex justify-center">
            <h1 class="text-2xl text-zinc-600 font-bold lg:tracking-widest">Inscription</h1>
          </div>
          <form class="grid place-content-center" action="auth.php?action=register" method="post">
            <div class="block ">
              <label class="block text-slate-700 mb-1  mt-5 text-center lg:tracking-wider" for="email_inscription">Email</label>
              <input type="email" class="peer mt-1 bg-slate-50 appearance-none w-full  lg:scale-x-150 text-gray-700 leading-tight px-2 py-2 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500 " placeholder="exemple@gmail.com" id="email_inscription" name="email" required>
              <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                  Please provide a valid email address.</p>
            </div>
            <div class="block ">
              <label class="block text-slate-700 mb-1 text-center lg:tracking-wider" for="pseudo_inscription">Pseudo</label>
              <input type="text" class="peer mt-1 bg-slate-50 peer appearance-none w-full text-gray-700 leading-tight  focus:bg-white lg:scale-x-150 px-2 py-2 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500" placeholder="Joe" id="pseudo_inscription" name="username" required>
            </div>
            <div class="block ">
              <label class="block text-slate-700 mt-5 text-center lg:tracking-wider mb-1" for="password_inscription">Mot de passe</label>
              <input class="bg-slate-50 peer appearance-none  w-full text-gray-700 leading-tight px-2 py-2 rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500 lg:scale-x-150" type="password" placeholder="******************" id="password_inscription" name="password" required>
            </div>
            <div class="block ">
              <label class="block text-slate-700 mb-1 text-center mt-5 lg:tracking-wider"> Mot de passe</label>
              <input class="bg-slate-50 peer appearance-none border-2 border-gray-200 rounded w-full p text-gray-700 leading-tight px-2 py-2 focus:outline-none focus:ring focus:border-blue-500 mt-1  lg:scale-x-150" id="pwConfirm" type="password" placeholder="******************" name="pwConfirm" required>
            </div>
            <div class="mt-5 flex justify-center">
              <button type="submit" name="register" value="Register" class=" bg-sky-500 hover:bg-sky-700 py-2 px-3 text-xl  mx-auto mt-5 text-white rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-lg shadow-blue-500/50  lg:px-10 lg:tracking-wider">
                  S'inscrire
              </button>
            </div>
            <div class="mt-1 text-center">
              <a href="auth.php?action=login" class="hover:text-blue-500 hover:underline hover:underline-offset-2 hover:text-blue-500 hover:font-bold hover:decoration-2">
              <p class="lg:tracking-wider">Connexion</p>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>