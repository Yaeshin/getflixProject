<?php 
    require_once('../config.php');

    function loadClass($className) {
        require_once('../models/' . $className . '.class.php');
    }
    spl_autoload_register('loadClass');

    session_start();
    if (empty($_SESSION['user'])) {
        header("Location: ../index.php");
        die();
    }

    $db=Db::getInstance($servername,$dbname,$username,$password);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <title>Profil User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="grid min-h-screen h-80 grid place-content-center bg-slate-700 shadow-2xl">
            <div class="justify-center border-2  rounded-md border-gray-700 p-7 mt-5 bg-slate-300 flex flex-col drop-shadow-2x shadow-lg shadow-indigo-500/40">
                    <div class="grid grid-rows-3 grid-flow-col gap-10 bg-bg-slate-300  h-150 w-150 p-5">
                        <div class="row-span-3 mx-10 "> 
                            <p>Profil</p>
                            <div class="flex items-center justify-center w-full">
                            <div class="  flex-col  pt-5 pb-6 flex flex-col w-full h-64 border-2 border-gray-300 rounded-lg cursor-pointer bg-gray-50 relative">
                                <div class="grid grid-rows-6">
                                    <div class="row-span-5">
                                    <img class="object-cover h-4/5 w-auto bg-gray-300 absolute top-2 left-2 right-2 rounded shadow-lg " src="./../img/profile.png">
                                    </div>
                                
                                
                                       <div class=" block row-span-1 row-start-6">
                            
                                        <label for="file-upload" class="absolute h-2 w-auto bottom-4  left-2 my-2   cursor-pointer bg-white font-medium text-black-600 focus-within:outline-none focus-within:ring-offset-2 focus-within:ring-indigo-500 ">
                      <span class="bg-gray-300 rounded tracking-wide px-12 shadow-lg hover:bg-gray-500 hover:text-white">Upload  image</span>
                      <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </label>
                    
                                                                                    </div>
                                                                    </div>          

                                    </div>
                                    
                            </div> 
                            <div class="block  mt-5 gap">
                                <label class="block text-black mb-1 ">Pseudo</label>
                                <input type="text" class="peer bg-slate-50 peer  appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white  focus:border-sky-500" placeholder=<?php echo $_SESSION['nickname'] ?> id="newNick" name="newNick"/>
                            </div>
                        </div>
                        <div class="row-span-4 col-span-2 grid grid-cols-1 gap-2">
                            <div class="block ">
                                <label class="block text-black mb-1 ">Adresse Mail</label>
                                <input type="email" class="peer mt-1 bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white  focus:border-sky-500" placeholder=<?php echo $_SESSION['user']->html_email() ?> id="newEmail" name="newEmail"/>
                                <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                                Please provide a valid email address.
                                </p>
                        </div>
                        <div class="block">
                            <label class="block text-black ">Mot de passe</label>
                            <input class="bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-sky-500 mt-1" type="password" placeholder="******************" id="newPw" name="newPw">
                        </div>
                        <div class="block mt-10">
                            <label class="block text-black"> Répéter le mot de passe </label>
                            <input class="bg-slate-50 peer shrink appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-sky-500 mt-1" type="password" placeholder="******************" id="confirmNewPw" name="confirmNewPw">
                        </div>
                    </div>
                
                </div>
                <div class=" flex justify-center rows-start-1  ">
                    <button  class=" bg-sky-500 hover:bg-sky-700 py-2 px-3 text-xl  mx-auto text-white rounded transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 shadow-lg shadow-blue-500/50">
                    S'inscrire
                    </button>
                </div>
            </div>
        </div>
    
</body>
</html>