<?php
    $numbers = [12,43,7,55,44,34,87,65,88];
    function multiple($n){
        return $n * 2;
    }
    $steep = 3;
    $my_fct = fn ($i) => $i * $steep;
    $result = array_map(fn ($i) => $i * $steep, $numbers);
    
    print_r($numbers);
    echo "<br/>---------------------------<br/>";
    print_r($result);