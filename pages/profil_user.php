<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Container with a grid layout, centered vertically and horizontally, with a shadow -->
    <div class="grid w-screen h-screen grid place-content-center bg-gray-800 shadow-2xl">
        <!-- Container with a border, rounded corners, and padding -->
        <div class="justify-center border-2 rounded-md border-gray-700 p-7 mt-5 bg-gray-300 flex flex-col drop-shadow-2x shadow-lg shadow-indigo-500/40 lg:px-32 lg:gap-10">
            <!-- Grid layout with three rows and some padding -->
            <div class="grid grid-rows-3 grid-flow-col gap-10 lg:gap-x-20 bg-gray-300 p-5 lg:m-10">
                <!-- First column with profile information -->
                <div class="row-span-3 mx-10"> 
                    <p>Profil</p>
                    <!-- Container for profile image and upload button -->
                    <div class="flex items-center justify-center w-full">
                        <div class="flex-col pt-5 pb-6 flex flex-col w-full h-64 border-2 border-gray-300 rounded-lg cursor-pointer bg-gray-50 relative">
                            <!-- Grid layout for image and upload button -->
                            <div class="grid grid-rows-6">
                                <!-- Profile image -->
                                <div class="row-span-5">
                                    <img class="object-cover h-4/5 w-auto bg-gray-300 absolute top-2 left-2 right-2 rounded shadow-lg" src="./../img/profile.png">
                                </div>
                                <!-- Upload button -->
                                <div class="block row-span-1 row-start-6">
                                    <label for="file-upload" class="absolute h-2 w-auto bottom-4 left-2 my-2 cursor-pointer bg-white font-medium text-black-600 focus-within:outline-none focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span class="bg-gray-300 rounded tracking-wide px-12 shadow-lg hover:bg-gray-500 hover:text-white">Upload image</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                </div>
                            </div>          
                        </div>
                    </div> 
                    <!-- Form for editing profile with input for nickname -->
                    <div class="block mt-5 gap">
                        <label class="block text-black mb-1" for="pseudo_inscription">Pseudo</label>
                        <input type="text" class="peer bg-slate-50 peer appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-sky-500" id="inline-password" placeholder="Joe" id="pseudo_inscription" name="pseudo_inscription"/>
                    </div>
                </div>
                <!-- Second column with email and password inputs -->
                <div class="row-span-4 col-span-2 grid grid-cols-1 gap-2">
                    <!-- Email input with error message -->
                    <div class="block">
                        <label class="block text-black mb-1" for="email_inscription">Adresse Mail</label>
                        <input type="email" class="peer mt-1 bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-sky-500" id="inline-password" placeholder="exemple@gmail.com" id="email_inscription" name="email_inscription"/>
                        <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                            Please provide a valid email address.
                        </p>
                    </div>
                    <!-- Password input -->
                    <div class="block">
                        <label class="block text-black" for="password_inscription">Mot de passe</label>
                        <input class="bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-sky-500 mt-1" id="inline-password" type="password" placeholder="******************" id="password_inscription" name="password_inscription">
                    </div>
                    <!-- Repeat password input -->
                    <div class="block mt-10">
                        <label class="block text-black"> Répéter le mot de passe</label>
                        <input class="bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-sky-500 mt-1" id="inline-password" type="password" placeholder="******************">
                    </div>
                </div>
            </div>
            <!-- Button for submitting the form -->
            <div class="flex justify-center rows-start-1">
                <button class="bg-blue-500 hover:bg-sky-700 py-2 px-5 text-xl text-white rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-lg shadow-blue-500/50">
                    Editer
                </button>
            </div>
        </div>
    </div>
</body>
</html>
