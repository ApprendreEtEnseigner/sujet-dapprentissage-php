<?php

    //* un objet pour...
    class Router{
        //* Permet de parser une url
        //* @param sur l'URL a parser
        //* @return tableau contenant les parametres

        static function parse($url, $request){
            $url = trim($url, '/');
            $params = explode('/', $url);

            $request->controller = $params[0];
            $request->action = isset($params[1]) ? $params[1] : 'index';
            $request->params = array_slice($params, 2);

            return true;

        }
    }