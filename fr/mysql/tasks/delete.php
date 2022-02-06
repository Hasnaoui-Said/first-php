<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="input-group mb-3">
        <form class="form" action="" method="POST">
            <input name="id" type="search" class="form-control" placeholder="search" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-info" type="submit">Search</button>
        </form>
    </div>
<?php
require_once( "../app/models/task.php");

$task = new Task();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $search = $_POST['id'] ?? "";
    if(!empty($search)){
        $task->deleteTasks($search);?>
    <?php }} ?>
</body>
</html>