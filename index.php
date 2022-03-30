<?php
require_once 'PDO.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaishoku</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

</head>

<body>
    <?php
    include_once 'nav.php';
    ?>
    <div>

        <div class="restaurant">
            <div class="col-2">
                <div id="login">
                    <h1 class="login_welkom">Log in of register </h1>

                    <h2 class="middel_tekst"> voor extra bonusen!</h2>

                    <ul class="lijst">
                        <li class="space">
                            Voor de eerste keer 20% korting
                        </li>
                        <li>
                            Als u vaak bestelt op de zelfde account 5% korting
                        </li>
                        <li>
                            We geven aanraders voor langere blijvende klanten
                        </li>
                    </ul>
                    <button onclick="document.location='inloggen.php'" class="button login"> log in of register</button>
                </div>
            </div>

            <div class="col-2">
                <div class="noedels">
                    <h1 class="menu_welkom">Bekijk onze nieuwe menukaart!</h1>
                    <button onclick="document.location='sushi.php'" class="button menu">menukaart</button>
                </div>

            </div>




        </div>
    </div>



</body>


</html>