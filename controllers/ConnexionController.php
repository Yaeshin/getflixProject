<?php 
class ConnexionController
{
    private $_db;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function run()
    {
        $notification='';
        if(empty($_POST['email']) || empty($_POST['password'])){
            include(VIEWS_PATH . 'connexion.php');
            return;
        }

        $notification = $this->_db->login_user($_POST['email'],$_POST['password']);
        if (!isset($_SESSION['user'])){
            $notification = 'Sorry login failed for the following reason : '.$notification;
            include(VIEWS_PATH . 'home.php');
            return;
        }

        switch ($_SESSION['user']->html_role()) {
            case ADMIN :
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['role'] = ADMIN;
                header("Location: admin/admin.php");
                die();
            case MEMBER :
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['role'] = MEMBER;
                header("Location: pages/menu.php");
                die();
        }
    }
}
?>