<?php
    define('VIEWS_PATH','pages/');
    define('CONTROLLER_PATH','controllers/');

    define('ADMIN', 'a');
    define('MEMBER', 'm');

    require_once('config.php');

    function loadClass($className) {
        require_once('models/' . $className . '.class.php');
    }
    spl_autoload_register('loadClass');

    session_start();
  
    $db=Db::getInstance($conn);

    # default GET
    if (empty($_GET['action']))
        $_GET['action'] = 'home';

    if (!empty($_SESSION['user']))
        $db->connectUser($_SESSION['user']->email());

    # page selection
    switch ($_GET['action']) {
        case 'disconnect':
            session_destroy();
            header("Location: index.php?action=index");
            die();
        case 'register':
            require_once(CONTROLLER_PATH.'RegisterController.php');
            $controller = new RegisterController($db);
            break;
        case 'login':
            require_once(CONTROLLER_PATH.'ConnexionController.php');
            $controller = new ConnexionController($db);
            break;
        default:
            $_GET['action'] = 'home'; # in case an inexistent action is set
            header("Location: pages/menu.php");
            die();
    }

    # Body
    $controller->run();

?>