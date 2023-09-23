
<?php
    //*snste pour stocker dossier parent de ce fichier...
    define('WEBROOT', dirname(__FILE__));

    //* snste pour stocker dossier parent de WEBROOT
    define('ROOT', dirname(WEBROOT));

    //* pour changer les \ en /
    define('DS', DIRECTORY_SEPARATOR);

    //* cnste pour stocker chemin du core...
    define('CORE', ROOT.DS.'core');

    //* cnste pour stocker chemin de la racine du site (site-a-z)...
    define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));

    //* inclure le file includes.php
    require CORE.DS.'includes.php' ;

    new Dispatcher();

?>
