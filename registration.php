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
    <title>Registration</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Forma registracii -->
    <form action="vendor/signup.php" method= "post" enctype="multipart/form-data">
        <label>Full name</label>
        <input type="text" name="full_name" placeholder="Enter your full name"/>
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter login"/>
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter email">
        <label>Profile Pic</label>
        <input type="file" name="avatar"/>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter the password">
        <label>Password again</label>
        <input type="password" name="password_confirm" placeholder="Enter the password again">
        <button type="submit">Sign up</button>
        <p>
            You already have an account? - <a href="authorization.php">Sign in!</a>
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