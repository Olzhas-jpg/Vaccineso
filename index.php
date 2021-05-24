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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
        $(function(){
        $('a[href^="#"]').click(function(){
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 800);
        return false;
        });
        });
    </script>
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
    <title>Vaccineso Database</title>
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
        <a class="nav-link active" href="#home">Home</a> 
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
<div class="fotorama" id="home">
  <div data-img="src/1.jpg" class="text1"><h1>Welcome to the Vaccineso for the workers!</h1></div>
  <div data-img="src/2.jpg" class="text1"><h2>Here you can find all information about people vaccination and Vaccination places.<br/>Also we always show changes that happen everyday.</h2></div>
  <div data-img="src/3.jpg" class="text1"><h1>Stay healthy with us!</h1></div>
</div>
    <table class="table table-bordered table-hover" id="table">
        <tr class="active">
            <th>ID</th>
            <th>Full Name</th>
            <th>IIN</th>
            <th>Birth Date</th>
            <th>Date of Vac.</th>
            <th>Step of Vac.</th>
            <th>Option 1 </th>
            <th>Option 2</th>
        </tr>
        <?php
            $workers = mysqli_query($connect, "SELECT * FROM `workers`");
            $workers = mysqli_fetch_all($workers);

            foreach($workers as $workers){
                
            ?>
             <tr>
                <td><?=$workers[0]?></td>
                <td><?=$workers[1]?></td>
                <td><?=$workers[2]?></td>
                <td><?=$workers[3]?></td>
                <td><?=$workers[4]?></td>
                <td><?=$workers[5]?></td>
                <td><a href="pageUpdate.php?id=<?= $workers[0]?>">Update</a></td>
                <td><a style="color:red" href="vendor/delete.php?id=<?= $workers[0]?>">Delete</a></td>
            </tr>
            <?php 
            }
        ?>  
</table>
<h3><b>Add new product</b></h3>
    <form action="vendor/create.php" method="post">
            <p>Full name</p>
            <input type="text" name="full_name">
            <p>IIN</p>
            <input type="number" name="iin"/>
            <p>Birth date</p>
            <input type="text" name="birth">
            <p>Date of Vac.</p>
            <input type="text" name="date">
            <p>Step</p>
            <input type="number" name="step"><br/>
            <br/>
            <button type="submit" class="btn btn-primary">Add new pacient</button>
            <br/>
            <br/>
    </form>  
    <footer id="info">
            <h3>@Copyriting, Vaccinesso, Almaty 2021</h3>
    </footer>        
</body>
</html>