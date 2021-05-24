<?php
    require_once 'vendor/connect.php';
    $pacient_id = $_GET['id'];
    $pacients = mysqli_query($connect,"SELECT * FROM `workers` WHERE `id` = '$pacient_id'");
    $pacient = mysqli_fetch_assoc($pacients);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>Update Pacient</title>
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
<style>
    header{ 
        width: 100%;
        height: 100px;
        background-color:#87CEFA;
    }
    img{
        margin-left: 715px;
    }
</style>
<body>
<header>
    <img src="src/вакцинесо_файнал.png" width="100" height="80">
</header>
<h3><b>Update product</b></h3>
<form role="form" action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?= $pacient['id']?>" />
    <p>Full name</p>
    <input type="text" name="full_name" value="<?= $pacient['Full name']?>">
    <p>IIN</p>
    <input type="number" name="iin" value="<?= $pacient['IIN']?>"/>
    <p>Birth date</p>
    <input type="text" name="birth" value="<?= $pacient['Birth date']?>">
    <p>Date of Vac.</p>
    <input type="text" name="date" value="<?= $pacient['Date of Vac.']?>">
    <p>Step</p>
    <input type="number" name="step" value="<?= $pacient['Step of Vac.']?>"><br/>
    <br/>
    <button type="submit" class="btn btn-primary">Save</button>
            
</form> 
</body>
</html>