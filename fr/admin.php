<?php
    require_once('library/library.php');
    require_once('library/config.php');
    include('get.php');
    session_start();

    ensureUserIsAuthenticated();
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
    <?php include('header.php');?>

    <div class="container">
        <div class="card">
            <?php if($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET'){;?>
            <h2>Confirmation</h2>
            <h2>Admin Panel</h2>
            <p>
                <?php echo $_SESSION['email'];?>
            </p>
            <?php } ?>
            <a href="logout.php">Go back</a>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>
</html>