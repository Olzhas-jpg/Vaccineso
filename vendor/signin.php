<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '".mysqli_real_escape_string($connect,$login)."' AND `password` = '".mysqli_real_escape_string($connect,$password)."'");
    if (mysqli_num_rows($check_user) > 0){

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];

        header('Location:../profile.php');
    } else{
        $_SESSION['message'] = 'Wrong login or password';
        header('Location:../authorization.php');
    }
?>
<pre>
<?php
    print_r($user);
?>
</pre>