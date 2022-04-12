<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="img">
        <?php
        include_once 'nav.php';
        ?>
<?php

$sql = "SELECT * FROM producten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>
</header>        
</body>
</html>