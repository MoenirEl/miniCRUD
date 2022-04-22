<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/crud.css">
</head>

<body>
    <?php
    require_once "PDO.php";


    $stmt = $conn->prepare("SELECT * FROM products WHERE id = :id");
    $stmt->execute(['id' => $_GET['id']]);
    $data = $stmt->fetch();

    if (isset($_POST["toevoegen"])) {
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
        header("Location: admin.php");
    }
    ?>

    <form action="" method="post">
        naam<input type="text" name="naam" id="" value=" <?php echo $data['Naam']; ?>"><br />
        Prijs<input type="text" name="prijs" id="" value="<?php echo $data['Prijs']; ?> "><br />
        voorraad<input type="text" name="voorraad" id="" value=" <?php echo $data['voorraad']; ?>"><br />


        <input type="submit" name="toevoegen" value="submit">
    </form>
</body>

</html>