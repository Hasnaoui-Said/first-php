<?php
    require_once('./new_task.php');
    $empty_content = "";
    $empty_description = "";
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $content = $_GET['content'] ?? "";
        $description = $_GET['description'] ?? "";
        $empty_content= $_GET['c'] ?? "";
        $empty_description = $_GET['d'] ?? "";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mysql connect insert</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <style>
        .container{
            height: 100vh;
            width:100%;
        }
        </style>
</head>
<body>
    <div class="container d-flex justify-content-center algn-items-center">
        <div class="row">
            <div class="col m-auto">
                <h1>Add New task content</h1>
                <form action="new_task.php" method="POST">
                    <div class="form-group  my-3">
                        <label for="content">Content*:</label>
                        <small class="alert-danger"><?php echo "<br/>$empty_content"; ?></small>
                        <input name="content" type="text" class="form-control  my-1"
                        <?php  if($content != ""){ echo "value = \"$content\"";} else {echo "placeholder = \"content\"";}?>
                        >
                    </div>
                    <div class="form-group  my-3">
                        <label for="description">Description*:</label>
                        <small class="alert-danger"><?php echo "<br/>$empty_description"; ?></small>
                        <input  id="description" name="description" type="text" class="form-control my-1"
                        <?php  if($description != ""){ echo "value=\"$description\"";} else {echo "placeholder = \"description\"";}?>
                        >
                    </div>
                    <button type="submit" class="my-3 btn w-100 btn-info">Create Task</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>