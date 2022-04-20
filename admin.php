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
                <a href="edit.php?id=<?php echo $re["id"]; ?>"> edit </a>
                <a href="delete.php?id=<?php echo $re["id"]; ?>"> delete</a>
            </td>
        </tr>

    <?php
    }
    ?>
    <a href="insert.php?id=<?php echo $re["id"]; ?>">insert</a>
    <a href="index.php?id=<?php echo $re["id"]; ?>">index</a>
</table>