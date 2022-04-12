<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/keuze.css">
</head>

<body>
<main class="img">
    <?php
    include_once 'nav.php';
    ?>

<div class="containter">
            <div class="row">
                <div class="menu_kaarten wok">
                    <button onclick="document.location='menukaart.php'" class="button_menu">wok</button>
                </div>
            </div>
            <div class="row">
                <div class="menu_kaarten shushi">
                    <button onclick="document.location='menukaart.php'" class="button_menu">sushi</button>
                </div>
            </div>
            <div class="row">
                <div class="menu_kaarten dumplings">
                    <button onclick="document.location='menukaart.php'" class="button_menu">dumplings</button>
                </div>
            </div>
            <div class="row">
                <div class="menu_kaarten loempia">
                    <button onclick="document.location='menukaart.php'" class="button_menu">Loempia</button>
                </div>
            </div>
            <div class="row">
                <div class="menu_kaarten pollo">
                    <button onclick="document.location='menukaart.php'" class="button_menu">pollo en agridulce</button>
                </div>
            </div>
            <div class="row">
                <div class="menu_kaarten  pla">
                    <button onclick="document.location='menukaart.php'" class="button_menu">Pla Muek Yang</button>
                </div>
            </div>
        </div>

</main>
</body>
</html>