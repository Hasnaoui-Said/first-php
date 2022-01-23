<?php

    $fruits = [
        ['titre'=>'Banan','prix'=>10,'poid'=>33],
        ['titre'=>'orange','prix'=>18,'poid'=>65],
        ['titre'=>'Banan','prix'=>54,'poid'=>62],
    ];
    $steep = 10;
    $result = array_map(function ($i) use ($steep){
            $i['prix'] *= $steep; 
            return $i;
        }, $fruits);


        echo "--------------hhh-------------<br/>";
        foreach($result as $f){
            foreach($f as $key=>$value)
                echo "$key : $value, ";
            echo "<br/>";
        }
        echo "--------------jjj-------------<br/>";

    function affiche_arr(&$fruits){
        foreach($fruits as $f){
            $f['prix'] = convert($f['prix']);
            foreach($f as $key=>$value){
                echo "$key : $value, ";
            }
            echo "<br/>";
        }
    }
    affiche_arr($fruits);
    function convert($price){
        return $price * 10;
    }

    echo "---------------------------<br/>";
    echo "---------------------------<br/>";
    foreach($fruits as $f){
        foreach($f as $key=>$value)
            echo "$key : $value, ";
        echo "<br/>";
    }