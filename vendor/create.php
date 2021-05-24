<?php
    require_once 'connect.php';


    $full_name = $_POST['full_name'];
    $iin = $_POST['iin'];
    $birth_date = $_POST['birth'];
    $date_vac = $_POST['date'];
    $step = $_POST['step'];

    mysqli_query($connect, "INSERT INTO `workers` (`id`, `Full name`, `IIN`, `Birth date`, `Date of Vac.`, `Step of Vac.`) VALUES (NULL, '$full_name', '$iin', '$birth_date', '$date_vac', '$step')");
    header('Location:/');
?>