<?php
    session_start();

    if(!$_SESSION['user']){
        header('Location: /');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Profile</title>
</head>
<body>
    <header>
        <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a> 
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php/#table">Database</a>
        </li>
        <img src="src/вакцинесо_файнал.png" width="100" height="80">
        <li class="nav-item">
            <a class="nav-link transition" href="cityPages.php">Vaccination places</a>
        </li>
        <li class="nav-item">
            <a class="nav-link transition"  href="authorization.php" tabindex="-1"
            aria-disabled="true"><?= $_SESSION['user']['full_name'] ?></a> 
        </li>
    </ul>
    </header>
    <form >
        <img id="imgprof" src="<?= $_SESSION['user']['avatar']?>" width="300">
        <div class="container"id="prof">
        <div class="row">
        <div class="col"><a href="#"><?= $_SESSION['user']['email'] ?></a></div>
        <div class="col"></div><a href="vendor/logout.php" class = "logout">Quit</a></div>
    </form>
</body>
</html>