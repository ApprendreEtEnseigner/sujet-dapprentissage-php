<?php

    //* un objet pour recuperer les urls stockes dans l'objet Request
    class Dispatcher{

        var $request ;


        function __construct(){
            $this->request = new Request();

        //* apres recuperation, il avoir ses details d'ou l'objet Router (por Parser l'url) dans Router.php
        //* syntaxe d'appel d'une classe (Router) statique
        Router::parse($this->request->url, $this->request);
        $controller = $this->loadController();
        // $controller->view() ;
        call_user_func_array(array($controller,$this->request->action), $this->request->params);

        }

        function loadController(){
            $name = ucfirst($this->request->controller).'Controller';
            $file = ROOT.DS.'controller'.DS.$name.'.php';
            require $file;
            return new $name($this->request);
        }
    }