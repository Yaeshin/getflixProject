
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="grid place-content-center min-h-screen   bg-slate-700 shadow-2xl">
            <div class="bg-contain bg-center ">
                <div class="grid grid-rows-3 grid-flow-col gap-4 bg-bg-slate-300 box-border h-150 w-150 p-4 border-4">
                    <div class="row-span-3"> 
    
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
        <img class="object-cover h-40 w-40 bg-white" src="./../img/profile.png" type="file">
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
        </div>
        <input id="dropzone-file" type="file" class="hidden" />
    </label>
</div> 
                        <div class="block  mt-5">
                            <label class="block text-black mb-1 " for="pseudo_inscription">Pseudo</label>
                            <input type="text" class="peer bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white  focus:border-sky-500" id="inline-password" placeholder= "Joe" id="pseudo_inscription" name="pseudo_inscription"/>
                        </div>
                    </div>
                    <div class="row-span-3 col-span-2">
                        <label class="block text-black mb-1 text-center" for="pseudo_inscription">Pseudo</label>
                        <input type="text" class="peer mt-5 bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white  focus:border-sky-500" id="inline-password" placeholder= "Joe" id="pseudo_inscription" name="pseudo_inscription"/>
                    </div> 
                    </div>
                </div>
        </div>
    </div>




</body>
</html>