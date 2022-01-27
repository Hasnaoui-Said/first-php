<?php
    $usres = [
        ['first name'=>"hasane", "email"=> "user@gmail.com", "role"=>"apprenant",'statut'=>'active'],
        ['first name'=>"hasane", "email"=> "user@gmail.com", "role"=>"apprenant"]
    ];
    $titre = "list des users";
    // echo $users[1]['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Liste des users</h1>
    <table class="table">
        <thead>
            <tr>
            <?php foreach($usres[0] as $key=>$value) { ?>
                <th><?php echo $key; ?></th>
            <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usres as $user) { ?>
            <tr>
                <?php foreach($user as $key=>$value) { ?>
                <td><?php echo $value; ?></td>
                <?php }?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>