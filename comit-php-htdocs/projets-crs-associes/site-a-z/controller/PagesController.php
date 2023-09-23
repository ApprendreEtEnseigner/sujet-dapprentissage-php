<?php

    class PagesController extends Controller{
        
        function view($nom){
            echo 'Vous avez demande la page : '. $nom ;
        }
    }
?>