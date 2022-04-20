<?php

require_once'PDO.php';
// if ($_SESSION['loggedin'] == true ){
//     echo "Welcome";
// ;}else{
//     header("Location: inloggen.php");
//  ;}
 

$sql = "DELETE FROM products WHERE id=:id;
";
$stmt = $conn ->prepare($sql);
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();
header("Location: admin.php")
?>