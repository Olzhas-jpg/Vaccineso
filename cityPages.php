<?php
    require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Vaccination Places</title>
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
    html{
        background-color: #87CEFA;
    }
</style>
<body>
<header>
    <ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a> 
    </li>
    <img src="src/вакцинесо_файнал.png" width="100" height="80">
    <li class="nav-item">
        <a class="nav-link" href="cityPages.php" >Vaccination places</a>
    </li>
</ul>
</header>
<table class="table table-bordered table-hover" id="yak1">
        <tr class="active">
            <th>ID</th>
            <th>City</th>
            <th>Addres</th>
            <th>Phone number</th>
        </tr>
        <?php
            $places = mysqli_query($connect, "SELECT * FROM `places`");
            $places = mysqli_fetch_all($places);

            foreach($places as $places){
                
            ?>
             <tr>
                <td><?=$places[0]?></td>
                <td><?=$places[1]?></td>
                <td><?=$places[2]?></td>
                <td><?=$places[3]?></td>
            </tr>
            <?php 
            }
        ?>  
</table>
<footer id="info">
        <h3>@Copyriting, Vaccinesso, Almaty 2021</h3>
</footer>
</body>
</html>