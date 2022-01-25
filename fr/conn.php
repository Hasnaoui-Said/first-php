<?php
    $server = "sql109.epizy.com";
    $username = "epiz_30890925";
    $pass = "vc5hu4wp9LpYs";
    $dbname = "epiz_30890925_saidhhhhhhhhhh";

    $servername = "sql109.epizy.com";
    $usernames = "epiz_30890925";
    $password = "vc5hu4wp9LpYs";
    
    // Create connection
    $testconn = new mysqli($servername, $usernames, $password, $dbname);
    
    // Check connection
    // if ($testconn->connect_error) {
    //   die("Connection failed: " . $testconn->connect_error);
    // }
    // echo "Connected successfully";


    // $c = mysqli_connect($server, $username, $pass, $dbname);
    // $conn = mysqli_connect($server, $username, $pass, $dbname);
    // if(!$c)
    //     die("Connection Failed:" .mysqli_connect_error());
    // else
    //     echo "Connect Success php mysql";

?>