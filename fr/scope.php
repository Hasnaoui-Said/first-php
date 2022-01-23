<?php

    // Local scope
    function echoSalam($age){
        $name = 'said';
        echo "slam $name age : $age";
    }
    // echoSalam(33);

    // Global scope
    
    $name = 'said';
    function autresalam($age){
        global $name;
        $name = "mohamed";
        echo "slam $name age : $age";
    }
    // autresalam(33);

    // Reference scopef
    
    function autresalams(&$name, $age){
        $name = "mohamed";
        echo "slam $name age : $age";
    }
    $nom = 'said';
    echo '<br/>------------------------<br/>';
    echo $nom;
    echo '<br/>------------------------<br/>';
    autresalams($nom, 45);
    echo '<br/>------------------------<br/>';
    echo $nom;



