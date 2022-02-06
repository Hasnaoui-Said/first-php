<?php
    
    require_once( "../app/models/task.php");
    
    $task = new Task();

    $listTasks =  $task->getAllTasks();
    // le cas ou le return est object
    // print_r($listTasks);
    // print_r($listTasks[0]->id);
    // le cas ou le return est matrice
    // print_r($listTasks[0]['content']);
    // print_r($listTasks);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container w-75 border d-flex justify-content-center align-items-center"style="height: 100vh">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <?php foreach($listTasks[0] as $key=>$value){ ?>
                    <th><?php echo $key ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listTasks as $task){ ?>
                    <tr>
                    <?php foreach($task as $key=>$value){ ?>
                        <td><?php echo $value ?></td>
                    <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
