<?php

    // use session
    session_start();
    // supp les variable exist dans la memoire
    session_unset();
    // supp les addresse memoire 
    session_destroy();

    require_once('library/library.php');

    redirect('login');

    die();
?>