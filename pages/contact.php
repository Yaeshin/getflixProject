<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/logo.png" type="image/x-icon">
  <title>Contact</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <div class="flex items-center h-screen justify-center bg-gray-800 shadow-2xl bg-gray-800">
    <div class="mx-auto w-2/3 md:w-4/6 lg:w-7/12 flex justify-center items-center border-2 rounded-xl border-gray-700 bg-gray-300 flex flex-col drop-shadow-2x shadow-lg shadow-indigo-500/40 mx-auto">
      <div class=" mx-auto ">
        <h1 class="text-4xl text-gray-800 sm:text-4xl font-bold mt-2 text-center">Contact</h1>
        <form class="mx-auto">
          <div class="p-2 w-full">
            <div class="block flex justify-center flex-col w-10/12 mx-auto ">
              <label class="block leading-7 text-lg text-gray-900  mt-5 sm:mt-10 text-center" for="email">Email</label>
              <input type="email" class="peer mt-1 bg-slate-50 peer appearance-none py-2 text-gray-700 leading-tight px-4 rounded focus:outline-none focus:ring focus:border-blue-500 h-full w-full w-[calc(100% - 10px)]bg-gray-50 border border-gray-300" placeholder="exemple@gmail.com" id="email" name="email" required autocomplete="on">
              <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                Please provide a valid email address.
              </p>
            </div>
            <!-- Nickname input -->
            <div class="block flex justify-center flex-col w-10/12 mx-auto mb-4">
              <label class="block text-slate-700 text-center text-lg" for="pseudo_inscription">Nickname</label>
              <input type="text" class="peer mt-1 bg-slate-50 peer appearance-none w-full text-gray-700 leading-tight  focus:bg-white rounded border border-gray-300 focus:outline-none focus:ring focus:border-blue-500 px-6 py-2" placeholder="Joe" id="pseudo_inscription" name="username" required>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <div class="inline relative w-30 ml-auto">
                  <div class="md:flex justify-around mb-6">
                    <div class="flex justify-around items-center">
                      <label for="countries_disabled" class="block mb-2 text-lg text-gray-900 lg:tracking-widest ms:me-2 pr-2">Topic</label>
                      <select id="countries_disabled" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mx-3  self-end rounded border border-gray-400 w-full md:min-w-[150px] text-center ms-4 " data-te-select-init>
                        <option>Choix</option>
                        <option>Questions</option>
                        <option>Remarques</option>
                      </select>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="p-2 w-full">
              <div class=" text-center mx-auto">
                <label for="message" class="leading-7 py-4 text-lg text-gray-900 ">Message</label>
                <textarea id="message" name="message" required="" rows="8" class=" w-11/12 bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-900 py-1 px-8 resize-none leading-6 transition-colors duration-200 ease-in-out  h-full min-h-[100px] "></textarea>
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="flex justify-center">
                <button type="submit" class="flex text-white bg-blue-500 border-0 py-3 px-6 focus:outline-none hover:bg-blue-900 rounded text-xl font-bold shadow-lg mx-0 flex-col text-center">
                  S'inscrire
                </button>
              </div>
            </div>
        </form>
      </div>
    </div>

  </div>
</body>

</html>



