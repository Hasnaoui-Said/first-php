<?php

    // function affiche($x = 'youcode'){
    //     echo "salam " .$x ."<br/>";
    // }

    // affiche("Mohamed");
    $films = [
        ['titre'=>'Piège de cristal','date'=>2013],
        ['titre'=>'Mad Max','date'=>2008],
        ['titre'=>'Matrix','date'=>2016],
        ['titre'=>'Kill bill','date'=>2019],
        ['titre'=>'Break time','date'=>2017],
        ['titre'=>'In time','date'=>2020],
        ['titre'=>'The Dark','date'=>2018]
    ];

    function titre($film){
        return $film['titre'];
    }
    function annee($film){
        return $film['date'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>films</title>
</head>
<body>
    <h1>liste des 10 film</h1>
    <ul>
    <?php foreach($films as $film){
        $status = (annee($film)<2018)? "coco": "kiki";?>
        <li><?php echo $status; ?></li>
        <p>
        <?php
            echo "titre: ". titre($film) ." -annee: " . annee($film). "<br/>";
        ?>
        </p>
    <?php }?>
    </ul>
</body>
</html>