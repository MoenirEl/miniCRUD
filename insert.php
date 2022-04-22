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
    require_once 'PDO.php';
    // if($_SESSION['loggedin'] == true){
    //     echo "Welkom " . $_SESSION['username']
    // ;}

    // else{
    //     header("Location: inloggen.php")
    // ;}

    if (isset($_POST["naam"])) {
        $sql = "INSERT INTO products
    (naam, voorraad, prijs ) 
        VALUES 
    (:naam, :voorraad, :prijs)";;

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":naam", $_POST['naam']);
        $stmt->bindParam(":prijs", $_POST['prijs']);
        $stmt->bindParam(":voorraad", $_POST['voorraad']);
        $stmt->execute();
        $stmt->debugDumpParams();
        header("Location: admin.php");
    }
    ?>
    <div class="background">

        <form action="" method="post">
            naam<input type="text" name="naam" id=""><br />
            Prijs<input type="text" name="prijs" id=""><br />
            voorraad<input type="text" name="voorraad" id=""><br />
            submit<input type="submit" name="toevoegen" id="">

        </form>
    </div>
</body>

</html>