<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-700 grid place-content-center">

  <div class="bg-slate-300  w-full max-w-sm grid h-full   w-75 h-80  rounded  mt-10 pb-8 flex -end">
    <div class="pl-14 pr-14 mt-8 mx-auto ">
      <h1 class="text-4xl text-gray-800 sm:text-4xl font-bold mb-4">Contact</h1>
      <form>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="email" class="leading-7 py-4 text-lg text-gray-900">Email</label>
            <input type="email" id="email" name="email" required="" class="peer w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out">
            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
              Please provide a valid email address.
            </p>


          </div>
          <div class="p-2 w-full">
            <div class="relative">
              <div class="inline-block relative w-30">
                <div class="md:flex md:items-center mb-6">
                  <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="topic">
                      Topic
                    </label>
                  </div>
                  <div class=" md:w-2/3">
                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="topic" id="topic">
                      <option>Choix</option>
                      <option>Option 2</option>
                      <option>Option 3</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 top-1/2 transform -translate-y-1/2">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                      </svg>
                    </div>



                  </div>
                </div>



              </div>







            </div>
          </div>
          <div class="p-2 w-full">
            <div class="relative">
              <label for="message" class="leading-7 py-4 text-lg text-gray-900">Message</label>
              <textarea id="message" name="message" required="" class=" w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-900 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
          </div>
          <div class="p-2 w-full">
            <div>
              <button type="submit" class="flex text-white bg-blue-500 border-0 py-3 px-6 focus:outline-none hover:bg-blue-900 rounded text-xl font-bold shadow-lg mx-0 flex-col text-center">
                S'inscrire
              </button>
            </div>
          </div>
      </form>
    </div>
  </div>
  <script>


  </script>
</body>

</html>