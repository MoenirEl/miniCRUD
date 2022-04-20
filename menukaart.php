<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
<header class="img">
        <?php
        include_once 'nav.php';
        require_once 'PDO.php';
        ?>
<?php

$sql = "SELECT * FROM products";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>
<div>
    
</div>
<table>
    <tr>
        <th>title</th>
        <th>prijs</th>
        <th>voorraad</th>
    </tr>

<?php
foreach ($result as $re) { ?>


    <tr>
        <td><?php echo $re["Naam"]; ?></td>
        <td><?php echo $re["Prijs"]; ?></td>
        <td><?php echo $re["voorraad"]; ?></td>
    </tr>

<?php
}
?>
</header>        
</body>
</html>