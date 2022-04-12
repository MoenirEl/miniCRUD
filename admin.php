<?php
require_once "PDO.php";
// $sth = $conn->prepare('SELECT *
//     FROM producten
//     WHERE calories < :calories AND colour = :colour');
// $sth->bindParam('calories', $calories, PDO::PARAM_INT);
// /* Names can be prefixed with colons ":" too (optional) */
// $sth->bindParam(':colour', $colour, PDO::PARAM_STR);
// $sth->execute();



$sql = "SELECT * FROM products";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
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
        <td>
            <a href="edit.php?id=<?php echo $re["id"]; ?>"> edit </a>
            <a href="delete.php?id=<?php echo $re["id"]; ?>"> delete</a>
        </td>
    </tr>

<?php
}
?>
</table>