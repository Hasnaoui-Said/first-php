<?php
    
// XSS cross site scripting
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $myName = htmlspecialchars($_POST['NOM']) ?? "";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
        <p>
        <?php
            echo ($myName);
        ?>
        </p>
    </div>
</body>
</html>