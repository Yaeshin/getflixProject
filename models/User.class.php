<?php


class User
{
    private $_id_user;
    // password not needed as a varaible, check it directly in the database if needed
    private $_nickname;
    private $_email;
    private $_role;
    private $_is_disabled;

    public function __construct($id_user,$nickname, $email, $role, $is_disabled){
        $this->_id_user = $id_user;
        $this->_nickname = $nickname;
        $this->_email = $email;
        $this->_role = $role;
        $this->_is_disabled = $is_disabled;
    }

    public function id_user(){
        return $this->_id_user;
    }
    public function nickname(){
        return $this->_nickname;
    }
    public function email(){
        return $this->_email;
    }
    public function role(){
        return $this->_role;
    }
    public function is_disabled(){
        return $this->_is_disabled;
    }

    public function html_id_user(){
        return htmlspecialchars($this->_id_user);
    }
    public function html_nickname(){
        return htmlspecialchars($this->_nickname);
    }
    public function html_email(){
        return htmlspecialchars($this->_email);
    }
    public function html_role(){
        return htmlspecialchars($this->_role);
    }
    public function html_is_disabled(){
        return htmlspecialchars($this->_is_disabled);
    }
}