<?php
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(file_exists("data/message.json")){
            $messages = file_get_contents("data/message.json");
            $messages = json_decode($messages, true);
            include('library/library.php');
            $id = getIdByEmail($messages);
            $messages["users"][$id]['nom'] = $_POST['name'] ?? "";
            $messages["users"][$id]['note'] = $_POST['note'] ?? "";
                
            $messages = json_encode($messages);
            file_put_contents('data/message.json', $messages);
        }
        header("location: messages.php");
    }

    
?>

