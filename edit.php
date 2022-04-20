<?php
require_once "PDO.php";


$stmt =$conn->prepare ("SELECT * FROM products WHERE id = :id");
$stmt->execute(['id'=>$_GET['id']]);
$data = $stmt->fetch();

if(isset($_POST["toevoegen"])){ 
    $sql = "UPDATE products SET 
    naam = :naam,
    voorraad =:voorraad, 
    prijs = :prijs
    WHERE id = :id
    ";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":naam", $_POST['naam']);
$stmt->bindParam(":prijs", $_POST['prijs']);
$stmt->bindParam(":voorraad", $_POST['voorraad']);
$stmt->bindParam(":id", $data['id']);
$stmt->execute();
$stmt->debugDumpParams();
header("Location: admin.php")
;

}
?>

<form action="" method="post">
    Prijs<input type="text" name="prijs" id="" value="<?php echo $data ['Prijs']; ?> " ><br />
    voorraad<input type="text" name="voorraad" id=""value=" <?php echo $data ['voorraad']; ?>"><br />
    naam<input type="text" name="naam" id=""value=" <?php echo $data ['Naam']; ?>"><br />

    <input type="submit" name="toevoegen" value="submit">
</form>