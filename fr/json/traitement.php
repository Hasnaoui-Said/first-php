<?php

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        // Effectuer une action
        if(!file_exists('data')){
            mkdir('data');
        }
        if(!file_exists('data/message.json')){
            touch('data/message.json');
        }
        $message =['id'=>date("dms"),'nom'=>$_POST['name'] ?? "",'email'=>$_POST['email'] ?? "",'note'=>$_POST['note'] ?? "",'date'=> date('dmY')];
        $json = file_get_contents('data/message.json');
        // echo "<br><br>____________________json_________________<br><br>";
        // echo $json;
        // echo "<br><br>____________________jsonDecode_________________<br><br>";
        $json = json_decode($json, true);
        // echo print_r($json);
        // echo "<br><br>_________________message____________________<br><br>";
        $json['users'][] = $message;
        echo print_r($json);
        $json = json_encode($json);
        // echo "<br><br>___________________jsonencode__________________<br><br>";
        // echo print_r($json);

        file_put_contents('data/message.json', $json);

        // print_r($message);

        header("location: ./");
    }

    else if($_SERVER['REQUEST_METHOD'] === 'GET'){
        if(file_exists("data/message.json")){
            $messages = file_get_contents("data/message.json");
            $messages = json_decode($messages, true);
            for($i=0; $i<count($messages["users"]); $i++)
                if($messages["users"][$i]['email'] != $_GET['id'])
                    $verifier["users"][] = $messages["users"][$i];
            $verifier = json_encode($verifier);
            file_put_contents('data/message.json', $verifier);
        }
        header("location: messages.php");
    }
