<?php

function getMaxId($arr){
    $max = 0;
    for($i = 0; $i<count($arr); $i++)
        if($arr[$i]['id'] > $max)
            $max = $arr[$i]['id'];
    return $max;
}
function getIdByEmail($arr, $value){
    $id = null;
    for($i = 0; $i<count($arr['users']); $i++)
        if($arr['users'][$i]['email'] === $value)
            $id = $i;
    return $id;
}
function getUsersByEmail($arr, $value){
    $user = null;
    for($i = 0; $i<count($arr); $i++)
        if($arr["users"][$i]['email'] === $value)
            $user = $arr['users']['id'];
    return $user;
}
function getUsersById($arr, $value){
    $user = null;
    for($i = 0; $i<count($arr); $i++)
        if($arr["users"][$i]['id'] === $value)
            $user = $arr['users']['id'];
    return $user;
}
?>