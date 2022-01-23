<?php
    $numbres = [12,43,7,55,44,34,87,65,88];
    function multiple($n){
        return $n * 2;
    }

    // $result = array_map('multiple', $numbres);
    // fct anonyme
    $steep = 3;
    $result = array_map(function ($i) use ($steep){
                    return $i * $steep;
                }, $numbres);
    
    print_r($numbres);
    echo "<br/>";
    echo "<br/>---------------------------<br/>";
    echo "<br/>---------------------------<br/>";
    print_r($result);

    echo "<br/>---------------------------<br/>";
    echo "<br/>---------------------------<br/>";
    echo "<br/>---------------------------<br/>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>