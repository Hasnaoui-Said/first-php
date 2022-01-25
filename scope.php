<?php
    $name = "said";
    $age = 15;



    function affiche(&$name, $age){
        $name = "mohammed";
        echo $name;
    }

    affiche($name, $age);
    echo $name;

?>