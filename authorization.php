<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("body").css("display", "none");

            $("body").fadeIn(2000);

            $("a.transition").click(function(event){
                event.preventDefault();
                linkLocation = this.href;
                $("body").fadeOut(1000, redirectPage);
            });

            function redirectPage() {
                window.location = linkLocation;
            }
        });
    </script>
</head>
<body>
<header>
    <ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link active" href="index.php/#home">Home</a> 
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#table">Database</a>
    </li>
    <img src="src/вакцинесо_файнал.png" width="100" height="80">
    <li class="nav-item">
        <a class="nav-link transition" href="cityPages.php">Vaccination places</a>
    </li>
    <li class="nav-item">
        <a class="nav-link transition"  href="authorization.php" tabindex="-1"
           aria-disabled="true">Sign In</a> 
    </li>
</ul>
</header>
    <form action="vendor/signin.php" method="post" >
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter the Login"/>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter the Password">
        <button type="submit" class="btn btn-outline-primary">Sign in</button>
        <p>
            You don't have an account? - <a href="registration.php">Go to the Registration!</a>
        </p>
        <?php
            if(isset($_SESSION['message'])){
                echo '<p class="msg">' .$_SESSION['message']. '</p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>

</html>