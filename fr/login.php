<?php
    require_once('library/library.php');
    require_once('library/config.php');
    session_start();
    
    if(isAuthenticated()){
        redirect('admin');
        die();
    }
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $status = "";

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        if(authenticate($email, $password)){
            $_SESSION['email'] = $email;
            redirect('admin');
            die();
        }else {
            $status = "This Provided credentials didn't not work!";
        }
    }
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
    <div class="container d-flex justify-content-center algn-items-center">
        <div class="row">
            <div class="col m-auto">
                <h1>Super global Get and Post</h1>
                <?php if($status != ""){ ?>
                <div class="alert alert-danger"><?php echo $status?></div>
                <?php } ?>
                <form action="" method="POST">
                    <div class="form-group  my-3">
                        <label for="email">Your email:</label>
                        <input id="email" name="email" type="email" class="form-control  my-1">
                    </div>
                    <div class="form-group  my-3">
                        <label for="age">Password:</label>
                        <input id="password" name="password" type="password" class="form-control my-1">
                    </div>
                    <button type="submit" class="my-3 btn w-100 btn-info">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>