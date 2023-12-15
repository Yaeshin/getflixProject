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
    <div class="mx-auto w-2/3 md:w-4/6 lg:w-7/12 flex justify-center items-center border-2 rounded-xl border-gray-700 py-7 mt-5 bg-gray-300 flex flex-col drop-shadow-2x shadow-lg shadow-indigo-500/40 mx-auto">
      <div class="pl-14 pr-14 mt-8 mx-auto ">
        <h1 class="text-4xl text-gray-800 sm:text-4xl font-bold mb-4 text-center">Contact</h1>
        <form class="mx-auto">
          <div class="p-2 w-full">
            <div class="block flex justify-center flex-col w-10/12 mx-auto ">
              <label class="block leading-7 text-lg text-gray-900  mt-10 sm:mt-10 text-center" for="email">Email</label>
              <input type="email" class="peer mt-1 bg-slate-50 peer appearance-none py-2 text-gray-700 leading-tight px-4 rounded focus:outline-none focus:ring focus:border-blue-500 h-full w-full w-[calc(100% - 10px)]bg-gray-50 border border-gray-300" placeholder="exemple@gmail.com" id="email" name="email" required autocomplete="on">
              <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                Please provide a valid email address.
              </p>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <div class="inline relative w-30 ml-auto">
                  <div class="md:flex justify-around mb-6">
                    <div class="flex justify-around items-center">
                      <label for="countries_disabled" class="block mb-2 text-lg text-gray-900 lg:tracking-widest ms:me-2 pr-2">Topic</label>
                      <select id="countries_disabled" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mx-3  self-end rounded border border-gray-400 w-full md:min-w-[150px] text-center ms-4 " data-te-select-init>
                        <option>choix</option>
                        <option>question</option>
                        <option>remarque</option>
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




<!-- <label class=" text-black md:text-right mb-1 md:mb-0 pr-4 " for="topic">
                      Topic
                    </label>
                  </div> -->
<!-- <div class=" md:w-4/6"> -->
<!-- <select class=" appearance-none text-center w-full bg-white border border-gray-400 hover:border-gray-500  py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="topic" id="topic">
                      <option>Choix</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                    <div class="pointer-events-none relative bottom-4 left-32 inset-y-0 right-0 flex items-center px-2 text-gray-700 top-1/2 transform -translate-y-1/2">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                      </svg> -->
<!-- </div> -->