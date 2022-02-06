<?php
    require_once('library/library.php');
    require_once('library/config.php');
    session_start();
    
    if(isAuthenticated()){
        redirect('admin');
        die();
    }
    $email = '';
    $password = '';
    $status = "";
    $email_epmty = "";
    $password_epmty = "";

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if(empty($email)){
            $email_epmty = "<br/>email is required !";
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email_epmty .= "<br/>email is invalide !";
            
        }
        if(empty($password)){
            $password_epmty = "<br/>password is required !";
        }else{
            if(strlen($password) < 6){
                $password_epmty .= "<br/>password should be more than 8 carracteres !";
            }
            $options = array('options'=>array('regexp'=>'/^([a-zA-Z0-9])+$/i'));
            if(!filter_var($password, FILTER_VALIDATE_REGEXP, $options)){
                $password_epmty .= "<br/>password shoulde be Alpha numeric and spaces!";
            }
        }
        if(empty($password_epmty) and empty($email_epmty)){
            if(authenticate($email, $password)){
                $_SESSION['email'] = $email;
                redirect('admin');
                die();
            }else {
                $status = "This Provided credentials didn't not work!";
            }
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
                <h1>Super global Get and Post (login php)</h1>
                <?php if($status != ""){ ?>
                <div class="alert alert-danger"><?php echo $status?></div>
                <?php } ?>
                <form action="" method="POST">
                    <div class="form-group  my-3">
                        <label for="email">Your email:
                            <?php if($email_epmty != ""){ ?>
                            <small class="alert-danger"><?php echo $email_epmty?></small>
                            <?php } ?>
                        </label>
                        <input id="email" name="email" type="email" class="form-control  my-1"
                        <?php if($email != ""){ 
                             echo "value=\"$email\"";
                            }else { 
                                echo "placeholder = \"email\"";
                            } ?>
                        >
                    </div>
                    <div class="form-group  my-3">
                        <label for="age">Password:
                            <?php if($password_epmty != ""){ ?>
                            <small class="alert-danger"><?php echo $password_epmty?></small>
                            <?php } ?>
                        </label>
                        <input id="password" name="password" type="password" class="form-control my-1"
                        <?php if($password != ""){ 
                             echo "value=\"$password\"";
                            }else { 
                                echo "placeholder = \"password\"";
                            } ?>
                        >
                    </div>
                    <button type="submit" class="my-3 btn w-100 btn-info">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>