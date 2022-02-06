<?php

    include('library/library.php');
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        if(!file_exists('data')){
            mkdir('data');
        }
        if(!file_exists('data/message.json')){
            touch('data/message.json');
        }
        $json = file_get_contents('data/message.json');
        $json = json_decode($json, true);
        $message =['id'=>getMaxId($json['users']) + 1,'nom'=>$_POST['name'] ?? "",'email'=>$_POST['email'] ?? "",'note'=>$_POST['note'] ?? "",'date'=> date('F, j-Y')];
        
        $json['users'][] = $message;
        $json = json_encode($json);
        file_put_contents('data/message.json', $json);

        header("location: ./messages.php");
    }

    else if($_SERVER['REQUEST_METHOD'] === 'GET'){
        if(file_exists("data/message.json")){
            $messages = file_get_contents("data/message.json");
            print_r($messages);
            // echo "<br>--------------------<br>";
            $messages = json_decode($messages, true);
            // print_r($messages);
            // echo "<br>--------------------<br>";
            
            $id = getIdByEmail($messages, $_GET['id']);
            // echo $id;
            // echo "<br>--------------------<br>";
            // unset($messages['users'][$id]);
            for($i=0; $i<count($messages["users"]); $i++)
                if($messages["users"][$i]['id'] != $id)
                    $verifier["users"][] = $messages["users"][$i];
            $verifier = json_encode($verifier);
            echo $verifier;
            file_put_contents('data/message.json', $verifier);
        }
        header("location: messages.php");
    }
