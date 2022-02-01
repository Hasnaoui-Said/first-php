<?php

    require_once('config.php');
    function authenticate($email, $password){
        return ($email === EMAIL && $password === PASSWORD);
    }

    function redirect($page){
        header("Location: $page.php");
    }
    
    function IsAuthenticated(){
        return isset($_SESSION['email']);
    }
    
    function ensureUserIsAuthenticated(){
        if(!IsAuthenticated()){
            redirect('login');
            die();
        }
    }
    

?>