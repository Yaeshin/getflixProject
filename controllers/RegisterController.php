<?php

class RegisterController{

    private $_db;

    public function __construct($db){
        $this->_db = $db;
    }

    public function run(){
        $notification = '';
        if(!empty($_POST['register'])){
            $notification = $this->_db->register($_POST['email'],$_POST['username'],$_POST['password']);
            if($notification=="true"){
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['role'] = ADMIN;
                $_SESSION['nickname'] =$_SESSION['user']->html_nickname();
                header("Location: pages/menu.php");
                die();
            }
        }

        include(VIEWS_PATH.'inscription.php');
    }

}
?>