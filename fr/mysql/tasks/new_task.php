<?php
    $empty_content = '';
    $empty_description = '';
    $content = '';
    $description = '';
    
    require_once( "../app/models/task.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $content = $_POST['content'] ?? '';
        $description = $_POST['description'] ?? '';
        if(empty($content)){
            $empty_content = "Ce champ est obligatoire!";
        }
        if(empty($description)){
            $empty_description = "Ce champ est obligatoire!";
        }
        if(empty($description) || empty($content)){
            redirect("form.php?content=$content&description=$description&c=$empty_content&d=$empty_description");
            die();
        }
        $newTask = new Task();
        $newTask->addTask($content, $description);
        redirect("form.php");
        die();
    }
    // $newTask->addTask('content 1', 'description 1');

    function redirect($page){
        header("location:$page");
    }


?>