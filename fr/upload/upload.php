<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        print_r($_FILES);

        $source = $_FILES['avatar']['tmp_name'];

        $destination = 'image/'.$_FILES['avatar']['name'];
        
        move_uploaded_file($source, $destination);
    }
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Image</h1>
    <img src="<?php echo $destination; ?>" alt="image">
</body>
</html>