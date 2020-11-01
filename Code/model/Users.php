<?php

namespace app\model;

class Users extends DbModel
{
    public $id;
    public $login;
    public $pass;

    /**
     * Users constructor.
     * @param $id
     * @param $login
     * @param $pass
     */
    public function __construct($id = null, $login = null, $pass = null)
    {
        $this->id = $id;
        $this->login = $login;
        $this->pass = $pass;
    }

    public static function auth($login, $pass){
        $user = static::getOneWhere('login',$login);

        if (password_verify($pass,$user->pass)) {
            $_SESSION['login'] = $login;
            $_SESSION['id'] = $user->id;

            return true;
        }
        return false;
    }

    public static function isAuth (){
        return isset($_SESSION['login']) ? true:false;
    }
    public static function getName(){
        return static ::isAuth()?$_SESSION['login']:"Guest";
    }

    public static function getTableName()
    {
        return "users";
    }

}