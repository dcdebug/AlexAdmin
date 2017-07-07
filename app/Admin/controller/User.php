<?php
    namespace  app\Admin\controller;
    use think\Controller;
    use think\Request;

    class User extends  Controller{

        public  function login(){
            return $this->fetch("login");
        }

        public  function siginIn(){
            $res=Request::instance()->post();
            var_dump($res);
        }
    }