<?php



$sql = "select" * FROM aldum;
$stmt =$connect-> prepare($sql);
$stmt ->fetchall();
header (location: index.php);
foreach ($result as $record)
{
?>
<h3>titel =  <?php echo $record[]?> </h3>

}

[]