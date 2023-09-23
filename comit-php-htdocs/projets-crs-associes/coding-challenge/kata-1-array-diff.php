<?php

    function my_array_diff($liste_a, $liste_b){
        $conn_info = "mysql:host=localhost;dbname=array_diff;charset=utf8";
        $user = 'root';
        $pass = '';
    
        $pdo = new PDO($conn_info, $user, $pass);
    
        $sql = "SELECT value_a FROM $liste_a WHERE value_a NOT IN ( SELECT value_b FROM $liste_b )";
        $stmt = $pdo->prepare($sql);
    
        $stmt->execute();
    
        $result = $stmt->fetchALL(PDO::FETCH_COLUMN);
    
        return $result ;
    }

    $result = my_array_diff("liste_a", "liste_b");

    print_r($result) ;

?>