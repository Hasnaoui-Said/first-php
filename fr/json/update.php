<?php
        $messages = file_get_contents("data/message.json");
        $messages = json_decode($messages, true);
        for($i=0; $i<count($messages["users"]); $i++)
            if($messages["users"][$i]['id'] == $_GET['id'])
                $mySty = $messages["users"][$i];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super global get</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .container{
            width:100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col m-auto">
                <h1>Utilisez le format JSON pour gerer vos données en php</h1>
                <h2>Update</h2>
                <form action="up.php" method="POST">
                    <div class="form-group  my-3">
                        <label for="email" >Your email *:</label>
                        <input readonly  value="<?php echo $mySty['email'] ?>" required id="email" name="email" type="email" class="form-control  my-1">
                    </div>
                    <div class="form-group  my-3">
                        <label for="name">Your name *:</label>
                        <input required id="name" name="name" type="text" value="<?php echo $mySty['nom'] ?>" class="form-control  my-1">
                    </div>
                    <div class="form-group  my-3">
                        <label for="note">message:</label>
                        <textarea class="form-control my-1 name="note" id="note" name="note" cols="5" rows="3"> <?php echo $mySty['note']; ?></textarea>
                    </div>
                    <button type="submit" class="my-3 btn w-100 btn-info">update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>