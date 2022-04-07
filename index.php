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
    <header class="img">
        <?php
        include_once 'nav.php';
        ?>
        <div class="head_blok" >
            <p>Welkom in ons in oosterse stijl ingericht restaurant in het centrum van Nijmegen. Midden in de oudste stad van Nederland vind u een restaurant waar u zich snel in Oosterse sferen waant. Restaurant Peking bereid namelijk al tientallen jaren heerlijke aziatische gerechten. Indische, Chinese, Thaise of zelfs de Cantonese gerechten worden door onze gepassioneerde koks voor u en uw gezelschap met veel smaak bereid.</p> <br> 
             <p>  Geniet u liever thuis van deze heerlijk bereidde gerechten? U kunt bij ons natuurlijk ook afhalen. Wij bereiden uw bestelling dan vliegensvlug maar uiteraard wel met dezelfde souplesse als de gerechten die worden geserveerd in restaurant voor. Kijkt u ook eens op de pagina 'Maandmenu' waar we elke maand een voordelig en uitgebreid menu samenstellen.</p> <br>
             <p> Wij bezorgen ook catering aan huis of bij uw bedrijf. Voor meer informatie kunt u gerust contact met ons opnemen.</p> 
                                                                                                                                                                                                                                                                                                                                                                                                   

        </div>
   </header>

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