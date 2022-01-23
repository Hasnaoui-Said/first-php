<?php
$users = [
    ['nom'=>'nouamane', 'prenom'=>'nouamane'],
    ['nom'=>'said', 'prenom'=>'said'],
    ['nom'=>'hamza', 'prenom'=>'hamza'],
    ['nom'=>'chaime', 'prenom'=>'chaime']
];
function affiche($input){
foreach($input as $output)
    echo "nom : {$output['nom']} prenom: {$output['prenom']} <br/> ";
}

affiche($users);
 // $i = 0;
    // echo $i == 0 ? "egal 0" : "#";