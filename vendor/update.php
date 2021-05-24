<?php 
    require_once 'connect.php';
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $iin = $_POST['iin'];
    $birth_date = $_POST['birth'];
    $date_vac = $_POST['date'];
    $step = $_POST['step'];

    mysqli_query($connect,"UPDATE `workers` SET `Full name` = '$full_name', `IIN` = '$iin', `Birth date` = '$birth_date', `Date of Vac.` = '$date_vac', `Step of Vac.` = '$step' WHERE `workers`.`id` = '$id'");
    header('Location:/');
?>
