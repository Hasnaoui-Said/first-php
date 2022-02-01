<?php
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $newStuent =['id'=>date("dms"),'nom'=>$_POST['name'] ?? "",'email'=>$_POST['email'] ?? "",'note'=>$_POST['note'] ?? "",'date'=> date('dmY')];
        if(file_exists("data/message.json")){
            $messages = file_get_contents("data/message.json");
            $messages = json_decode($messages, true);
            for($i=0; $i<count($messages["users"]); $i++)
                if($messages["users"][$i]['email'] === $_POST['email']){
                    $messages["users"][$i]['nom'] = $_POST['name'] ?? "";
                    $messages["users"][$i]['note'] = $_POST['note'] ?? "";
                }
            $messages = json_encode($messages);
            file_put_contents('data/message.json', $messages);
        }
        header("location: messages.php");
        // print_r($newStuent);
    }

    
?>

