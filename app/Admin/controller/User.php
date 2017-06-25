<?php
    namespace  app\Admin\controller;
    use think\Controller;

    class User extends  Controller{

        public  function login(){
            return $this->fetch("login");
        }
    }