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
            height: 100vh;
            width:100%;
        }
        </style>
</head>
<body>
    <div class="container d-flex justify-content-center algn-items-center">
        <div class="row">
            <div class="col m-auto">
                <h1>Super global Get and Post</h1>
                <form action="confirmation.php" method="POST">
                    <div class="form-group  my-3">
                        <label for="name">Your name:</label>
                        <input name="NOM" type="text" class="form-control  my-1">
                    </div>
                    <div class="form-group  my-3">
                        <label for="age">Age:</label>
                        <input id="age" name="age" type="text" class="form-control my-1">
                    </div>
                    <button type="submit" class="my-3 btn w-100 btn-info">Create</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>