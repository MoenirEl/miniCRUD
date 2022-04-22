<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body class="sky">
    <?php
    require_once "PDO.php";
    //  if($_SESSION['login'] == true){
    //      echo "Welkom " . $_SESSION['username']
    //  ;}

    //  else{
    //     header("Location: inloggen.php")
    //  ;}

    $sql = "SELECT * FROM products";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>

    <div class="tablebox">
        <div class="kleinebox">

            <a class="blue" href="index.php?">home</a>
            <a class="green" href="insert.php?">insert</a>
        </div>
        <table>
            <tr>
                <th>Titel</th>
                <th>Prijs</th>
                <th>Voorraad</th>
                <th>Acties</th>
            </tr>
            <?php
            foreach ($result as $re) { ?>
                <tr>
                    <td><?php echo $re["Naam"]; ?></td>
                    <td><?php echo $re["Prijs"]; ?></td>
                    <td><?php echo $re["voorraad"]; ?></td>
                    <td>
                        <a class="orange" href="edit.php?id=<?php echo $re["id"]; ?>"> edit </a>
                        <a class="red" href="delete.php?id=<?php echo $re["id"]; ?>"> delete</a>
                    </td>
                </tr>

            <?php
            }
            ?>
    </div>
    </table>




</body>

</html>