<?php

    //* un objet pour stocker les urls de user
    class Request{

        public $url ; //* url appele par l'utilisateur.

        function __construct(){
            //* initialisation d'1 propriete contenant l'url de user
            $this->url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
            // $this->url = $_SERVER['PATH_INFO'];

        }
    }

    