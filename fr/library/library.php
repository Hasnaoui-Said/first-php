<?php
    function authenticate($email, $password){
        return ($email === "admin@gmail.com" && $password === "admin");
    }

    function redirect($page){
        header("Location: $page.php");
    }

?>