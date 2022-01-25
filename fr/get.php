<?php
// // super global _GET
//     $myName = $_GET['name'];
//     $myAge = $_GET['age'];
// supre global _POST
    // $myName = "";
    // $myAge = "";

    // if(in_array($_SERVER['REQUEST_METHOD'], ['POST', 'GET'])){
    //     $myName = $_REQUEST['name'];
    //     $myAge = $_REQUEST['age'];
    // }
    // // Coalescing Operator
    //     $myName = isset($_SERVER['METHOD_REQUEST']) ? $_REQUEST['name'] : "";
    //     $myAge = isset($_SERVER['METHOD_REQUEST']) ? $_REQUEST['age'] : "";
        $myName = $_REQUEST['name'] ?? "";
        $myAge = $_REQUEST['age'] ?? "";
?>
